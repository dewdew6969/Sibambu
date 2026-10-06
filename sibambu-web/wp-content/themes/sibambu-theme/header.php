<?php
/**
 * Theme Header - Separated Multi-Page Navigation & SVG Icons
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container nav-container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
            <span class="logo-icon-box">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path>
                    <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                </svg>
            </span>
            <span class="brand-text">SiBambu</span>
        </a>

        <nav class="main-nav">
            <ul class="nav-menu">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link <?php if ( is_front_page() ) echo 'active'; ?>">Beranda</a></li>
                <li><a href="<?php echo esc_url( home_url( '/fitur-ai-iot' ) ); ?>" class="nav-link <?php if ( is_page( 'fitur-ai-iot' ) ) echo 'active'; ?>">Fitur &amp; Simulator</a></li>
                <li><a href="<?php echo esc_url( home_url( '/indeks-harga' ) ); ?>" class="nav-link <?php if ( is_page( 'indeks-harga' ) ) echo 'active'; ?>">Indeks Harga</a></li>
                <li><a href="<?php echo esc_url( home_url( '/tentang-kami' ) ); ?>" class="nav-link <?php if ( is_page( 'tentang-kami' ) ) echo 'active'; ?>">Data Karawang</a></li>
                <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="nav-link <?php if ( is_page( 'blog' ) || is_single() ) echo 'active'; ?>">Blog &amp; Berita</a></li>
                <li><a href="<?php echo esc_url( home_url( '/panduan' ) ); ?>" class="nav-link <?php if ( is_page( 'panduan' ) ) echo 'active'; ?>">Panduan</a></li>
            </ul>
        </nav>

        <div class="header-action">
            <a href="https://play.google.com" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                    <path d="M12 18h.01"></path>
                </svg>
                <span>Unduh App</span>
            </a>
        </div>
    </div>
</header>
