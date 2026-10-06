# SiBambu Web & WordPress Platform 🌿

Repositori resmi website **SiBambu (Sistem Bank Sampah Terpadu Berbasis AI dan IoT)**. Direktori ini terpisah dari aplikasi mobile [sibambu-app](file:///c:/Users/Fhazar/Fhazar_Workspace/02_PROJECTS/Project_Mobile/Sibambu/sibambu-app) dan berfungsi sebagai:
1. **CMS Website WordPress Resmi:** Siap dijalankan dengan server lokal (Laragon / XAMPP / PHP Server).
2. **Dokumentasi & Legalitas Google Play Store:** Tersimpan rapi di dalam subfolder [`docs/`](file:///c:/Users/Fhazar/Fhazar_Workspace/02_PROJECTS/Project_Mobile/Sibambu/sibambu-web/docs).
3. **Buku Panduan PDF Siap Cetak & Unduh:** [`manual-book.pdf`](file:///c:/Users/Fhazar/Fhazar_Workspace/02_PROJECTS/Project_Mobile/Sibambu/sibambu-web/manual-book.pdf).

---

## 📁 Struktur Repositori `sibambu-web`

```
sibambu-web/
├── docs/                                 # 📂 Folder Khusus Berkas .md & PDF
│   ├── company-profile.md                # Konten Landing Page & Company Profile
│   ├── privacy-policy.md                 # Kebijakan Privasi (Syarat Wajib Google Play Console)
│   ├── terms-and-conditions.md           # Syarat & Ketentuan Layanan
│   ├── manual-book.md                    # Panduan Penggunaan Lengkap (Format Markdown)
│   ├── Buku-Panduan-SiBambu.pdf          # 📕 File PDF Buku Panduan Siap Unduh/Cetak
│   ├── playstore-listing.md              # Salinan Teks Metadata & Kuis Data Safety Play Store
│   └── wordpress-guide.md                # Panduan Arsitektur & Pemetaan ke Tema WP
│
├── manual-book.pdf                       # 📕 File PDF Buku Panduan (Akses Cepat)
├── generate_pdf.py                       # Generator PDF Otomatis (ReportLab)
├── wp-config.php                         # Konfigurasi Database WordPress (Laragon: sibambu_wp)
├── wp-admin/                             # Core WordPress Admin
├── wp-content/                           # Tema, Plugin & Upload WordPress
├── wp-includes/                          # Core WordPress Libraries
└── index.php                             # Entry Point WordPress
```

---

## ⚡ Cara Menjalankan Website WordPress

### Menggunakan Laragon (Direkomendasikan)
1. Buka aplikasi **Laragon**.
2. Klik tombol **Start All** (Apache & MySQL).
3. Buat database baru bernama `sibambu_wp` melalui HeidiSQL atau phpMyAdmin (`http://localhost/phpmyadmin`).
4. Buka browser dan arahkan ke folder ini (atau buat Virtual Host di Laragon).

### Menggunakan PHP Built-in Server (Untuk Pengujian Instan)
Jika MySQL sudah berjalan, Anda dapat menjalankan perintah berikut di terminal:
```powershell
cd c:\Users\Fhazar\Fhazar_Workspace\02_PROJECTS\Project_Mobile\Sibambu\sibambu-web
php -S localhost:8080
```
Lalu akses `http://localhost:8080` di browser untuk menyelesaikan instalasi WordPress.

---

## 🎨 AI Skills & Anti-AI-Slop System

Workspace ini telah dilengkapi dengan AI Skills resmi dari GitHub untuk memastikan standar desain berkelas tinggi (*high craftsmanship*) dan bebas dari tampilan seragam/murahan (*anti AI-slop*):

1. **`ui-ux-pro-max` (dari [nextlevelbuilder/ui-ux-pro-max-skill](https://github.com/nextlevelbuilder/ui-ux-pro-max-skill)):**
   - Database cerdas 79 style UI, 192 palet warna industri, 74 font pairing, dan 119 pedoman UX.
   - Terpasang di: `.agents/skills/ui-ux-pro-max/` dan global `~/.gemini/config/skills/ui-ux-pro-max/`.
2. **`anti-ai-slop-design`:**
   - Aturan anti-slop: melarang kartu 3-kolom generik, gradien ungu klise, dan teks serba di tengah. Menegakkan layout asimetris, hierarki visual nyata, dan kontras WCAG AA.
   - Terpasang di: `.agents/skills/anti-ai-slop-design/`.
3. **`wordpress-mastery`:**
   - Standar pembuatan tema kustom WordPress modern, keamanan nonce & sanitasi data.
   - Terpasang di: `.agents/skills/wordpress-mastery/`.
4. **Workspace Rules (`.agents/rules/aesthetic-craft.md`):**
   - Panduan identitas visual SiBambu (Green Eco `#15803D`, Slate `#0F172A`, Gold `#F59E0B`).
