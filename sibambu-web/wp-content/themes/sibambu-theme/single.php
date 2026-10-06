<?php
/**
 * Single Blog Post Template
 */
get_header();
?>

<div class="page-content-wrapper">
    <div class="container" style="max-width:860px;">
        <article class="page-article">
            <?php
            while ( have_posts() ) :
                the_post();
                ?>
                <div style="margin-bottom: 24px;">
                    <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" style="display:inline-flex; align-items:center; gap:6px; color:#15803D; font-weight:700; font-size:0.88rem; margin-bottom:16px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg>
                        <span>Kembali ke Semua Artikel</span>
                    </a>
                    <h1 style="font-size:2.4rem; line-height:1.25; margin-bottom:16px; color:#0F172A;"><?php the_title(); ?></h1>
                    <div style="display:flex; align-items:center; gap:12px; font-size:0.85rem; color:#64748B; border-bottom:1px solid #E2E8F0; padding-bottom:18px;">
                        <span>Oleh: <strong>Tim Inovasi SiBambu</strong></span>
                        <span>&bull;</span>
                        <span>Dipublikasikan: <?php the_date( 'd F Y' ); ?></span>
                        <span>&bull;</span>
                        <span style="background:#F0FDF4; color:#15803D; padding:2px 8px; border-radius:4px; font-weight:700;">Edukasi Lingkungan</span>
                    </div>
                </div>

                <div class="entry-content" style="font-size:1.05rem; line-height:1.8; color:#334155;">
                    <?php the_content(); ?>
                </div>

                <div style="margin-top:40px; padding-top:24px; border-top:1px solid #E2E8F0; display:flex; justify-content:space-between; align-items:center;">
                    <span style="font-size:0.85rem; color:#64748B;">Bagikan artikel ini untuk mengedukasi warga sekitar:</span>
                    <a href="https://api.whatsapp.com/send?text=<?php echo urlencode( get_the_title() . ' - ' . get_permalink() ); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-sm">
                        <span>Bagikan ke WhatsApp</span>
                    </a>
                </div>
                <?php
            endwhile;
            ?>
        </article>
    </div>
</div>

<?php
get_footer();
