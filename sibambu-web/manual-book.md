# Buku Panduan Penggunaan (Manual Book) – SiBambu 📖

Panduan lengkap tata cara penggunaan aplikasi **SiBambu (Sistem Bank Sampah Terpadu)** untuk Warga/Nasabah dan Petugas/Admin TPS. Dilengkapi petunjuk teknis integrasi pemindaian AI dan timbangan IoT.

---

## 📑 Daftar Isi
1. [Pengenalan Singkat](#1-pengenalan-singkat)
2. [Panduan untuk Warga / Nasabah](#2-panduan-untuk-warga--nasabah)
   - [Langkah 1: Download, Daftar & Login](#langkah-1-download-daftar--login)
   - [Langkah 2: Memilah Sampah dari Rumah](#langkah-2-memilah-sampah-dari-rumah)
   - [Langkah 3: Pindai Sampah dengan Kamera AI](#langkah-3-pindai-sampah-dengan-kamera-ai)
   - [Langkah 4: Penimbangan IoT & Kumpulkan DaurPoin](#langkah-4-penimbangan-iot--kumpulkan-daurpoin)
   - [Langkah 5: Pantau Rekapitulasi Lingkungan](#langkah-5-pantau-rekapitulasi-lingkungan)
   - [Langkah 6: Penukaran Poin ke E-Wallet & Tunai](#langkah-6-penukaran-poin-ke-e-wallet--tunai)
3. [Panduan untuk Petugas & Admin TPS](#3-panduan-untuk-petugas--admin-tps)
   - [Pengoperasian Timbangan Digital IoT (ESP32)](#pengoperasian-timbangan-digital-iot-esp32)
   - [Dasbor Admin TPS & Verifikasi Penyetoran](#dasbor-admin-tps--verifikasi-penyetoran)
4. [Tabel Indeks Kategori Sampah & Harga](#4-tabel-indeks-kategori-sampah--harga)
5. [Tanya Jawab & Bantuan Kendala (FAQ & Troubleshooting)](#5-tanya-jawab--bantuan-kendala-faq--troubleshooting)

---

## 1. Pengenalan Singkat

**SiBambu** adalah ekosistem bank sampah digital yang memudahkan Anda mengubah sampah anorganik rumah tangga menjadi keuntungan finansial (*DaurPoin*). Cukup dengan memindai sampah menggunakan kamera smartphone dan menimbangnya di posko bank sampah terdekat yang dilengkapi timbangan pintar IoT, Anda secara otomatis mendapatkan poin yang bisa dicairkan ke saldo dompet digital (**DANA**, **ShopeePay**) atau **Uang Tunai**.

---

## 2. Panduan untuk Warga / Nasabah

### Langkah 1: Download, Daftar & Login
1. **Unduh Aplikasi:** Cari `SiBambu` di Google Play Store dan instal di smartphone Android Anda.
2. **Buka Aplikasi:** Pada layar pembuka, pilih **"Daftar Akun Baru"**.
3. **Isi Formulir Pendaftaran:**
   - Nama Lengkap (sesuai identitas).
   - Nomor WhatsApp / HP Aktif (pastikan nomor ini sama dengan akun e-wallet Anda).
   - Alamat Email.
   - Kata Sandi (minimal 6 karakter).
   - Pilih **Unit TPS Terdekat** (misal: *TPS Dusun Krajan* atau *TPS Sukamaju*).
4. **Masuk (Login):** Masukkan Nomor HP atau Email dan Kata Sandi Anda.

---

### Langkah 2: Memilah Sampah dari Rumah
Sebelum disetor, pisahkan sampah rumah tangga Anda menjadi beberapa kategori:
- **Plastik Bersih:** Botol air mineral (PET), gelas plastik, botol sampo/sabun, wadah plastik keras, kantong kresek kering.
- **Kertas & Kardus:** Kardus box cokelat, buku pelajaran bekas, kertas dokumen, kertas dupleks.
- **Logam & Seng:** Kaleng biskuit/susu/minuman, besi bekas, kuningan, tembaga, panci bekas.
- **Kaca:** Botol sirup, botol kecap utuh (tidak pecah).
- **Minyak Jelantah:** Minyak goreng bekas pakai yang ditampung dalam botol/jeriken tertutup.

> 💡 **Tips Praktis:** Lepaskan tutup botol plastik dan remukkan botol agar menghemat ruang penyimpanan. Pastikan sampah tidak basah atau tercampur sisa makanan.

---

### Langkah 3: Pindai Sampah dengan Kamera AI
Fitur AI membantu Anda mengenali jenis material sampah dan melihat estimasi nilai per kilogram secara instan:
1. Tekan tombol **Kamera / Scan** di bagian tengah bawah menu aplikasi.
2. Berikan izin akses kamera saat pertama kali diminta (`Izinkan SiBambu mengambil foto`).
3. Arahkan lensa kamera ke arah sampah yang ingin Anda periksa. Pastikan pencahayaan cukup terang.
4. Tekan tombol **Ambil Foto / Pindai**.
5. Sistem AI (*Google Gemini*) akan menganalisis gambar dalam 2-3 detik dan menampilkan:
   - **Jenis Sampah Terdeteksi:** (Contoh: *Botol Plastik PET*, *Kardus Box*, dsb).
   - **Kategori:** Anorganik bernilai daur ulang.
   - **Indeks Nilai Tukar:** Perkiraan poin per kg.

---

### Langkah 4: Penimbangan IoT & Kumpulkan DaurPoin
1. Bawa sampah yang telah dipilah ke TPS / Posko SiBambu terdekat di desa Anda.
2. Temui petugas bank sampah dan tunjukkan aplikasi SiBambu Anda.
3. Sampah diletakkan di atas **Timbangan Cerdas IoT SiBambu**.
4. Sensor timbangan secara otomatis membaca berat sampah (misalnya `3.25 kg`) dan mengirimkan data secara langsung ke server melalui jaringan internet.
5. Petugas mengonfirmasi data transaksi di sistem.
6. Aplikasi Anda akan memunculkan layar **"Scan Berhasil!"** dan saldo **DaurPoin** Anda langsung bertambah secara *real-time*.

---

### Langkah 5: Pantau Rekapitulasi Lingkungan
1. Buka menu **"Riwayat"** atau **"Rekapitulasi Sampah"**.
2. Anda dapat melihat:
   - Total kilogram sampah yang telah Anda setor.
   - Rincian jenis sampah (Plastik, Kertas, Logam, Kaca).
   - Jejak kontribusi positif Anda dalam mengurangi timbunan sampah ke TPA Jalupang.

---

### Langkah 6: Penukaran Poin ke E-Wallet & Tunai
1. Di halaman beranda, klik kartu **"Tukar Poin"**.
2. Pilih metode pencairan yang Anda inginkan:
   - 🟢 **Uang Tunai:** Dapat diambil langsung di kasir posko TPS desa.
   - 🔵 **DANA:** Saldo ditransfer ke nomor dompet digital DANA Anda.
   - 🟠 **ShopeePay:** Saldo ditransfer ke nomor akun ShopeePay Anda.
3. Masukkan jumlah poin yang ingin ditukarkan.
4. Periksa kembali nomor telepon penerima e-wallet.
5. Klik **"Konfirmasi Penukaran"**. Permintaan penukaran akan diproses oleh sistem.

---

## 3. Panduan untuk Petugas & Admin TPS

### Pengoperasian Timbangan Digital IoT (ESP32)
1. **Pemeriksaan Daya:** Pastikan baterai lithium 18650 pada timbangan telah terisi. Nyalakan saklar daya (*Power ON*).
2. **Koneksi Jaringan:** Timbangan IoT akan otomatis menghubungkan diri ke hotspot Wi-Fi posko TPS yang telah dikonfigurasi.
3. **Kalibrasi Nol (Tare):** Pastikan platform timbangan dalam kondisi bersih tanpa beban sebelum penimbangan pertama. Indikator LED akan menyala hijau tanda timbangan siap.
4. **Proses Penimbangan:**
   - Letakkan keranjang/kantong sampah di atas timbangan.
   - Tunggu 2 detik hingga pembacaan sensor stabil.
   - Tekan tombol konfirmasi timbang pada alat atau aplikasi admin. Data berat akan terkirim via REST API secara nirkabel.

### Dasbor Admin TPS & Verifikasi Penyetoran
1. Login menggunakan akun berizin **Petugas TPS**.
2. Masuk ke menu **Dashboard Admin TPS**:
   - Memantau akumulasi total kilogram sampah masuk hari ini.
   - Memeriksa daftar antrean nasabah yang sedang menyetor.
   - Memvalidasi jenis sampah sesuai klasifikasi AI.
   - Menyetujui pencairan tunai bagi warga yang menukarkan poin secara offline.

---

## 4. Tabel Indeks Kategori Sampah & Perkiraan Nilai Poin

Berikut adalah acuan kategori sampah anorganik yang terdaftar di sistem SiBambu *(harga dapat disesuaikan berkala mengikuti pasar)*:

| No | Kategori Sampah | Satuan | Contoh Material | Nilai DaurPoin / kg |
| :---: | :--- | :---: | :--- | :---: |
| 1 | **Botol Mineral (PET Bening)** | kg | Aqua, Le Minerale, botol jus bening | 2.500 - 3.500 Poin |
| 2 | **Gelas Plastik (PP)** | kg | Gelas kopi kemasan, gelas teh | 2.000 - 3.000 Poin |
| 3 | **Kardus Cokelat** | kg | Box kemasan makanan, kardus paket ekspedisi | 1.500 - 2.200 Poin |
| 4 | **Kertas Arsip / Buku** | kg | Kertas HVS bekas, koran, buku catatan | 1.200 - 1.800 Poin |
| 5 | **Kaleng & Aluminium** | kg | Kaleng softdrink, kaleng susu, wajan bekas | 7.000 - 12.000 Poin |
| 6 | **Besi Super / Besi Cor** | kg | Besi cor beton, rangka besi, potongan logam berat | 3.500 - 5.000 Poin |
| 7 | **Tembaga & Kuningan** | kg | Kabel kawat tembaga, pipa tembaga AC | 60.000 - 85.000 Poin |
| 8 | **Botol Kaca Utuh** | pcs | Botol sirup marjan, botol kecap besar | 500 - 1.000 Poin |
| 9 | **Minyak Jelantah** | liter | Minyak sisa penggorengan dapur | 4.000 - 6.500 Poin |

---

## 5. Tanya Jawab & Kendala Teknis (FAQ & Troubleshooting)

### Q: Apa yang harus saya lakukan jika AI salah mengidentifikasi jenis sampah?
**A:** AI Google Gemini Vision memiliki tingkat akurasi tinggi, namun pada sudut pengambilan gambar yang kurang jelas atau pencahayaan gelap, hasil deteksi bisa kurang tepat. Anda cukup menekan tombol **"Ulangi Scan"** dengan memposisikan objek sampah lebih jelas di tengah bingkai kamera. Petugas TPS juga dapat memilih opsi manual di kasir saat sampah ditimbang.

### Q: Apakah timbangan IoT bisa digunakan jika listrik desa padam?
**A:** Bisa! Timbangan cerdas SiBambu dilengkapi modul baterai mandiri tipe 18650 dan catu daya portabel sehingga tetap beroperasi normal meskipun aliran listrik PLN sedang padam. Petugas cukup mengaktifkan hotspot smartphone jika router Wi-Fi mati.

### Q: Berapa lama waktu yang dibutuhkan sampai saldo e-wallet saya cair?
**A:** Pencairan e-wallet diproses oleh sistem otomatis. Rata-rata saldo DANA atau ShopeePay masuk dalam hitungan menit hingga maksimal 1x24 jam kerja.

### Q: Ke mana saya harus melapor jika memiliki kendala aplikasi?
**A:** Anda dapat menghubungi posko admin SiBambu di TPS Bambu Raya Dusun Krajan / Dusun Sukamaju, atau kirimkan pesan WhatsApp ke nomor pengaduan resmi: **0896-7145-1167**.
