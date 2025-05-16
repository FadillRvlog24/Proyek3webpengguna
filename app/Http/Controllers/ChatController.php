<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    public function handleMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:255'
        ]);

        $message = strtolower(trim($request->input('message')));
        Log::info("Received message: " . $message);

        // Manual greeting detection fallback
        if ($this->isGreeting($message)) {
            Log::info("Manual greeting detected");
            return $this->greetingResponse();
        }

        try {
            $flaskResponse = Http::timeout(15)
                ->get('http://10.0.169.100:5000/analyze', [
                    'q' => $message
                ]);

            if ($flaskResponse->failed()) {
                throw new \Exception("Flask API error: " . $flaskResponse->status());
            }

            $witData = $flaskResponse->json()['data'] ?? [];
            Log::debug("Wit.ai response:", $witData);

            // Prioritize greeting from Wit.ai if detected
            if ($this->detectWitGreeting($witData)) {
                return $this->greetingResponse();
            }

            return $this->handleProductAnalysis($witData['entities'] ?? []);

        } catch (\Exception $e) {
            Log::error("Chatbot error: " . $e->getMessage());
            return response()->json([
                'reply' => 'Maaf, sedang ada gangguan teknis. Silakan coba lagi nanti.',
                'status' => 'error'
            ], 500);
        }
    }

    // Helper Methods
    private function isGreeting(string $message): bool
    {
        $greetings = ['halo', 'hi', 'hello', 'hai', 'p', 'selamat pagi', 'selamat siang'];
        return in_array($message, $greetings);
    }

    private function detectWitGreeting(array $witData): bool
    {
        // Check multiple possible intent names
        $intent = $witData['intents'][0]['name'] ?? '';
        $trait = $witData['traits']['wit$greeting'][0]['value'] ?? '';
        
        return in_array(strtolower($intent), ['greeting', 'sapaan']) || 
               strtolower($trait) === 'true';
    }

    private function greetingResponse()
    {
        return response()->json([
            'reply' => "Halo! Saya MbahSuh Bot. Ada yang bisa saya bantu?",
            'status' => 'success'
        ]);
    }

    private function handleProductAnalysis(array $entities)
    {
        $productType = $this->extractEntity($entities, [
            'jenis_sepatu:jenis_sepatu',
            'jenis_barang:jenis_barang'
        ]);

        $condition = $this->extractEntity($entities, [
            'kondisi:kondisi'
        ], true);

        $recommendation = $this->generateRecommendation($productType, $condition);

        return response()->json([
            'reply' => "Saya mendeteksi:\n\n".
                      "🔍 *Jenis Produk*: $productType\n".
                      "🛠️ *Kondisi*: $condition\n\n".
                      "💡 *Rekomendasi Layanan*: **$recommendation**",
            'status' => 'success'
        ]);
    }

    private function extractEntity(array $entities, array $keys, bool $isArray = false)
    {
        foreach ($keys as $key) {
            if (!empty($entities[$key])) {
                return $isArray 
                    ? implode(', ', array_column($entities[$key], 'value'))
                    : $entities[$key][0]['value'];
            }
        }
        return 'tidak diketahui';
    }

    private function generateRecommendation(string $type, string $condition)
    {
        $type = strtolower($type);
        $condition = strtolower($condition);

        if (str_contains($condition, 'menguning')) return 'UNYELLOWING MIDSOLE';
        if (str_contains($type, 'topi')) return 'CAP CLEANING';
        if (str_contains($type, 'tas') || str_contains($condition, 'berdebu')) return 'BAGS TREATMENT';
        if (str_contains($condition, 'kotor') && $type === 'sneakers') return 'DEEP CLEAN';

        return 'QUICK CLEAN';
    }
}