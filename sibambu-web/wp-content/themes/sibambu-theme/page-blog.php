<?php
/**
 * Template Name: Blog Archive Page
 */
get_header();
?>

<div class="page-content-wrapper">
    <div class="container">
        <div class="section-head" style="margin-bottom:40px;">
            <div class="section-badge">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"></path>
                    <path d="M6 6h10"></path>
                    <path d="M6 10h10"></path>
                </svg>
                <span>Pusat Edukasi &amp; Berita</span>
            </div>
            <h1 style="font-size:2.5rem; margin-bottom:12px; color:#0F172A;">Blog &amp; Publikasi Inovasi SiBambu</h1>
            <p class="section-subtitle">Kumpulan wawasan, data riset persampahan Kabupaten Karawang, dan panduan praktis memilah sampah bernilai ekonomi sirkular.</p>
        </div>

        <div class="blog-grid">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $all_posts_query = new WP_Query( array(
                'post_type'      => 'post',
                'posts_per_page' => 9,
                'paged'          => $paged,
                'post_status'    => 'publish'
            ) );

            if ( $all_posts_query->have_posts() ) :
                while ( $all_posts_query->have_posts() ) :
                    $all_posts_query->the_post();
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
                                <?php echo wp_trim_words( get_the_excerpt(), 22, '...' ); ?>
                            </p>
                        </div>
                        <div>
                            <a href="<?php the_permalink(); ?>" class="blog-read-more">
                                <span>Baca Selengkapnya</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p>Belum ada artikel yang dipublikasikan.</p>
                <?php
            endif;
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
