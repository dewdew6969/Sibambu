# Kebijakan Privasi (Privacy Policy) – Aplikasi SiBambu 🔒

**Tanggal Efektif:** 4 Juni 2026  
**Terakhir Diperbarui:** 6 Oktober 2026  
**Pengembang / Entitas:** Tim Inovasi SiBambu & Horizon University Indonesia  
**URL Situs Resmi:** `https://sibambu.id/privacy-policy` *(sesuaikan dengan domain WordPress Anda)*  
**Kontak Email Privasi:** `dewa.permana.fict@krw.horizon.ac.id` / `support@sibambu.id`

---

## 1. Pendahuluan

Selamat datang di **SiBambu (Sistem Bank Sampah Terpadu)**. Kami menghargai privasi Anda dan berkomitmen untuk melindungi data pribadi pengguna aplikasi mobile kami (tersedia di Google Play Store) dan situs web terkait.

Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, menyimpan, memproses, dan melindungi informasi pribadi yang Anda berikan saat mengunduh, mendaftar, dan menggunakan aplikasi SiBambu. Kebijakan ini disusun sesuai dengan regulasi perlindungan data yang berlaku di Republik Indonesia (Undang-Undang Pelindungan Data Pribadi / UU PDP) serta panduan kebijakan pengembang **Google Play Store**.

Dengan mendaftar atau menggunakan aplikasi SiBambu, Anda menyatakan bahwa Anda telah membaca, memahami, dan menyetujui seluruh ketentuan dalam Kebijakan Privasi ini.

---

## 2. Informasi dan Data yang Kami Kumpulkan

Kami mengumpulkan beberapa jenis informasi untuk memberikan dan meningkatkan layanan bank sampah pintar kepada Anda:

### A. Informasi Identitas Pribadi (Akun Pengguna)
Saat Anda membuat akun di SiBambu, kami mengumpulkan:
- **Nama Lengkap**
- **Nomor Telepon / WhatsApp** (digunakan untuk verifikasi akun dan penyaluran saldo insentif e-wallet)
- **Alamat Email Aktif**
- **Kata Sandi (Password)** (disimpan dalam bentuk terenkripsi satu arah)
- **Lokasi Domisili / Wilayah TPS Terdekat** (misalnya Dusun Krajan / Sukamaju, Desa Warung Bambu)

### B. Data Citra & Akses Kamera (Camera & Image Data)
- **Foto Sampah:** Aplikasi memerlukan akses kamera perangkat Anda (`android.permission.CAMERA`). Akses ini **hanya digunakan** ketika Anda atau petugas mengambil foto material sampah untuk dipindai oleh kecerdasan buatan (Google Gemini AI).
- **Catatan Privasi Kamera:** Kami **tidak** menggunakan kamera untuk pengenalan wajah *(facial recognition)*, memindai data pribadi, atau mengumpulkan foto pribadi pengguna di luar objek sampah anorganik.

### C. Data Transaksi Sampah & Timbangan IoT
- **Berat Sampah Fisik:** Data bobot sampah yang diterima dari perangkat keras Timbangan IoT (ESP32 Load Cell) secara nirkabel.
- **Kategori & Jenis Sampah:** Klasifikasi material (misalnya Botol PET, Kardus, Kaleng, Besi, dll).
- **Riwayat Penyetoran & Tanggal Transaksi:** Catatan waktu dan volume sampah yang disetorkan di bank sampah/TPS.

### D. Data Finansial & Penukaran Insentif (DaurPoin)
- **Saldo DaurPoin:** Akumulasi poin digital yang didapatkan dari penyetoran sampah.
- **Informasi Akun Pembayaran / E-Wallet:** Nomor akun tujuan pencairan (seperti nomor akun DANA, ShopeePay, atau catatan penarikan tunai di TPS). Kami **tidak** menyimpan PIN atau kredensial perbankan rahasia pengguna.

### E. Data Teknis & Penggunaan Perangkat
- Tipe perangkat, versi sistem operasi Android, alamat IP sementara saat mengakses API backend, dan catatan diagnostik crash log untuk keperluan perbaikan performa aplikasi.

---

## 3. Izin Akses Perangkat (Device Permissions)

Aplikasi SiBambu meminta izin Android berikut dengan alasan fungsional yang jelas:
1. `android.permission.CAMERA`: Untuk mengambil gambar sampah secara langsung saat proses pemindaian AI.
2. `android.permission.INTERNET`: Untuk berkomunikasi dengan server backend API, mengirimkan foto sampah ke Google Gemini AI, dan menyinkronkan data timbangan IoT.
3. `android.permission.ACCESS_NETWORK_STATE`: Untuk mendeteksi apakah perangkat terhubung ke internet sebelum mengirimkan permintaan scan atau penukaran poin.
4. `android.permission.READ_EXTERNAL_STORAGE` / `READ_MEDIA_IMAGES` *(opsional)*: Untuk memilih foto sampah dari galeri jika pengguna tidak mengambil foto secara langsung.

---

## 4. Cara Kami Menggunakan Informasi Anda

Informasi yang dikumpulkan digunakan untuk tujuan berikut:
1. **Memproses Operasional Bank Sampah:** Mengidentifikasi jenis sampah, memvalidasi berat, dan mengonversinya menjadi poin digital secara akurat.
2. **Penyaluran Insentif Ekonomi:** Mengirimkan saldo poin dan memproses penukaran poin ke e-wallet pilihan Anda.
3. **Mencegah Penipuan (*Fraud Prevention*):** Menjamin bahwa setiap transaksi penimbangan berasal dari timbangan IoT resmi dan diverifikasi oleh petugas TPS tanpa manipulasi manual.
4. **Analitik Lingkungan:** Menyediakan data statistik rekapitulasi volume sampah yang berhasil didaur ulang bagi masyarakat dan Pemerintah Desa.
5. **Layanan Bantuan Pengguna:** Membantu menyelesaikan keluhan atau kendala teknis saat menggunakan aplikasi.

---

## 5. Pemrosesan Data oleh Pihak Ketiga (Third-Party Services)

Kami hanya membagikan data kepada pihak ketiga tepercaya sejauh diperlukan untuk menjalankan fitur aplikasi:
- **Google Gemini API (Google Cloud / Alphabet Inc.):** Foto sampah yang diambil dikirimkan secara aman (Base64) ke model AI Google Gemini untuk keperluan klasifikasi material sampah. Google memproses gambar tersebut sesuai dengan standar keamanan API perusahaan.
- **Penyedia Saldo / E-Wallet Gateway (DANA, ShopeePay):** Nomor telepon penerima diteruskan secara aman ke penyedia layanan dompet digital untuk pencairan saldo DaurPoin.
- **Infrastruktur Server & Basis Data:** Data disimpan pada server hosting aman menggunakan protokol HTTPS terenkripsi SSL/TLS.

Kami **tidak pernah menjual, menyewakan, atau memperdagangkan data pribadi pengguna kepada pihak ketiga atau pengiklan mana pun**.

---

## 6. Penyimpanan dan Keamanan Data

- Kami menerapkan langkah-langkah keamanan teknis dan organisasi yang ketat, termasuk enkripsi data saat transit (SSL/HTTPS), proteksi database, dan pembatasan akses hak administratif.
- Meskipun kami berupaya keras melindungi data Anda, tidak ada metode transmisi internet atau penyimpanan elektronik yang 100% mutlak aman. Kami terus memperbarui sistem pertahanan siber kami.

---

## 7. Retensi dan Penghapusan Data (Account & Data Deletion)

Sesuai dengan ketentuan Google Play Store mengenai **Penghapusan Akun Pengguna**:
- **Hak Pengguna:** Pengguna berhak meminta penghapusan akun dan seluruh data pribadi yang tersimpan di server kami kapan saja.
- **Cara Mengajukan Penghapusan Akun:**
  1. Melalui Aplikasi: Buka menu **Profil / Pengaturan > Hapus Akun**.
  2. Melalui Formulir Web: Kunjungi halaman permohonan penghapusan akun di `https://sibambu.id/delete-account` *(tautan formulir web resmi)*.
  3. Melalui Email: Kirimkan permohonan ke `dewa.permana.fict@krw.horizon.ac.id` dengan subjek *"Permohonan Penghapusan Akun SiBambu - [Nama Pengguna]"*.
- **Waktu Pemrosesan:** Data pribadi pengguna (nama, email, nomor HP, riwayat login) akan dihapus secara permanen dalam waktu 14 (empat belas) hari kerja setelah verifikasi. Data rekapitulasi tonase sampah lingkungan dapat dianonimkan untuk keperluan statistik daerah tanpa mengidentifikasi pengguna.

---

## 8. Privasi Anak-Anak (Children's Privacy)

Layanan SiBambu ditujukan untuk masyarakat umum dan pengelola rumah tangga. Aplikasi ini tidak ditujukan secara khusus untuk anak-anak di bawah usia 13 tahun. Kami tidak secara sengaja mengumpulkan data pribadi dari anak di bawah usia 13 tahun tanpa persetujuan dari orang tua atau wali yang sah. Jika Anda mengetahui bahwa anak di bawah 13 tahun telah memberikan data pribadi kepada kami, silakan hubungi kami agar kami dapat menghapus informasi tersebut.

---

## 9. Perubahan Kebijakan Privasi

Kami dapat memperbarui Kebijakan Privasi ini dari waktu ke waktu untuk menyesuaikan dengan pembaruan fitur aplikasi atau regulasi perundang-undangan baru. Setiap perubahan akan diberitahukan melalui pembaruan tanggal "Terakhir Diperbarui" di bagian atas halaman ini dan notifikasi di dalam aplikasi jika terdapat perubahan signifikan.

---

## 10. Hubungi Kami

Jika Anda memiliki pertanyaan, keluhan, atau permintaan terkait Kebijakan Privasi ini atau pengelolaan data pribadi Anda, silakan hubungi kami di:

- **Tim Pengembang:** Tim Inovasi SiBambu
- **Institusi:** Horizon University Indonesia
- **Alamat:** Jl. Ir. H. Juanda No. 17, Nagasari, Kec. Karawang Barat, Kabupaten Karawang, Jawa Barat 41312
- **Email:** `dewa.permana.fict@krw.horizon.ac.id` / `privacy@sibambu.id`
- **Nomor Telepon / WhatsApp:** `0896-7145-1167`
