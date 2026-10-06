<?php
/**
 * Standard Page Template
 */
get_header();
?>

<div class="page-content-wrapper">
    <div class="container">
        <article class="page-article">
            <?php
            while ( have_posts() ) :
                the_post();
                ?>
                <header style="margin-bottom: 24px; border-bottom: 1px solid #E2E8F0; padding-bottom: 16px;">
                    <h1 class="page-title"><?php the_title(); ?></h1>
                    <div style="font-size: 0.85rem; color: #64748B;">
                        Terakhir diperbarui: <?php the_modified_date( 'd F Y' ); ?> &bull; SiBambu Platform
                    </div>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <?php
            endwhile;
            ?>
        </article>
    </div>
</div>

<?php
get_footer();
