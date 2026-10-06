<?php
/**
 * Template Name: Indeks Harga Page
 */
get_header();

$assets_url = home_url( '/assets/' );
?>

<!-- Inner Page Hero Banner -->
<div class="page-hero-banner">
    <div class="container">
        <div class="page-hero-badge">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                <line x1="12" x2="12" y1="2" y2="22"></line>
                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
            </svg>
            <span>Katalog Resmi &amp; Pasar Pengepul</span>
        </div>
        <h1 class="page-hero-title">Katalog &amp; Indeks Harga Sampah</h1>
        <p class="page-hero-desc">
            Daftar harga konversi DaurPoin transparan berdasarkan bobot riil dan standar industri daur ulang Kabupaten Karawang.
        </p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="section-head">
            <div class="section-badge">Material Daur Ulang</div>
            <h2 class="section-title">Semua Kategori Sampah yang Diterima</h2>
            <p class="section-subtitle">Pastikan sampah Anda bersih, kering, dan telah dipilah sebelum dibawa ke posko TPS SiBambu.</p>
        </div>

        <div class="price-cards-grid">
            <!-- Item 1: Botol Plastik PET -->
            <div class="price-card">
                <div class="price-card-image">
                    <img src="<?php echo esc_url( $assets_url . 'item_plastic_bottle.jpg' ); ?>" alt="Botol Mineral PET Bening" loading="lazy">
                </div>
                <div class="price-card-body">
                    <div>
                        <div class="price-card-badge">Plastik Bersih</div>
                        <h3 class="price-card-title">Botol Mineral (PET Bening)</h3>
                        <p class="price-card-desc">Botol air mineral Aqua, Le Minerale, botol jus bening. Lepas tutup botol dan remukkan untuk efisiensi ruang.</p>
                    </div>
                    <div class="price-card-footer">
                        <span class="price-rate">2.500 - 3.500 Poin</span>
                        <span class="price-unit">per kilogram</span>
                    </div>
                </div>
            </div>

            <!-- Item 2: Kardus Cokelat -->
            <div class="price-card">
                <div class="price-card-image">
                    <img src="<?php echo esc_url( $assets_url . 'item_cardboard.jpg' ); ?>" alt="Kardus Cokelat Kemasan" loading="lazy">
                </div>
                <div class="price-card-body">
                    <div>
                        <div class="price-card-badge">Kertas &amp; Box</div>
                        <h3 class="price-card-title">Kardus Cokelat Kemasan</h3>
                        <p class="price-card-desc">Kardus box mie instan, kardus paket belanja online, karton tebal kering bebas dari basah/minyak.</p>
                    </div>
                    <div class="price-card-footer">
                        <span class="price-rate">1.500 - 2.200 Poin</span>
                        <span class="price-unit">per kilogram</span>
                    </div>
                </div>
            </div>

            <!-- Item 3: Kaleng & Aluminium -->
            <div class="price-card">
                <div class="price-card-image">
                    <img src="<?php echo esc_url( $assets_url . 'item_aluminum_can.jpg' ); ?>" alt="Kaleng Minuman & Aluminium" loading="lazy">
                </div>
                <div class="price-card-body">
                    <div>
                        <div class="price-card-badge">Logam Ringan</div>
                        <h3 class="price-card-title">Kaleng &amp; Aluminium</h3>
                        <p class="price-card-desc">Kaleng minuman soda, kaleng biskuit/susu kental manis, wajan aluminium rusak tanpa pegangan kayu.</p>
                    </div>
                    <div class="price-card-footer">
                        <span class="price-rate">7.000 - 12.000 Poin</span>
                        <span class="price-unit">per kilogram</span>
                    </div>
                </div>
            </div>

            <!-- Item 4: Besi & Tembaga -->
            <div class="price-card">
                <div class="price-card-image">
                    <img src="<?php echo esc_url( $assets_url . 'item_metal_scrap.jpg' ); ?>" alt="Besi & Tembaga" loading="lazy">
                </div>
                <div class="price-card-body">
                    <div>
                        <div class="price-card-badge">Logam Komersial</div>
                        <h3 class="price-card-title">Besi Cor &amp; Kawat Tembaga</h3>
                        <p class="price-card-desc">Potongan rangka besi cor tebal (Rp 4.000/kg) dan kawat kabel tembaga AC (hingga Rp 85.000/kg).</p>
                    </div>
                    <div class="price-card-footer">
                        <span class="price-rate">3.500 - 85.000 Poin</span>
                        <span class="price-unit">per kilogram</span>
                    </div>
                </div>
            </div>

            <!-- Item 5: Botol Kaca Utuh -->
            <div class="price-card">
                <div class="price-card-image">
                    <img src="<?php echo esc_url( $assets_url . 'item_glass_bottle.jpg' ); ?>" alt="Botol Kaca Utuh" loading="lazy">
                </div>
                <div class="price-card-body">
                    <div>
                        <div class="price-card-badge">Kaca Reusable</div>
                        <h3 class="price-card-title">Botol Kaca Utuh</h3>
                        <p class="price-card-desc">Botol sirup marjan, botol kecap, botol saus tebal utuh tanpa retak maupun pecah.</p>
                    </div>
                    <div class="price-card-footer">
                        <span class="price-rate">500 - 1.000 Poin</span>
                        <span class="price-unit">per buah (pcs)</span>
                    </div>
                </div>
            </div>

            <!-- Item 6: Minyak Jelantah -->
            <div class="price-card">
                <div class="price-card-image">
                    <img src="<?php echo esc_url( $assets_url . 'item_used_oil.jpg' ); ?>" alt="Minyak Jelantah Dapur" loading="lazy">
                </div>
                <div class="price-card-body">
                    <div>
                        <div class="price-card-badge">Energi Biodiesel</div>
                        <h3 class="price-card-title">Minyak Jelantah Dapur</h3>
                        <p class="price-card-desc">Minyak goreng bekas dapur rumah tangga yang ditampung dalam botol/jerigen tertutup rapat tanpa air.</p>
                    </div>
                    <div class="price-card-footer">
                        <span class="price-rate">4.000 - 6.500 Poin</span>
                        <span class="price-unit">per liter</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ketentuan & Panduan Penyetoran -->
        <div style="margin-top:56px; background:#FFFFFF; border:1px solid #E2E8F0; border-radius:18px; padding:36px;">
            <h3 style="font-size:1.35rem; margin-bottom:14px; color:#0F172A;">Ketentuan Penyetoran di Posko TPS:</h3>
            <ul style="margin-left:20px; color:#475569; line-height:1.8;">
                <li>Nilai tukar <strong>1 DaurPoin setara dengan Rp 1,-</strong> dan dapat ditarik langsung ke akun dompet digital DANA, ShopeePay, atau uang tunai di kasir TPS.</li>
                <li>Harga dapat berfluktuasi mengikuti kondisi pasar pengepul dan pabrik daur ulang mitra di kawasan industri Karawang.</li>
                <li>Sampah yang dalam kondisi basah, kotor berlumpur, atau bercampur sampah sisa makanan dapat dikenai potongan timbangan atau ditolak demi kelayakan daur ulang.</li>
                <li><strong>Dilarang keras:</strong> Memasukkan limbah B3 (baterai, jarum suntik, botol pestisida, limbah medis) ke dalam wadah sampah anorganik umum.</li>
            </ul>
        </div>
    </div>
</section>

<?php
get_footer();
