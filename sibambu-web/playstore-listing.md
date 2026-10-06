# Google Play Store Listing & Data Safety Guide – SiBambu 🚀

Dokumen ini berisi salinan teks lengkap *(copywriting)*, metadata resmi, dan panduan pengisian formulir **Google Play Console** untuk mempermudah proses peninjauan (*review*) dan penerbitan aplikasi **SiBambu**.

---

## 1. Metadata Dasar Aplikasi

| Kolom Play Console | Batasan Karakter | Teks yang Disarankan |
| :--- | :--- | :--- |
| **App Name (Judul Aplikasi)** | Maks. 30 Karakter | `SiBambu - Bank Sampah Cerdas` |
| **Short Description (Deskripsi Singkat)** | Maks. 80 Karakter | `Pilah sampah dengan AI & Timbangan IoT, kumpulkan poin dan tukar jadi cuan!` |
| **Kategori Aplikasi** | Dropdown | `Productivity` (Produktivitas) atau `Tools` (Alat) atau `House & Home` (Gaya Hidup/Rumah) |
| **Tags / Label** | Maks. 5 tag | `Waste Management`, `Recycling`, `Productivity`, `Smart Tools`, `Environment` |

---

## 2. Full Description (Deskripsi Lengkap - Maks. 4000 Karakter)

```text
Ubah Sampah Jadi Berkah, Ubah Rongsokan Jadi Cuan dengan SiBambu! 🌿💰

SiBambu (Sistem Bank Sampah Terpadu) adalah platform bank sampah modern yang menggabungkan kecerdasan buatan (Artificial Intelligence) dan timbangan digital berbasis Internet of Things (IoT). Kini, menabung sampah anorganik dari rumah menjadi jauh lebih mudah, cepat, akurat, dan menguntungkan!

MENGAPA HARUS MEMAKAI SIBAMBU?
Sebagian besar sampah anorganik bernilai ekonomi berakhir menumpuk di tempat pembuangan akhir karena sulit dipilah dan tidak memiliki kepastian timbangan. SiBambu hadir merevolusi pengelolaan sampah di tingkat masyarakat melalui ekosistem digital yang transparan dan bebas manipulasi.

FITUR UNGGULAN SIBAMBU:

🔍 1. SCAN SAMPAH DENGAN AI CERDAS (Google Gemini Vision)
Bingung membedakan jenis plastik, kardus, atau kaleng logam? Cukup arahkan kamera smartphone Anda ke objek sampah. Teknologi AI SiBambu akan langsung mendeteksi jenis material sampah dan menampilkan kisaran harga konversi per kilogram secara instan.

⚖️ 2. TIMBANGAN DIGITAL IOT OTOMATIS & AKURAT
Ucapkan selamat tinggal pada pencatatan manual dan kecurangan timbangan! Setor sampah Anda ke posko TPS SiBambu terdekat. Timbangan digital berbasis IoT (ESP32) akan mengukur berat fisik secara presisi dan mengirimkan data langsung ke aplikasi Anda tanpa campur tangan manipulasi petugas.

💎 3. KUMPULKAN DAURPOIN REAL-TIME
Setiap kilogram sampah anorganik yang Anda setorkan akan langsung dikonversi menjadi saldo DaurPoin di akun Anda. Pantau akumulasi tabungan sampah Anda kapan saja dan di mana saja.

💸 4. PENUKARAN POIN FLEKSIBEL (E-WALLET & TUNAI)
Tukarkan DaurPoin Anda dengan berbagai manfaat finansial:
• Saldo Dompet Digital DANA
• Saldo ShopeePay
• Uang Tunai langsung di posko TPS desa

📊 5. REKAPITULASI & DAMPAK LINGKUNGAN
Lihat seberapa besar kontribusi nyata Anda bagi kelestarian alam! Pantau total kilogram sampah yang berhasil Anda selamatkan dari TPA Jalupang serta riwayat lengkap setiap transaksi.

JENIS SAMPAH YANG DITERIMA:
• Botol Plastik Mineral (PET Bening), Gelas Plastik, Kantong Kresek Bersih
• Kardus Kemasan, Kertas Buku, Arsip Dokumen, Dupleks
• Kaleng Minuman, Besi Cor, Besi Super, Seng, Aluminium, Tembaga
• Botol Kaca Utuh
• Minyak Jelantah Dapur

TENTANG INOVASI SIBAMBU:
SiBambu merupakan proyek inovasi ramah lingkungan hasil kolaborasi mahasiswa Fakultas Ilmu Komputer dan Fakultas Ilmu Kesehatan Horizon University Indonesia dalam ajang Pekan Riset dan Inovasi Daerah (PERIODA) Kabupaten Karawang. Beroperasi perdana di wilayah Desa Warung Bambu (TPS Dusun Krajan & TPS Sukamaju) untuk mendukung target zero waste dan ekonomi sirkular Indonesia.

Mari jaga kebersihan lingkungan bersama SiBambu!
Unduh sekarang, pilah sampahmu hari ini, dan nikmati berkahnya!

Website Resmi: https://sibambu.id
Bantuan & Pengaduan: dewa.permana.fict@krw.horizon.ac.id | WhatsApp: 0896-7145-1167
```

---

## 3. Spesifikasi Aset Grafis (Graphic Assets)

Siapkan file grafis berikut untuk diunggah di bagian *Store Presence > Main Store Listing*:

1. **App Icon:**
   - Format: PNG 32-bit (dengan alpha channel).
   - Dimensi: `512 x 512 piksel`.
   - Ukuran File: Maksimal 1 MB.
2. **Feature Graphic (Banner Utama):**
   - Dimensi: `1024 x 500 piksel` (Format JPG atau PNG 24-bit tanpa transparansi).
   - Teks Visual: *SiBambu - Bank Sampah Cerdas Berbasis AI & IoT*.
3. **Screenshots Aplikasi (Minimal 4 tangkapan layar):**
   - Rasio Aspek: 16:9 atau 9:16 (Resolusi disarankan: `1080 x 2400 piksel` atau `1080 x 1920 piksel`).
   - Urutan Tangkapan Layar & Headline Banner:
     - **Screen 1 (Home & Saldo):** *"Pantau Saldo DaurPoin & Riwayat Setor Sampah"*
     - **Screen 2 (AI Scanner):** *"Deteksi Jenis Sampah Otomatis dengan Kamera AI"*
     - **Screen 3 (Penukaran E-Wallet):** *"Tukar Poin Jadi Uang Tunai, DANA & ShopeePay"*
     - **Screen 4 (Katalog Harga):** *"Daftar Harga Transparan Mengikuti Pasar Pengepul"*
     - **Screen 5 (Dashboard Admin):** *"Integrasi Timbangan IoT Cerdas Tanpa Manipulasi"*

---

## 4. Panduan Pengisian Bagian "Data Safety" (Keamanan Data)

Google Play Store mewajibkan pengisian kuesioner **Data Safety**. Isi dengan rincian berikut:

### Pertanyaan Umum
1. **Apakah aplikasi Anda mengumpulkan atau membagikan data pengguna?**  
   ➡️ Jawab: **Ya (Yes)**.
2. **Apakah semua data pengguna yang dikumpulkan oleh aplikasi Anda dienkripsi saat transit?**  
   ➡️ Jawab: **Ya (Yes)** *(Menggunakan HTTPS / SSL)*.
3. **Apakah Anda menyediakan cara bagi pengguna untuk meminta penghapusan data mereka?**  
   ➡️ Jawab: **Ya (Yes)**.  
   ➡️ Masukkan URL Penghapusan Akun: `https://sibambu.id/delete-account` *(sesuai web Anda)*.

### Rincian Tipe Data yang Dikumpulkan:
- **Foto dan Video (Photos and Videos):**
  - Jenis: *Photos* (Foto sampah).
  - Dikumpulkan? **Ya**. Dibagikan? **Tidak** *(hanya diproses ke server API backend & Google Gemini untuk keperluan analisa jenis sampah)*.
  - Tujuan Penggunaan: **App Functionality (Fungsionalitas Aplikasi)**.
  - Apakah bersifat wajib? Ya, saat menggunakan fitur pemindaian AI.
- **Informasi Pribadi (Personal Info):**
  - Jenis: *Name* (Nama), *Email address*, *Phone number* (Nomor HP/WhatsApp).
  - Tujuan: **App Functionality & Account Management (Manajemen Akun)**.
- **Informasi Finansial (Financial Info):**
  - Jenis: *Other financial info* (Catatan saldo poin dan nomor akun e-wallet tujuan pencairan).
  - Tujuan: **App Functionality (Penyaluran insentif ekonomi)**.

---

## 5. Kuesioner Rating Konten (IARC Content Rating)

Saat mengisi kuesioner rating konten:
- Kategori: **Utility / Productivity / Communication / Other**.
- Pertanyaan kekerasan, konten seksual, bahasa kasar, obat-obatan, perjudian: Jawab **TIDAK** untuk semua.
- Hasil rating yang akan diperoleh: **Everyone (PEGI 3 / Usia Semua Umur)**.

---

## 6. URL Wajib untuk Google Play Console

Pastikan tautan-tautan berikut sudah aktif pada domain situs web Anda sebelum menekan tombol *"Submit for Review"*:

- **Kebijakan Privasi (Privacy Policy URL):**  
  `https://sibambu.id/privacy-policy`
- **Permintaan Penghapusan Data (Account Deletion URL):**  
  `https://sibambu.id/delete-account`
- **Situs Web Pengembang (Website URL):**  
  `https://sibambu.id`
- **Email Kontak Pengembang:**  
  `dewa.permana.fict@krw.horizon.ac.id` / `support@sibambu.id`

---

## 7. Catatan Akun Uji Coba untuk Reviewer Google (App Access)

Google Reviewer memerlukan akses masuk (*login credentials*) untuk menguji fungsionalitas di dalam aplikasi:
- Masuk ke menu **App Content > App Access**.
- Pilih: **"All or some functionality is restricted"** (Semua atau sebagian fungsi dibatasi login).
- Tambahkan akun uji coba:
  - **Akun Test Nasabah:**
    - Nomor HP / Username: `081234567890`
    - Kata Sandi: `DemoSibambu2026!`
    - Catatan instruksi: *"Gunakan akun ini untuk menguji navigasi beranda, katalog harga, simulasi scan kamera AI, dan halaman tukar poin."*
