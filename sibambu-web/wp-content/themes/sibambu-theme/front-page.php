<?php
/**
 * SiBambu Landing Page / Front Page
 */
get_header();
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div>
                <div class="hero-pill">
                    <span>✨</span>
                    <span>Inovasi Daerah PERIODA Karawang 2026</span>
                </div>
                <h1 class="hero-title">
                    Ubah Sampah Jadi Berkah, <span>Ubah Rongsokan Jadi Cuan</span>
                </h1>
                <p class="hero-desc">
                    <strong>SiBambu</strong> memadukan aplikasi mobile pintar, kecerdasan buatan visual <em>Google Gemini AI</em>, dan <em>Timbangan Cerdas IoT</em> untuk memilah dan menimbang sampah anorganik secara transparan, otomatis, dan bernilai rupiah langsung ke e-wallet Anda.
                </p>
                <div class="hero-actions">
                    <a href="https://play.google.com" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                        <span>📲 Unduh di Google Play</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/manual-book.pdf' ) ); ?>" download class="btn btn-secondary">
                        <span>📕 Unduh Manual Book (PDF)</span>
                    </a>
                </div>
            </div>
            <div>
                <div class="hero-card-preview">
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px; border-bottom:1px solid #E2E8F0; padding-bottom:16px;">
                        <div>
                            <span style="font-size:0.8rem; font-weight:700; color:#15803D; text-transform:uppercase;">Demo Sistem Pintar</span>
                            <h3 style="font-size:1.15rem; font-weight:800; color:#0F172A;">Simulasi DaurPoin Terintegrasi</h3>
                        </div>
                        <span class="badge-tag">100% Real-time</span>
                    </div>
                    <div style="background:#F0FDF4; border-radius:12px; padding:18px; margin-bottom:16px; border:1px solid #DCFCE7;">
                        <div style="display:flex; justify-content:space-between; margin-bottom:6px;">
                            <span style="font-size:0.85rem; color:#475569;">Saldo DaurPoin Nasabah</span>
                            <span style="font-weight:800; color:#15803D; font-size:1.15rem;">77.816 Poin</span>
                        </div>
                        <div style="display:flex; justify-content:space-between; font-size:0.85rem; color:#64748B;">
                            <span>Estimasi Konversi Rupiah:</span>
                            <strong style="color:#0F172A;">Rp 77.816,-</strong>
                        </div>
                    </div>
                    <div style="display:flex; flex-direction:column; gap:10px; font-size:0.9rem;">
                        <div style="display:flex; justify-content:space-between; padding:10px 12px; background:#F8FAFC; border-radius:8px;">
                            <span>🔍 Deteksi AI Gemini:</span>
                            <strong style="color:#0F172A;">Botol Plastik PET (Akurat)</strong>
                        </div>
                        <div style="display:flex; justify-content:space-between; padding:10px 12px; background:#F8FAFC; border-radius:8px;">
                            <span>⚖️ Timbangan IoT ESP32:</span>
                            <strong style="color:#0F172A;">3.25 kg (Zero Fraud)</strong>
                        </div>
                        <div style="display:flex; justify-content:space-between; padding:10px 12px; background:#F8FAFC; border-radius:8px;">
                            <span>💳 Penukaran E-Wallet:</span>
                            <strong style="color:#15803D;">DANA &bull; ShopeePay &bull; Tunai</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Real Data Karawang Strip -->
        <div class="stat-strip" id="masalah">
            <div class="stat-item">
                <div class="stat-num" style="color:#EF4444;">1.108,6 Ton</div>
                <div class="stat-label">Timbunan Sampah Karawang / Hari</div>
            </div>
            <div class="stat-item">
                <div class="stat-num" style="color:#F59E0B;">662,1 Ton</div>
                <div class="stat-label">Sampah Harian Belum Terangkut</div>
            </div>
            <div class="stat-item">
                <div class="stat-num" style="color:#DC2626;">&gt; 1,2 Juta Ton</div>
                <div class="stat-label">Akumulasi Kritis TPA Jalupang</div>
            </div>
            <div class="stat-item">
                <div class="stat-num" style="color:#15803D;">100% Presisi</div>
                <div class="stat-label">Timbangan IoT Nirkabel Anti-Curang</div>
            </div>
        </div>
    </div>
</section>

<!-- 4 Pilar Teknologi (Bento Grid) -->
<section class="section section-alt" id="fitur">
    <div class="container">
        <div class="section-head">
            <div class="section-badge">Arsitektur Terpadu</div>
            <h2 class="section-title">Solusi Berteknologi Tinggi Tanpa Kompromi</h2>
            <p class="section-subtitle">SiBambu mengintegrasikan empat lapisan teknologi mutakhir untuk mendigitalisasi rantai pasok ekonomi sirkular desa.</p>
        </div>

        <div class="bento-grid">
            <div class="bento-item span-2">
                <div class="bento-icon">🤖</div>
                <h3 class="bento-title">Cognitive Layer: Google Gemini Multimodal AI</h3>
                <p class="bento-text">
                    Pengguna cukup mengambil foto sampah dengan kamera smartphone. Model kecerdasan buatan Google Gemini Vision langsung mengklasifikasikan jenis material (seperti Botol PET, Kardus, Besi, Aluminium) dalam hitungan detik secara otomatis dan objektif tanpa perlu input manual yang merepotkan.
                </p>
            </div>
            <div class="bento-item">
                <div class="bento-icon">⚖️</div>
                <h3 class="bento-title">Perceptual Layer: Timbangan IoT ESP32</h3>
                <p class="bento-text">
                    Timbangan digital nirkabel berbasis sensor <em>Load Cell</em>, amplifier HX711, dan mikrokontroler Wi-Fi ESP32 membaca berat fisik absolut secara presisi dan mengirimkannya langsung ke server tanpa campur tangan petugas. Bebas manipulasi data.
                </p>
            </div>
            <div class="bento-item">
                <div class="bento-icon">📱</div>
                <h3 class="bento-title">Mobile Application (React Native / Expo)</h3>
                <p class="bento-text">
                    Antarmuka ramah pengguna untuk warga dan petugas TPS: memindai sampah, mengecek buku tabungan digital, memeriksa grafik kontribusi lingkungan, dan melakukan pencairan poin.
                </p>
            </div>
            <div class="bento-item span-2">
                <div class="bento-icon">💎</div>
                <h3 class="bento-title">Dynamic Pricing & Multi-Channel Payout</h3>
                <p class="bento-text">
                    Sistem otomatis mengalikan bobot terverifikasi dengan indeks harga pasar pengepul terkini. Saldo <strong>DaurPoin</strong> bertambah seketika dan dapat dicairkan langsung ke saldo dompet digital DANA, ShopeePay, atau uang tunai di posko TPS.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cara Kerja Section -->
<section class="section" id="cara-kerja">
    <div class="container">
        <div class="section-head">
            <div class="section-badge">Alur Operasional</div>
            <h2 class="section-title">4 Langkah Mudah Menabung Sampah</h2>
            <p class="section-subtitle">Bagaimana warga Desa Warung Bambu mengubah sampah anorganik menjadi cuan.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(4, 1fr); gap:20px;">
            <div style="background:#FFFFFF; border:1px solid #E2E8F0; padding:28px 20px; border-radius:16px;">
                <span style="display:inline-block; width:36px; height:36px; line-height:36px; text-align:center; background:#DCFCE7; color:#15803D; font-weight:800; border-radius:50%; margin-bottom:14px;">1</span>
                <h4 style="font-size:1.1rem; font-weight:800; margin-bottom:8px;">Pilah dari Rumah</h4>
                <p style="font-size:0.9rem; color:#475569;">Pisahkan sampah anorganik bersih (plastik, kardus, kaleng, kaca) dari sampah organik basah.</p>
            </div>
            <div style="background:#FFFFFF; border:1px solid #E2E8F0; padding:28px 20px; border-radius:16px;">
                <span style="display:inline-block; width:36px; height:36px; line-height:36px; text-align:center; background:#DCFCE7; color:#15803D; font-weight:800; border-radius:50%; margin-bottom:14px;">2</span>
                <h4 style="font-size:1.1rem; font-weight:800; margin-bottom:8px;">Scan dengan AI</h4>
                <p style="font-size:0.9rem; color:#475569;">Buka aplikasi SiBambu, foto sampah Anda untuk melihat estimasi jenis sampah dan nilai konversinya.</p>
            </div>
            <div style="background:#FFFFFF; border:1px solid #E2E8F0; padding:28px 20px; border-radius:16px;">
                <span style="display:inline-block; width:36px; height:36px; line-height:36px; text-align:center; background:#DCFCE7; color:#15803D; font-weight:800; border-radius:50%; margin-bottom:14px;">3</span>
                <h4 style="font-size:1.1rem; font-weight:800; margin-bottom:8px;">Timbang di TPS</h4>
                <p style="font-size:0.9rem; color:#475569;">Bawa ke TPS Bambu Raya Dusun Krajan / Sukamaju. Timbangan IoT membaca berat otomatis dan akurat.</p>
            </div>
            <div style="background:#FFFFFF; border:1px solid #E2E8F0; padding:28px 20px; border-radius:16px;">
                <span style="display:inline-block; width:36px; height:36px; line-height:36px; text-align:center; background:#DCFCE7; color:#15803D; font-weight:800; border-radius:50%; margin-bottom:14px;">4</span>
                <h4 style="font-size:1.1rem; font-weight:800; margin-bottom:8px;">DaurPoin Masuk!</h4>
                <p style="font-size:0.9rem; color:#475569;">Saldo DaurPoin langsung bertambah dan bisa ditarik ke saldo DANA, ShopeePay, atau Tunai.</p>
            </div>
        </div>
    </div>
</section>

<!-- Tabel Harga Sampah -->
<section class="section section-alt" id="harga">
    <div class="container">
        <div class="section-head">
            <div class="section-badge">Standar Pengepul & Industri</div>
            <h2 class="section-title">Katalog & Indeks Harga Konversi Sampah</h2>
            <p class="section-subtitle">Daftar harga transparan berdasarkan standar pasar daur ulang terkini.</p>
        </div>

        <div class="price-table-wrapper">
            <table class="price-table">
                <thead>
                    <tr>
                        <th style="width:50px;">No</th>
                        <th>Kategori Sampah</th>
                        <th style="text-align:center;">Satuan</th>
                        <th>Contoh Material</th>
                        <th style="text-align:right;">Nilai DaurPoin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><strong>Botol Mineral (PET Bening)</strong></td>
                        <td style="text-align:center;"><span class="badge-tag">kg</span></td>
                        <td>Botol Aqua, Le Minerale, botol jus bening</td>
                        <td style="text-align:right; font-weight:800; color:#15803D;">2.500 - 3.500 Poin</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><strong>Gelas Plastik (PP)</strong></td>
                        <td style="text-align:center;"><span class="badge-tag">kg</span></td>
                        <td>Gelas kopi kemasan, gelas teh cup</td>
                        <td style="text-align:right; font-weight:800; color:#15803D;">2.000 - 3.000 Poin</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><strong>Kardus Cokelat</strong></td>
                        <td style="text-align:center;"><span class="badge-tag">kg</span></td>
                        <td>Kardus box mie, kardus paket online</td>
                        <td style="text-align:right; font-weight:800; color:#15803D;">1.500 - 2.200 Poin</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><strong>Kertas Arsip / Buku</strong></td>
                        <td style="text-align:center;"><span class="badge-tag">kg</span></td>
                        <td>Kertas HVS kantor, buku catatan, koran</td>
                        <td style="text-align:right; font-weight:800; color:#15803D;">1.200 - 1.800 Poin</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><strong>Kaleng & Aluminium</strong></td>
                        <td style="text-align:center;"><span class="badge-tag">kg</span></td>
                        <td>Kaleng softdrink, kaleng susu, wajan bekas</td>
                        <td style="text-align:right; font-weight:800; color:#15803D;">7.000 - 12.000 Poin</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><strong>Besi Super / Besi Cor</strong></td>
                        <td style="text-align:center;"><span class="badge-tag">kg</span></td>
                        <td>Rangka besi cor beton, potongan logam</td>
                        <td style="text-align:right; font-weight:800; color:#15803D;">3.500 - 5.000 Poin</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><strong>Tembaga & Kuningan</strong></td>
                        <td style="text-align:center;"><span class="badge-tag">kg</span></td>
                        <td>Kabel kawat tembaga, pipa tembaga AC</td>
                        <td style="text-align:right; font-weight:800; color:#15803D;">60.000 - 85.000 Poin</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><strong>Botol Kaca Utuh</strong></td>
                        <td style="text-align:center;"><span class="badge-tag">pcs</span></td>
                        <td>Botol sirup marjan, botol kecap utuh</td>
                        <td style="text-align:right; font-weight:800; color:#15803D;">500 - 1.000 Poin</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td><strong>Minyak Jelantah</strong></td>
                        <td style="text-align:center;"><span class="badge-tag">liter</span></td>
                        <td>Minyak goreng bekas dapur rumah tangga</td>
                        <td style="text-align:right; font-weight:800; color:#15803D;">4.000 - 6.500 Poin</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Manual Book Download Section -->
<section class="section" id="panduan">
    <div class="container">
        <div style="background:#FFFFFF; border:1px solid #E2E8F0; border-radius:20px; padding:48px; display:grid; grid-template-columns:1.2fr 0.8fr; gap:40px; align-items:center;">
            <div>
                <div class="section-badge">Dokumentasi & Pedoman</div>
                <h3 style="font-size:2rem; font-weight:800; color:#0F172A; margin-bottom:12px;">Buku Panduan Penggunaan Lengkap (Manual Book)</h3>
                <p style="color:#475569; font-size:1rem; margin-bottom:24px; line-height:1.65;">
                    Panduan terperinci langkah demi langkah bagi Warga dan Petugas TPS Desa Warung Bambu: tata cara registrasi, kalibrasi timbangan IoT, prosedur pemindaian AI Gemini, hingga cara mencairkan saldo poin ke DANA dan ShopeePay.
                </p>
                <div style="display:flex; gap:14px; flex-wrap:wrap;">
                    <a href="<?php echo esc_url( home_url( '/manual-book.pdf' ) ); ?>" download class="btn btn-primary">
                        <span>📥 Unduh Manual Book PDF (Resmi)</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>" class="btn btn-secondary">
                        <span>🔒 Kebijakan Privasi</span>
                    </a>
                </div>
            </div>
            <div style="background:#F8FAFC; border:1px solid #CBD5E1; border-radius:16px; padding:24px; text-align:center;">
                <div style="font-size:3rem; margin-bottom:10px;">📕</div>
                <h4 style="font-size:1.1rem; font-weight:800; color:#0F172A;">Manual-Book-SiBambu.pdf</h4>
                <p style="font-size:0.85rem; color:#64748B; margin-top:4px;">Ukuran: 11 KB &bull; A4 Printable &bull; 3 Halaman</p>
                <div style="margin-top:16px; padding:10px; background:#DCFCE7; border-radius:8px; font-size:0.82rem; color:#15803D; font-weight:700;">
                    ✓ Siap Digunakan untuk Verifikasi Play Store
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Dokumentasi & Tim Inovator -->
<section class="section section-alt" id="tentang">
    <div class="container">
        <div class="section-head">
            <div class="section-badge">Horizon University Indonesia</div>
            <h2 class="section-title">Tim Inovator Mahasiswa & Validasi Lapangan</h2>
            <p class="section-subtitle">Dikembangkan untuk Kompetisi Inovasi Daerah PERIODA Kabupaten Karawang 2026.</p>
        </div>

        <div class="team-grid">
            <div class="team-card">
                <div class="team-avatar">DP</div>
                <div class="team-name">Dewa Permana</div>
                <div class="team-role">Project Lead & IoT Engineer</div>
            </div>
            <div class="team-card">
                <div class="team-avatar">FA</div>
                <div class="team-name">Fhazar Raffiful A.</div>
                <div class="team-role">Mobile Software Engineer</div>
            </div>
            <div class="team-card">
                <div class="team-avatar">YR</div>
                <div class="team-name">Yusnia Aulia Rizki</div>
                <div class="team-role">Data & System Analyst</div>
            </div>
            <div class="team-card">
                <div class="team-avatar">RA</div>
                <div class="team-name">Rahmawati Auliya</div>
                <div class="team-role">UI/UX & Community Outreach</div>
            </div>
            <div class="team-card">
                <div class="team-avatar">CS</div>
                <div class="team-name">Chika Triselia S.</div>
                <div class="team-role">Health & Waste Research</div>
            </div>
        </div>

        <div style="text-align:center; margin-top:40px;">
            <a href="https://youtu.be/iuMRKuPRmFQ?si=ZVoIGubNPrTary4r" target="_blank" rel="noopener noreferrer" class="btn btn-secondary" style="font-size:0.95rem;">
                <span>▶ Tonton Video Dokumentasi Inovasi Lapangan (YouTube)</span>
            </a>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<div class="container">
    <div class="cta-banner">
        <h2>Siap Mewujudkan Desa Warung Bambu Bersih & Cuan?</h2>
        <p>Bergabunglah dengan ekosistem bank sampah cerdas SiBambu. Mulai pilah sampah dari rumah hari ini dan nikmati insentif DaurPoin langsung di ponsel Anda.</p>
        <div style="display:flex; justify-content:center; gap:16px; flex-wrap:wrap;">
            <a href="https://play.google.com" target="_blank" rel="noopener noreferrer" class="btn btn-accent" style="padding:14px 32px; font-size:1rem;">
                <span>📲 Download SiBambu di Google Play</span>
            </a>
            <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>" class="btn btn-secondary" style="padding:14px 28px; font-size:1rem; background:transparent; color:#FFFFFF; border-color:#64748B;">
                <span>Kebijakan Privasi</span>
            </a>
        </div>
    </div>
</div>

<?php
get_footer();
