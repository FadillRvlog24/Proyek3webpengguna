from flask import Flask, request, jsonify
import cv2
import numpy as np
from PIL import Image
import io

app = Flask(__name__)

@app.route('/predict', methods=['POST'])
def predict():
    # Ambil gambar dari request
    file = request.files['image']
    img = Image.open(file.stream).convert('RGB')
    img_np = np.array(img)

    # Proses: grayscale dan threshold sederhana
    gray = cv2.cvtColor(img_np, cv2.COLOR_RGB2GRAY)
    _, thresh = cv2.threshold(gray, 130, 255, cv2.THRESH_BINARY_INV)
    dirty_pixels = np.sum(thresh == 255)
    total_pixels = thresh.size
    dirt_ratio = dirty_pixels / total_pixels

    # Logika rekomendasi berdasarkan kondisi visual
    if dirt_ratio > 0.5:
        rekomendasi = ["DEEP CLEAN", "UNYELLOWING MIDSOLE", "Repaint"]
    elif dirt_ratio > 0.3:
        rekomendasi = ["Quick clean", "CAP CLEANING"]
    elif dirt_ratio > 0.15:
        rekomendasi = ["Quick clean"]
    else:
        rekomendasi = ["BAGS TREATMENT"]  # Misalnya diasumsikan tas atau bersih

    # Tambahkan opsi REPAIR jika deteksi kerusakan (contoh: banyak warna gelap dan pecah)
    if np.mean(gray) < 50:
        rekomendasi.append("Repair")

    return jsonify({
        "status": "success",
        "dirt_ratio": round(dirt_ratio, 2),
        "rekomendasi": rekomendasi
    })

if __name__ == '__main__':
    app.run(host='127.0.0.1', port=5000)  # Mengubah Flask ke port 8000

