<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hotel_Kalchem
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="mobileMenu center">
    <button class="mobileMenu__close" onclick="closeMenu()">
        &times;
    </button>

    <div class="mobileMenu__inner">
        <img class="mobileMenu__logo" src="<?php echo get_bloginfo("stylesheet_directory") . '/assets/kalchem-logo-brown.svg' ?>" alt="logo" />

        <a href="<?php echo home_url(); ?>" class="mobileMenu__item">
            Strona główna
        </a>
        <a href="<?php echo get_page_link(get_page_by_title('Hotel')->ID); ?>" class="mobileMenu__item">
            Hotel
        </a>
        <a href="<?php echo get_page_link(get_page_by_title('Restauracja')->ID); ?>" class="mobileMenu__item">
            Restauracja
        </a>
        <a href="<?php echo get_page_link(get_page_by_title('Sala bankietowa')->ID); ?>" class="mobileMenu__item">
            Sala bankietowa
        </a>
        <a href="<?php echo get_page_link(get_page_by_title('Basen')->ID); ?>" class="mobileMenu__item">
            Basen
        </a>
        <a href="<?php echo get_page_link(get_page_by_title('Dla firm')->ID); ?>" class="mobileMenu__item">
            Dla firm
        </a>
        <a href="<?php echo get_page_link(get_page_by_title('Kontakt')->ID); ?>" class="mobileMenu__item">
            Kontakt
        </a>
    </div>
</div>

<header>
    <nav>
        <div class="flex">
            <a href="<?php echo home_url(); ?>"><img class="navLogo" src="<?php echo get_bloginfo("stylesheet_directory") . '/assets/kalchem-logo-brown.svg' ?>" alt="Hotel Kalchem"></a>
            <ul class="d-desktop">
                <li class="first"><a href="<?php echo get_page_link(get_page_by_title('Hotel')->ID); ?>" >Hotel</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('Restauracja')->ID); ?>" >Restauracja</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('Sala bankietowa')->ID); ?>" >Sala bankietowa</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('Basen')->ID); ?>">Basen</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('Dla firm')->ID); ?>" >Dla firm</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('Kontakt')->ID); ?>" >Kontakt</a></li>
            </ul>
            <button class="btn--mobileMenu d-mobile" onclick="openMenu()">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . '/assets/menu.svg' ?>" alt="menu" />
            </button>
        </div>
    </nav>
    <section class="video start">
        <video loop muted autoplay id="bgvid">
            <source src="<?php echo get_bloginfo("stylesheet_directory") . '/assets/kalchem.mp4'; ?>" type="video/mp4">
        </video>
        <div class="bg-layer"></div>
        <div class="fade">
            <div class="layer">
                <img src="<?php echo get_bloginfo("stylesheet_directory") . '/assets/kalchem-logo-gold.svg'; ?>" alt="Hotel Kalchem Brzozie">
                <h2 class="text-normal d-desktop">Sala Weselna <small>której nie zapomni<br> żaden z gości</small></h2>
                <div class="flex--buttons d-desktop"><a href="<?php echo get_page_link(get_page_by_title('Sala bankietowa')->ID); ?>" class="btn">Zapoznaj się z ofertą</a>
                    <a href="tel:+48668186412" class="btn">Zapytanie o termin</a>
                </div>
            </div>
            <div class="layer">
                <img src="<?php echo get_bloginfo("stylesheet_directory") . '/assets/kalchem-logo-gold.svg'; ?>" alt="Hotel Kalchem Brzozie">
                <h2 class="text-normal d-desktop">Hotel Kalchem<small>oraz basen,<br> sauny i jacuzzi</small></h2>
                <div class="flex--buttons d-desktop"><a href="<?php echo get_page_link(get_page_by_title('Hotel')->ID); ?>" class="btn">Prezentacja oferty</a>
                    <a href="tel:+48564935251" class="btn">Rezerwacja pokoju</a>
                </div>
            </div>
        </div>
    </section>
    <div class="banner-sm d-desktop flex start">
        <img src="<?php echo get_bloginfo("stylesheet_directory") . '/assets/kalchem-logo-gold.svg'; ?>" alt="Hotel Kalchem Brzozie">
    </div>
</header>