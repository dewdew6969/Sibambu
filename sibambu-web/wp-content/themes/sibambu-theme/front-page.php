<?php
/**
 * SiBambu Homepage (Front Page)
 * Pure Multi-Page Architecture with Full-Photo Hero
 */
get_header();

$assets_url = home_url( '/assets/' );
?>

<!-- Full Photo Hero Section -->
<section class="hero-full-photo" style="background-image: url('<?php echo esc_url( $assets_url . 'hero_sibambu.jpg' ); ?>');">
    <div class="container">
        <div class="hero-pill">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
            </svg>
            <span>Inovasi Daerah PERIODA Karawang 2026</span>
        </div>

        <h1 class="hero-title">
            Ubah Sampah Jadi Berkah, <span>Ubah Rongsokan Jadi Cuan</span>
        </h1>

        <p class="hero-desc">
            Platform bank sampah pintar yang memadukan aplikasi mobile, kecerdasan buatan visual <strong>Google Gemini AI</strong>, dan <strong>Timbangan IoT ESP32</strong> untuk memilah, menimbang presisi, dan mencairkan DaurPoin langsung ke dompet digital Anda.
        </p>

        <div class="hero-actions">
            <a href="https://play.google.com" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="padding:14px 28px; font-size:1rem;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                    <path d="M12 18h.01"></path>
                </svg>
                <span>Unduh di Google Play</span>
            </a>
            <a href="<?php echo esc_url( home_url( '/fitur-ai-iot' ) ); ?>" class="btn btn-outline-white" style="padding:14px 28px; font-size:1rem;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                </svg>
                <span>Coba Simulator AI &amp; IoT</span>
            </a>
        </div>
    </div>
</section>

<!-- Real Data Karawang Strip -->
<div class="container" style="margin-top:-35px; position:relative; z-index:10;">
    <div class="stat-strip" style="margin-top:0; padding-top:0; border-top:none;">
        <div class="stat-item">
            <div class="stat-num" style="color:#DC2626;">1.108,6 Ton</div>
            <div class="stat-label">Timbunan Sampah Karawang / Hari</div>
        </div>
        <div class="stat-item">
            <div class="stat-num" style="color:#D97706;">662,1 Ton</div>
            <div class="stat-label">Sampah Harian Belum Terangkut</div>
        </div>
        <div class="stat-item">
            <div class="stat-num" style="color:#B91C1C;">&gt; 1,2 Juta Ton</div>
            <div class="stat-label">Akumulasi Kritis TPA Jalupang</div>
        </div>
        <div class="stat-item">
            <div class="stat-num" style="color:#15803D;">100% Presisi</div>
            <div class="stat-label">Timbangan IoT Nirkabel Anti-Fraud</div>
        </div>
    </div>
</div>

<!-- Navigasi Menu Halaman (Feature Navigation Hub) -->
<section class="section">
    <div class="container">
        <div class="section-head">
            <div class="section-badge">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="7" height="7" x="3" y="3" rx="1"></rect>
                    <rect width="7" height="7" x="14" y="3" rx="1"></rect>
                    <rect width="7" height="7" x="14" y="14" rx="1"></rect>
                    <rect width="7" height="7" x="3" y="14" rx="1"></rect>
                </svg>
                <span>Jelajahi Platform SiBambu</span>
            </div>
            <h2 class="section-title">Ekosistem Pengelolaan Sampah Cerdas</h2>
            <p class="section-subtitle">Pilih bagian yang ingin Anda pelajari secara mendalam di halaman terpisah.</p>
        </div>

        <div class="feature-nav-grid">
            <!-- Card 1: Fitur & Simulator -->
            <div class="feature-nav-card">
                <div>
                    <div class="feature-nav-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                            <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                            <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                            <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                        </svg>
                    </div>
                    <h3 class="feature-nav-title">Fitur AI &amp; Simulator IoT</h3>
                    <p class="feature-nav-text">
                        Pelajari bagaimana Google Gemini Vision mendeteksi material sampah dan timbangan IoT membaca beban secara nirkabel. Coba simulator interaktif langsung di halaman ini.
                    </p>
                </div>
                <div>
                    <a href="<?php echo esc_url( home_url( '/fitur-ai-iot' ) ); ?>" class="feature-nav-link">
                        <span>Buka Fitur &amp; Simulator</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Card 2: Indeks Harga -->
            <div class="feature-nav-card">
                <div>
                    <div class="feature-nav-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" x2="12" y1="2" y2="22"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                    <h3 class="feature-nav-title">Katalog Indeks Harga</h3>
                    <p class="feature-nav-text">
                        Lihat katalog lengkap foto material sampah yang diterima (Botol PET, Kardus, Kaleng, Besi, Minyak Jelantah) beserta indeks konversi nilai DaurPoin pasar pengepul.
                    </p>
                </div>
                <div>
                    <a href="<?php echo esc_url( home_url( '/indeks-harga' ) ); ?>" class="feature-nav-link">
                        <span>Lihat Katalog Harga</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Card 3: Tentang & Data Karawang -->
            <div class="feature-nav-card">
                <div>
                    <div class="feature-nav-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3 class="feature-nav-title">Data Karawang &amp; Tim</h3>
                    <p class="feature-nav-text">
                        Pelajari latar belakang krisis sampah TPA Jalupang, hasil riset 921 KK Desa Warung Bambu, video inovasi lapangan, dan profil tim mahasiswa Horizon University Indonesia.
                    </p>
                </div>
                <div>
                    <a href="<?php echo esc_url( home_url( '/tentang-kami' ) ); ?>" class="feature-nav-link">
                        <span>Baca Profil &amp; Data</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4 Langkah Cepat Menabung Sampah -->
<section class="section section-alt">
    <div class="container">
        <div class="section-head">
            <div class="section-badge">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                </svg>
                <span>Alur Praktis</span>
            </div>
            <h2 class="section-title">4 Langkah Mudah Mengubah Sampah Jadi Saldo</h2>
            <p class="section-subtitle">Sistem yang dirancang sederhana agar mudah diterapkan oleh seluruh lapisan warga.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(4, 1fr); gap:20px;">
            <div style="background:#F8FAFC; border:1px solid #E2E8F0; padding:28px 20px; border-radius:16px;">
                <div style="width:38px; height:38px; line-height:38px; text-align:center; background:#DCFCE7; color:#15803D; font-weight:800; border-radius:50%; margin-bottom:14px; font-family:var(--font-heading);">1</div>
                <h4 style="font-size:1.1rem; margin-bottom:8px;">Pilah dari Rumah</h4>
                <p style="font-size:0.9rem; color:#475569;">Pisahkan sampah anorganik (botol plastik, kardus, kaleng) dari sampah dapur organik.</p>
            </div>
            <div style="background:#F8FAFC; border:1px solid #E2E8F0; padding:28px 20px; border-radius:16px;">
                <div style="width:38px; height:38px; line-height:38px; text-align:center; background:#DCFCE7; color:#15803D; font-weight:800; border-radius:50%; margin-bottom:14px; font-family:var(--font-heading);">2</div>
                <h4 style="font-size:1.1rem; margin-bottom:8px;">Scan Kamera AI</h4>
                <p style="font-size:0.9rem; color:#475569;">Buka aplikasi SiBambu untuk mendeteksi material dan perkiraan nilai tukar per kilogram.</p>
            </div>
            <div style="background:#F8FAFC; border:1px solid #E2E8F0; padding:28px 20px; border-radius:16px;">
                <div style="width:38px; height:38px; line-height:38px; text-align:center; background:#DCFCE7; color:#15803D; font-weight:800; border-radius:50%; margin-bottom:14px; font-family:var(--font-heading);">3</div>
                <h4 style="font-size:1.1rem; margin-bottom:8px;">Timbang di TPS IoT</h4>
                <p style="font-size:0.9rem; color:#475569;">Bawa ke TPS Bambu Raya Dusun Krajan / Sukamaju. Timbangan IoT membaca berat otomatis.</p>
            </div>
            <div style="background:#F8FAFC; border:1px solid #E2E8F0; padding:28px 20px; border-radius:16px;">
                <div style="width:38px; height:38px; line-height:38px; text-align:center; background:#DCFCE7; color:#15803D; font-weight:800; border-radius:50%; margin-bottom:14px; font-family:var(--font-heading);">4</div>
                <h4 style="font-size:1.1rem; margin-bottom:8px;">Cairkan DaurPoin</h4>
                <p style="font-size:0.9rem; color:#475569;">Poin otomatis masuk ke akun Anda dan siap ditarik ke saldo DANA, ShopeePay, atau Tunai.</p>
            </div>
        </div>

        <div style="text-align:center; margin-top:36px;">
            <a href="<?php echo esc_url( home_url( '/panduan' ) ); ?>" class="btn btn-secondary">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"></path></svg>
                <span>Baca Buku Panduan Lengkap</span>
            </a>
        </div>
    </div>
</section>

<!-- Highlight Artikel Blog Terbaru -->
<section class="section">
    <div class="container">
        <div class="section-head">
            <div class="section-badge">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"></path>
                    <path d="M6 6h10"></path>
                    <path d="M6 10h10"></path>
                </svg>
                <span>Wawasan &amp; Edukasi</span>
            </div>
            <h2 class="section-title">Kabar &amp; Edukasi Lingkungan</h2>
            <p class="section-subtitle">Artikel terbaru seputar pengelolaan sampah dan ekonomi sirkular.</p>
        </div>

        <div class="blog-grid">
            <?php
            $blog_query = new WP_Query( array(
                'posts_per_page' => 3,
                'post_status'    => 'publish'
            ) );

            if ( $blog_query->have_posts() ) :
                while ( $blog_query->have_posts() ) :
                    $blog_query->the_post();
                    ?>
                    <article class="blog-card">
                        <div>
                            <div class="blog-meta">
                                <span class="blog-tag">Edukasi</span>
                                <span>&bull;</span>
                                <span><?php echo get_the_date( 'd M Y' ); ?></span>
                            </div>
                            <h3 class="blog-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="blog-excerpt">
                                <?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?>
                            </p>
                        </div>
                        <div>
                            <a href="<?php the_permalink(); ?>" class="blog-read-more">
                                <span>Baca Selengkapnya</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

        <div style="text-align:center; margin-top:36px;">
            <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn btn-secondary">
                <span>Lihat Semua Artikel di Blog</span>
            </a>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<div class="container">
    <div class="cta-banner">
        <h2>Siap Menjadi Pahlawan Lingkungan &amp; Menambah Tabungan?</h2>
        <p>Unduh SiBambu sekarang di Google Play, setor sampah anorganik Anda ke posko TPS desa, dan nikmati insentif DaurPoin langsung.</p>
        <div style="display:flex; justify-content:center; gap:16px; flex-wrap:wrap;">
            <a href="https://play.google.com" target="_blank" rel="noopener noreferrer" class="btn btn-accent" style="padding:14px 32px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect><path d="M12 18h.01"></path></svg>
                <span>Download di Google Play</span>
            </a>
            <a href="<?php echo esc_url( home_url( '/panduan' ) ); ?>" class="btn btn-secondary" style="padding:14px 28px; background:transparent; color:#FFFFFF; border-color:#64748B;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" x2="12" y1="15" y2="3"></line></svg>
                <span>Buku Panduan PDF</span>
            </a>
        </div>
    </div>
</div>

<?php
get_footer();
