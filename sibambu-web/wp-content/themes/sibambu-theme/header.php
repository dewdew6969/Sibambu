<?php
/**
 * Theme Header
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
            <span class="logo-badge">🌿</span>
            <span>SiBambu</span>
        </a>
        <nav>
            <ul class="nav-menu">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#fitur" class="nav-link">Fitur AI & IoT</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#masalah" class="nav-link">Data Karawang</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#harga" class="nav-link">Indeks Harga</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#panduan" class="nav-link">Manual Book</a></li>
                <li><a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>" class="nav-link">Kebijakan Privasi</a></li>
                <li>
                    <a href="https://play.google.com" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                        <span>📲 Unduh App</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
