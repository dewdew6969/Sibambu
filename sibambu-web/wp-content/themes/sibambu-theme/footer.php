<?php
/**
 * Theme Footer
 */
?>
<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <div class="site-logo" style="color:#FFFFFF; margin-bottom: 14px;">
                    <span class="logo-badge">🌿</span>
                    <span>SiBambu</span>
                </div>
                <p style="font-size:0.9rem; line-height:1.6; margin-bottom:16px;">
                    Sistem Bank Sampah Terpadu Berbasis AI dan Timbangan IoT untuk Mendukung Ekonomi Sirkular.
                    Inovasi unggulan Pekan Riset & Inovasi Daerah (PERIODA) Kabupaten Karawang 2026.
                </p>
                <p style="font-size:0.85rem; color:#94A3B8;">
                    Dikelola oleh Tim Inovasi Mahasiswa FICT x FHS Horizon University Indonesia.
                </p>
            </div>
            <div class="footer-col">
                <h4>Navigasi Dokumen</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#fitur">Fitur Unggulan</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#panduan">Buku Panduan (Manual Book)</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/manual-book.pdf' ) ); ?>" download>Unduh PDF Panduan</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#harga">Katalog Konversi Harga</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Legalitas & Play Store</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">Kebijakan Privasi (Privacy Policy)</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/terms-and-conditions' ) ); ?>">Syarat & Ketentuan Layanan</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/delete-account' ) ); ?>">Permohonan Hapus Akun (Play Store)</a></li>
                    <li><a href="mailto:dewa.permana.fict@krw.horizon.ac.id">Kontak Tim Pengembang</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date( 'Y' ); ?> SiBambu. Hak Cipta Dilindungi. Horizon University Indonesia x Desa Warung Bambu, Karawang.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
