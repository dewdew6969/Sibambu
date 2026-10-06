<?php
/**
 * Template Name: Panduan Penggunaan (Manual Book) Page
 */
get_header();
?>

<!-- Inner Page Hero Banner -->
<div class="page-hero-banner">
    <div class="container">
        <div class="page-hero-badge">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"></path>
                <path d="M6 6h10"></path>
                <path d="M6 10h10"></path>
            </svg>
            <span>Pedoman Teknis &amp; Petunjuk Operasional</span>
        </div>
        <h1 class="page-hero-title">Buku Panduan Penggunaan (Manual Book)</h1>
        <p class="page-hero-desc">
            Panduan lengkap langkah demi langkah bagi Warga dan Petugas Posko TPS dalam mengoperasikan aplikasi SiBambu dan Timbangan Cerdas IoT.
        </p>
    </div>
</div>

<section class="section">
    <div class="container" style="max-width:920px;">
        <!-- Download PDF Box -->
        <div style="background:#F0FDF4; border:1px solid #BBF7D0; border-radius:18px; padding:28px 32px; display:flex; justify-content:space-between; align-items:center; margin-bottom:48px; flex-wrap:wrap; gap:18px;">
            <div>
                <h3 style="font-size:1.25rem; color:#14532D; margin-bottom:4px;">Unduh Berkas Panduan Resmi (PDF)</h3>
                <p style="font-size:0.9rem; color:#166534;">Dokumen 3 halaman siap cetak, mencakup tabel indeks harga sampah dan penanganan kendala teknis.</p>
            </div>
            <a href="<?php echo esc_url( home_url( '/manual-book.pdf' ) ); ?>" download class="btn btn-primary">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line x1="12" x2="12" y1="15" y2="3"></line>
                </svg>
                <span>Unduh Manual Book (PDF)</span>
            </a>
        </div>

        <article class="page-article">
            <h2 style="font-size:1.6rem; color:#0F172A; margin-top:0;">1. Panduan untuk Warga / Nasabah</h2>

            <div style="margin:24px 0;">
                <h3 style="font-size:1.2rem; color:#15803D; margin-bottom:8px;">Langkah 1: Download &amp; Pendaftaran Akun</h3>
                <p>Unduh aplikasi SiBambu di Google Play Store. Pilih <strong>"Daftar Akun Baru"</strong> dan isi nama, nomor WhatsApp (sama dengan akun dompet digital), alamat email, serta tentukan <strong>Unit TPS Terdekat</strong> (misal: <em>TPS Dusun Krajan</em> atau <em>TPS Dusun Sukamaju</em>).</p>
            </div>

            <div style="margin:24px 0;">
                <h3 style="font-size:1.2rem; color:#15803D; margin-bottom:8px;">Langkah 2: Memilah Sampah dari Rumah</h3>
                <p>Kelompokkan sampah anorganik rumah tangga Anda:</p>
                <ul style="margin-left:24px; line-height:1.7;">
                    <li><strong>Plastik:</strong> Botol mineral (PET), botol sabun tebal, gelas air kemasan cup.</li>
                    <li><strong>Kertas &amp; Kardus:</strong> Box kardus mie, kertas dokumen, koran, buku bekas.</li>
                    <li><strong>Logam:</strong> Kaleng minuman, kawat tembaga, panci rusak, besi potongan.</li>
                    <li><strong>Minyak Jelantah:</strong> Simpan di dalam botol/jerigen tertutup rapat tanpa air.</li>
                </ul>
            </div>

            <div style="margin:24px 0;">
                <h3 style="font-size:1.2rem; color:#15803D; margin-bottom:8px;">Langkah 3: Pindai Sampah dengan Kamera AI</h3>
                <p>Buka menu <strong>Pindai (Scan)</strong> di aplikasi. Arahkan kamera smartphone ke objek sampah dengan pencahayaan memadai, lalu tekan tombol ambil foto. Dalam 2-3 detik AI Gemini akan mengklasifikasikan jenis material serta memberikan perkiraan harga per kg.</p>
            </div>

            <div style="margin:24px 0;">
                <h3 style="font-size:1.2rem; color:#15803D; margin-bottom:8px;">Langkah 4: Timbang di Posko TPS IoT &amp; Dapatkan Poin</h3>
                <p>Bawa sampah ke posko TPS desa. Letakkan di atas Timbangan Cerdas IoT. Sensor Load Cell akan membaca bobot absolut dan mengirimkannya nirkabel ke sistem server. Begitu disetujui petugas, notifikasi <strong>"Scan Berhasil!"</strong> muncul dan saldo DaurPoin Anda langsung bertambah.</p>
            </div>

            <div style="margin:24px 0;">
                <h3 style="font-size:1.2rem; color:#15803D; margin-bottom:8px;">Langkah 5: Penukaran Saldo ke E-Wallet &amp; Tunai</h3>
                <p>Masuk ke menu <strong>"Tukar Poin"</strong>. Pilih metode pencairan: <strong>Uang Tunai</strong> di posko, <strong>DANA</strong>, atau <strong>ShopeePay</strong>. Masukkan nominal poin dan nomor akun tujuan. Saldo akan ditransfer dalam hitungan menit hingga 1x24 jam.</p>
            </div>

            <hr style="margin:36px 0; border:none; border-top:1px solid #E2E8F0;">

            <h2 style="font-size:1.6rem; color:#0F172A;">2. Panduan Operasional Petugas &amp; Admin TPS</h2>
            <div style="margin:20px 0;">
                <h3 style="font-size:1.2rem; color:#1E293B; margin-bottom:8px;">Pengoperasian Timbangan Digital IoT (ESP32)</h3>
                <ol style="margin-left:24px; line-height:1.7;">
                    <li><strong>Daya Portabel:</strong> Nyalakan saklar baterai lithium 18650 pada bodi timbangan IoT.</li>
                    <li><strong>Konektivitas Nirkabel:</strong> Mikrokontroler ESP32 akan tersambung ke jaringan Wi-Fi/Hotspot TPS secara otomatis (LED hijau menyala).</li>
                    <li><strong>Kalibrasi Tara (Zero Tare):</strong> Pastikan wadah kosong sebelum meletakkan sampah agar pembacaan berada pada posisi 0.00 kg.</li>
                    <li><strong>Verifikasi Dasbor:</strong> Petugas memvalidasi transaksi nasabah melalui Dasbor Admin TPS di aplikasi.</li>
                </ol>
            </div>

            <div style="margin-top:32px; padding:20px; background:#F8FAFC; border-radius:12px; border:1px solid #E2E8F0;">
                <h4 style="color:#0F172A; margin-bottom:6px;">Butuh Bantuan Lebih Lanjut?</h4>
                <p style="font-size:0.9rem; color:#64748B;">Hubungi posko sekretariat SiBambu di Horizon University Indonesia via WhatsApp di <strong>0896-7145-1167</strong> atau email ke <strong>dewa.permana.fict@krw.horizon.ac.id</strong>.</p>
            </div>
        </article>
    </div>
</section>

<?php
get_footer();
