# Panduan Arsitektur & Implementasi WordPress Kustom (WordPress Guide) 💻

Dokumen panduan ini dirancang untuk memudahkan proses pembuatan website resmi **SiBambu** menggunakan **WordPress Kustom (Custom WP Theme / Page Builder)** berdasarkan dokumen-dokumen Markdown yang telah disiapkan.

---

## 1. Peta Halaman & Struktur Navigasi (Sitemap)

Untuk memenuhi kebutuhan *Company Profile*, panduan pengguna, serta syarat mutlak verifikasi **Google Play Store**, berikut rekomendasi struktur halaman:

```
https://sibambu.id/
├── /                     (Halaman Utama / Landing Page -> company-profile.md)
├── /tentang-kami         (Profil Inovator & Latar Belakang -> company-profile.md)
├── /panduan              (Buku Panduan / Manual Book -> manual-book.md)
├── /privacy-policy       (Kebijakan Privasi -> privacy-policy.md) [WAJIB PLAY STORE]
├── /terms-and-conditions (Syarat & Ketentuan -> terms-and-conditions.md)
├── /delete-account       (Halaman Permohonan Hapus Akun) [WAJIB PLAY STORE]
└── /kontak               (Form Pengaduan, Kontak WhatsApp, Lokasi Karawang)
```

---

## 2. Pemetaan File Dokumen ke Halaman WordPress

| File Sumber (.md) | Rekomendasi Halaman WP | Tipe Template |
| :--- | :--- | :--- |
| **`company-profile.md`** | Halaman Depan (`Front Page / Home`) | Full-width Landing Page dengan blok interaktif (Hero CTA, Statistik Timbunan Karawang, 4 Lapisan Teknologi, 4 Aktor Ekosistem, Galeri Lapangan, Profil Mahasiswa Inovator). |
| **`manual-book.md`** | Halaman `/panduan` atau `/manual-book` | Dokumentasi dengan sidebar navigasi (Table of Contents / Accordion) untuk memudahkan warga membaca langkah demi langkah pemindaian AI & timbangan IoT. |
| **`privacy-policy.md`** | Halaman `/privacy-policy` | Standard Text Page dengan font bersih dan keterbacaan tinggi. Tautkan link halaman ini pada **Footer Website** dan **Google Play Console**. |
| **`terms-and-conditions.md`** | Halaman `/terms-and-conditions` | Standard Text Page (Dokumen Hukum). Tautkan pada footer website. |
| **`playstore-listing.md`** | Digunakan pada **Google Play Console** | Referensi copywriting saat mengunggah APK/AAB dan mengisi data di Google Play Store. |

---

## 3. Halaman Wajib Khusus: Permohonan Hapus Akun (`/delete-account`)

Google Play Store mewajibkan pengembang menyediakan tautan web publik tempat pengguna dapat meminta penghapusan akun beserta datanya tanpa harus membuka aplikasi:

### Cara Implementasi Cepat di WordPress:
1. Buat halaman baru dengan slug: `/delete-account`.
2. Gunakan plugin formulir gratis seperti **WPForms**, **Fluent Forms**, atau **Contact Form 7**.
3. Buat formulir sederhana dengan bidang:
   - Nama Lengkap (Sesuai akun SiBambu).
   - Nomor WhatsApp / HP terdaftar.
   - Alamat Email terdaftar.
   - Alasan penghapusan (Dropdown opsional).
   - Kotak centang persetujuan: *"Saya memahami bahwa saldo DaurPoin dan riwayat akun saya akan dihapus secara permanen."*
4. Berikan pesan konfirmasi bahwa permintaan akan diproses maksimal dalam 14 hari kerja.

---

## 4. Rekomendasi Palet Warna & Identitas Visual (Branding)

Sesuaikan CSS atau tema WordPress kustom Anda dengan identitas visual aplikasi SiBambu:

- **Warna Utama (Primary Green):** `#16A34A` / `#15803D` (Melambangkan kelestarian lingkungan dan ekonomi hijau).
- **Warna Sekunder (Deep Forest):** `#14532D` atau `#0F172A` (Untuk teks headline, navigasi, dan footer elegan).
- **Warna Aksen Poin (Gold/Amber):** `#F59E0B` (Melambangkan DaurPoin dan nilai rupiah).
- **Background Netral:** `#F8FAFC` atau `#FFFFFF`.
- **Tipografi:** Google Fonts modern seperti **Plus Jakarta Sans**, **Inter**, atau **Outfit**.

---

## 5. Rekomendasi Plugin WordPress Pendukung

Jika menggunakan WordPress berbasis CMS mandiri:
1. **SEO & Meta Tag:** *Rank Math SEO* atau *Yoast SEO* (untuk memasukkan OpenGraph image, meta description, dan Schema markup tipe `SoftwareApplication` agar aplikasi mudah terindeks di mesin pencari Google).
2. **Formulir Kontak:** *Fluent Forms* atau *WPForms Lite* (untuk halaman kontak dan `/delete-account`).
3. **Optimasi Kecepatan:** *LiteSpeed Cache* atau *WP Rocket* (memastikan loading situs cepat di perangkat mobile).
4. **Keamanan:** *Wordfence Security* atau *Cloudflare Free SSL* (memastikan HTTPS selalu aktif, syarat wajib Google Play URL).

---

## 6. Checklist Sebelum Submit URL ke Play Console

- [ ] Domain sudah aktif dan memiliki sertifikat **SSL/HTTPS** yang valid (tidak bertanda "Not Secure").
- [ ] URL `https://domain-anda.com/privacy-policy` dapat dibuka secara publik tanpa perlu login / kata sandi.
- [ ] URL `https://domain-anda.com/delete-account` dapat diakses dan formulir berfungsi dengan baik.
- [ ] Tautan unduh aplikasi mengarah langsung ke tautan listing Google Play Store setelah rilis.
- [ ] Nomor kontak pengaduan dan email pengembang sesuai dengan yang didaftarkan di Google Play Developer Console.
