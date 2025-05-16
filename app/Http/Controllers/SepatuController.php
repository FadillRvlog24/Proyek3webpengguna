<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SepatuController extends Controller
{
    protected $jenis_sepatu = [
        'sneakers', 'kulit', 'running shoes', 'slip on', 'loafers',
        'boots', 'stiletto', 'wedges', 'flat shoes', 'tas', 'topi'
    ];

    protected $tingkat_kotoran = [
        'kecil' => ['sedikit', 'ringan', 'tipis', 'agak'],
        'sedang' => ['normal', 'sedang', 'lumayan'],
        'besar' => ['banget', 'parah', 'besar', 'dekil', 'kuning', 'kotor']
    ];
    protected $matrix_rekomendasi = [
        'sneakers' => [
            'besar' => ['DEEP CLEAN', 'UNYELLOWING MIDSOLE', 'Repaint'],
            'sedang' => ['DEEP CLEAN', 'Quick clean'],
            'kecil' => ['Quick clean', 'CAP CLEANING']
        ],
        'kulit' => [
            'besar' => ['DEEP CLEAN', 'Repaint'],
            'sedang' => ['DEEP CLEAN', 'Quick clean'],
            'kecil' => ['Quick clean']
        ],
        'flat shoes' => [
            'besar' => ['DEEP CLEAN'],
            'sedang' => ['Quick clean'],
            'kecil' => ['CAP CLEANING']
        ],
    
        'tas' => [
            'besar' => ['BAGS TREATMENT', 'DEEP CLEAN'],
            'sedang' => ['BAGS TREATMENT'],
            'kecil' => ['BAGS TREATMENT']
        ],
       
        'topi' => [
            'besar' => ['CAP CLEANING', 'DEEP CLEAN'],
            'sedang' => ['CAP CLEANING'],
            'kecil' => ['CAP CLEANING']
        ]
    ];

    // Jenis khusus jika ada "kuning" → hanya tampilkan UNYELLOWING MIDSOLE
    protected $khusus_unyellowing = [
        'sneakers', 'kulit', 'running shoes', 'shoes', 'slip on',
        'loafers', 'boots', 'stiletto', 'wedges', 'flat shoes'
    ];

    public function form()
    {
        return view('form_upload');
    }

    public function hasil(Request $request)
    {
        $query = strtolower($request->q);
    
        $jenis = null;
        foreach ($this->jenis_sepatu as $item) {
            if (str_contains($query, strtolower($item))) {
                $jenis = $item;
                break;
            }
        }
    
        $kotoran = null;
        foreach ($this->tingkat_kotoran as $level => $keywords) {
            foreach ($keywords as $keyword) {
                if (str_contains($query, $keyword)) {
                    $kotoran = $level;
                    break 2;
                }
            }
        }
    
       // Logika khusus kuning
       if (str_contains($query, 'kuning') && in_array($jenis, $this->khusus_unyellowing)) {
        $rekomendasi = ['UNYELLOWING MIDSOLE'];
    } elseif ($jenis && $kotoran && isset($this->matrix_rekomendasi[$jenis][$kotoran])) {
        $rekomendasi = $this->matrix_rekomendasi[$jenis][$kotoran];
    } else {
        $rekomendasi = ['Quick clean'];
    }
    
        return view('pencarian_hasil', compact('jenis', 'kotoran', 'rekomendasi', 'query'));
    }
    
}

