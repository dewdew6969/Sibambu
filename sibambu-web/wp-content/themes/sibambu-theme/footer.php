<?php
/**
 * Theme Footer - Separated Pages Navigation & Legal Links
 */
?>
<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col brand-col">
                <div class="site-logo footer-logo">
                    <span class="logo-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </span>
                    <span class="brand-text" style="color:#FFFFFF;">SiBambu</span>
                </div>
                <p class="footer-desc">
                    Platform Bank Sampah Terpadu Berbasis AI dan Timbangan IoT untuk Mendukung Ekonomi Sirkular.
                    Inovasi unggulan Pekan Riset &amp; Inovasi Daerah (PERIODA) Kabupaten Karawang 2026.
                </p>
                <div class="footer-affiliation">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                        <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                    </svg>
                    <span>Horizon University Indonesia &bull; FICT x FHS</span>
                </div>
            </div>

            <div class="footer-col">
                <h4>Halaman Utama</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/fitur-ai-iot' ) ); ?>">Fitur AI &amp; Simulator IoT</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/indeks-harga' ) ); ?>">Katalog Indeks Harga</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/tentang-kami' ) ); ?>">Data Sampah Karawang &amp; Tim</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog &amp; Edukasi</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/panduan' ) ); ?>">Buku Panduan (Manual Book)</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Legalitas &amp; Play Store</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">Kebijakan Privasi (Privacy Policy)</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/terms-and-conditions' ) ); ?>">Syarat &amp; Ketentuan Layanan</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/delete-account' ) ); ?>">Permohonan Hapus Akun (Play Store)</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/manual-book.pdf' ) ); ?>" download>Unduh Manual Book PDF (Resmi)</a></li>
                    <li><a href="mailto:dewa.permana.fict@krw.horizon.ac.id">Kontak Pengembang</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date( 'Y' ); ?> SiBambu. Hak Cipta Dilindungi Undang-Undang. Kolaborasi Tim Inovator Horizon University Indonesia &amp; Desa Warung Bambu, Karawang.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
