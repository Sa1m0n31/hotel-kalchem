<?php
get_header();
?>

<section class="quote quote--pageHeading">
    <article>
        <h1 class="text-normal">Restauracja Kalchem czynna w godzinach 11.00 do 21.30</h1>
        <blockquote>
            <p>Być może akurat dziś świętujesz rocznicę ważnego wydarzenia? A może chcesz po prostu spróbować czegoś nowego? Szef naszej kuchni to doświadczony kucharz, który stworzy dla Państwa niezapomniane potrawy.</p>
        </blockquote>
    </article>
</section>
<section>
    <div>
        <ul class="rslides">
            <li>
                <img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/gallery/15/cover.jpg"; ?>" alt="">
            </li>
        </ul>
    </div>
</section>
<section>
    <article class="flex f3 intro">
        <div>
            <h2><strong>Restauracja Kalchem CZYNNA W GODZINACH OD 11.00 DO 21.30</strong>&nbsp;- Zasmakuj się w kuchni regionalnej.</h2>
        </div>
        <div>
            <h3>Sala kominkowa na kameralne uroczystości</h3>
            <p>Do Państwa dyspozycji oddajemy salę kominkową w urokilwym klimacie pięknego pojezierza brodnickiego. To doskonałe miejsce na na organizację kameralnych imprez rodzinnych lub innych ważnych uroczystości.
                Uroku i ciepła dodaje klimatyczny kominek.</p>
        </div>
        <div>
            <h3>Polska kuchnia <br>regionalna</h3>
            <p>Spokojny niedzielny obiad lub kolacja w środku tygodnia? Bez względu na porę dnia, czy dzień tygodnia, kucharze Restauracji Kalchem uraczą Państwa podniebienia wykwintnymi specjałami polskiej regionalnej kuchni. </p>
        </div>
    </article>
</section>
<section>
    <article>
        <?php echo the_content(); ?>
    </article>
</section>
<a id="oranzeria"></a>
<section>
    <article class="flex f3 intro">
        <div class="f32">
            <div class="gallery"><div class="grid-item grid-double"><a class="fancybox" href="<?php echo get_bloginfo("stylesheet_directory") . "/assets/gallery/7/24.jpg"; ?>" rel="fancybox-7"><img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/gallery/7/24.jpg"; ?>" alt="restauracja,oranżeria Kalchem"/></a></div>
                <div class="grid-item grid-double"><a class="fancybox" href="<?php echo get_bloginfo("stylesheet_directory") . "/assets/gallery/7/25.jpg"; ?>" rel="fancybox-7"><img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/gallery/7/25.jpg"; ?>" alt="restauracja,oranżeria Kalchem"/></a></div>
                <div class="grid-item grid-double"><a class="fancybox" href="<?php echo get_bloginfo("stylesheet_directory") . "/assets/gallery/7/26.jpg"; ?>" rel="fancybox-7"><img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/gallery/7/26.jpg"; ?>" alt="restauracja,oranżeria Kalchem"/></a></div>
                <div class="grid-item grid-double"><a class="fancybox" href="<?php echo get_bloginfo("stylesheet_directory") . "/assets/gallery/7/27.jpg"; ?>" rel="fancybox-7"><img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/gallery/7/27.jpg"; ?>" alt="restauracja,oranżeria Kalchem"/></a></div></div>
        </div>
        <div>
            <h2><strong>Restauracja Kalchem</strong> w Brzoziu</h2>
            <p>Ofertę Restauracji Kalchem kierujemy do gości nie tylko z okolic Brodnicy, Lidzbarka, czy Nowego Miasta Lubawskiego.</p><p>Szczególnie serdecznie witamy gości z zewnątrz, a więc tych, którzynie zakosztowali się w smakach regionalne kuchni połączonej z pięknymi krajobrazami pojezierza brodnickiego.</p>
            <br />
            <h3>Oranżeria z widokiem na ogród</h3>
            <p>Okolica hotelu, piękne pojezierze brodnickie stwarza doskonałe warunki do odpoczynku lub aktywnego spędzania czasu. Nie wyobrażamy sobie naszego kompleksu
                bez zieleni i przestrzeni jaką się otaczamy. Dlatego gorąco zachęcamy do korzystania z naszego ogrodu i pełnej oferty restauracji. Pamiętając o najmłodszych, nie mogło zabraknąć placu zabaw!</p>
        </div>
    </article>
</section>
<a id="karta-dan-restauracji"></a>
<section class="quote">
    <article>
        <h2 class="text-normal">Karta dań</h2>
    </article>
</section>
<section>
    <article>
        <?php
            echo get_field('menu');
        ?>
    </article>
</section>

<?php
get_footer();
?>
