<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hotel_Kalchem
 */

get_header('main');
?>

    <section class="dashbg offer">
        <article class="flex box bbox">
            <div class="bbox-img"><img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/hotel.jpg"; ?>" alt="Hotel Kalchem"></div>
            <div class="bbox-text">
                <article>
                    <h3 class="text-normal"><a href="hotel-kalchem/"><strong>Hotel Kalchem</strong></a></h3>
                    <p class="text--tile">Hotel Kalchem położony jest w okolicy obejmującej rezerwaty przyrody m.in. Brodnicki Park Krajobrazowy. Pięknie meandrująca Drwęca przyciąga turystów na organizowane co roku międzynarodowe spływy kajakowe.
                        Jest to doskonałe miejsce na odpoczynek na łonie natury w cichej okolicy połączony z możliwością zwiedzania zabytków pobliskich miast.</p>
                    <a href="<?php echo get_page_link(get_page_by_title('Hotel')->ID); ?>" class="btn">Zobacz pokoje</a>&nbsp;
                </article>
            </div>
        </article>
        <article class="flex box bbox inverse">
            <div class="bbox-img"><img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/sala-bankietowa.jpg"; ?>" alt="Sala bankietowa"></div>
            <div class="bbox-text">
                <article>
                    <h3 class="text-normal"><a href="sala-weselna/"><strong>Sala bankietowa</strong></a></h3>
                    <p class="text--tile">Dysponujemy przepiękną salą na 130 osób. Robimy wesela na 160 os z połączeniem z drugą salą. Nasi kucharze to mistrzowie w swoim fachu. Proponujemy naszym gościom oprócz standardowych dań: pieczonego świniaka, "stół wiejski", wspaniałe ciasta i torty weselne i nie tylko.
                        Jeśli szukacie sali weselnej na najważniejsze przyjęcie w Waszym życiu to sala bankietowa Hotelu Kalchem będzie odpowiednim wyborem na ten szczególny dzień.</p>
                    <a href="<?php echo get_page_link(get_page_by_title('Sala bankietowa')->ID); ?>" class="btn btn--marginRight">Prezentacja sali</a>
                    <a href="tel:+48668186412" class="btn">Zapytaj o termin</a>&nbsp;
                </article>
            </div>
        </article>
        <article class="flex box bbox">
            <div class="bbox-img"><img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/basen.jpg"; ?>" alt="Hotel Kalchem"></div>
            <div class="bbox-text">
                <article>
                    <h3 class="text-normal"><a href="hotel-kalchem/"><strong>Basen z saunami</strong></a></h3>
                    <p class="text--tile">Nasza oferta obejmuje nie tylko eleganckie pokoje i wykwintne dania, ale także pełne doświadczenie w dziedzinie relaksu i odprężenia. Do dyspozycji naszych gości oddajemy basen wraz z saunami suchą i mokrą oraz jacuzzi.</p>
                    <a href="<?php echo get_page_link(get_page_by_title('Basen')->ID); ?>" class="btn">Zobacz więcej</a>
                </article>
            </div>
        </article>
        <article class="flex box bbox inverse">
            <div class="bbox-img"><img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/sala-kominkowa.jpg"; ?>" alt="Sala bankietowa"></div>
            <div class="bbox-text">
                <article>
                    <h3 class="text-normal"><a href="restauracja-kalchem/"><strong>Sala kominkowa</strong></a></h3>
                    <p class="text--tile">Być może akurat dziś świętujesz rocznicę ważnego wydarzenia? A może chcesz po prostu spróbować czegoś nowego? Szef naszej kuchni to doświadczony kucharz, który stworzy dla Państwa niezapomniane potrawy. Zasmakuj się w naszej regionalnej kuchni - restauracja czynna w godzinach od 11:00 do 21:30.</p>
                    <a href="<?php echo get_page_link(get_page_by_title('Restauracja')->ID); ?>" class="btn">Sala kominkowa</a>
                </article>
            </div>
        </article>
        <article class="flex box bbox">
            <div class="bbox-img"><img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/oranzeria.jpg"; ?>" alt="Hotel Kalchem"></div>
            <div class="bbox-text">
                <article>
                    <h3 class="text-normal"><a href="hotel-kalchem/"><strong>Oranżeria</strong></a></h3>
                    <p class="text--tile">W sercu naszego hotelu ukryta jest Oranżeria, wyjątkowe miejsce, które stworzone zostało z myślą o miłośnikach pysznego jedzenia w otoczeniu przyrody. To prawdziwy kulinaryczny raj, gdzie w sezonie letnim możecie Państwo delektować się wykwintnymi daniami serwowanymi przez naszą restaurację.</p>
                    <a href="<?php echo get_page_link(get_page_by_title('Restauracja')->ID); ?>" class="btn">Zobacz więcej</a>
                </article>
            </div>
        </article>

        <article class="flex box bbox inverse">
            <div class="bbox-img"><img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/salon-gier.jpg"; ?>" alt="Sala bankietowa"></div>
            <div class="bbox-text">
                <article>
                    <h3 class="text-normal"><a href="restauracja-kalchem/"><strong>Salon gier</strong></a></h3>
                    <p class="text--tile">Dla gości naszego hotelu przygotowaliśmy salon gier, w którym można spędzić wolny czas korzystając ze stołu bilardowego lub piłkarzyków.</p>
                </article>
            </div>
        </article>
        <article class="flex box bbox">
            <div class="bbox-img"><img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/bawialnia.jpg"; ?>" alt="Hotel Kalchem"></div>
            <div class="bbox-text">
                <article>
                    <h3 class="text-normal"><a href="hotel-kalchem/"><strong>Bawialnia</strong></a></h3>
                    <p class="text--tile">Dla naszych najmłodszych gości przygotowaliśmy bawialnię - miejsce gdzie dzieci odkrywają świat radości, kreatywności i bezpiecznej zabawy. Zapewniamy niezapomniane chwile pełne uśmiechów, gwarancję śmiechu i rozwijania wyobraźni.</p>
                </article>
            </div>
        </article>
        <article class="flex box bbox inverse">
            <div class="bbox-img"><img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/sala-konferencyjna.jpg"; ?>" alt="Dla firm"></div>
            <div class="bbox-text">
                <article>
                    <h3 class="text-normal"><a href="dla-firm.html"><strong>Sala konferencyjna</strong></a></h3>
                    <p class="text--tile">Zapraszamy firmy do organizowania szkoleń w naszej sali konferencyjnej w Hotelu Kalchem. Dysponujemy salą na 50 miejsc, z możliwością ustawienia krzeseł w sprawdzonych konfiguracjach: szkolnej, konferencyjnej,kinowej lub wedle Państwa potrzeb.</p>
                    <a href="<?php echo get_page_link(get_page_by_title('Dla firm')->ID); ?>" class="btn">Prezentacja sali konferencyjnej</a>
                </article>
            </div>
        </article>
    </section>

    <!-- Place <div> tag where you want the feed to appear -->
    <div class="instagramHeading">
        <h4 class="instagramHeader">
            Śledź nasz profil na Instagramie
        </h4>
        <a class="instagramSubheader" href="https://www.instagram.com/hotel_kalchem/" target="_blank">
            @hotel_kalchem
        </a>
    </div>

    <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>

    <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
    <script type="text/javascript">
        /* curator-feed-default-feed-layout */
        (function(){
            var i,e,d=document,s="script";i=d.createElement("script");i.async=1;i.charset="UTF-8";
            i.src="https://cdn.curator.io/published/b41bc025-cb75-45d8-97d1-b1ae01ac6596.js";
            e=d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
        })();
    </script>

    <section>
        <article class="flex f3">
            <div class="flex contact--left">
                <ul class="rslides">
                    <li>
                        <img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/recepcja.jpg"; ?>" alt="">
                    </li>
                </ul>
            </div>
            <div class="contact--right">
                <div class="contact">
                    <h3>Hotel Kalchem</h3>
                    <p>Brzozie 157, 87-313 Brzozie
                        <br> NIP: 874-162-27-10
                        <br> REGON: 340931353
                        <br> tel. 56 49 352 51</p>
                    <br>

                    <h3>Formularz kontaktowy</h3>
                    <br>
                    <div class="formbox">
                        <?php echo do_shortcode('[contact-form-7 id="e11e76a" title="Formularz 1"]'); ?>
                    </div>
                </div>
            </div>
        </article>
    </section>

    <section>
        <img class="img img--pfr" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/pfr.png"; ?>" alt="pfr" />
    </section>

<?php
get_footer();
?>