<?php
/**
 * Main Template File (Fallback)
 */
get_header();
?>

<div class="page-content-wrapper">
    <div class="container">
        <article class="page-article">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                    <?php
                endwhile;
            else :
                ?>
                <p>Belum ada konten yang tersedia.</p>
                <?php
            endif;
            ?>
        </article>
    </div>
</div>

<?php
get_footer();
