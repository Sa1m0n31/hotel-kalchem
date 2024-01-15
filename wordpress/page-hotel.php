<?php
get_header();
?>

<section class="quote quote--pageHeading">
    <article>
        <h1 class="text-normal">Hotel Kalchem</h1>
        <blockquote>
            <p class="text-style-normal">Hotel Kalchem położony jest w okolicy obejmującej rezerwaty przyrody m.in.
                Brodnicki Park Krajobrazowy. Pięknie meandrująca Drwęca przyciąga turystów na organizowane co roku
                międzynarodowe spływy kajakowe.</p>
            <p class="text-style-normal">
                Jest to doskonałe miejsce na odpoczynek na łonie natury w cichej okolicy połączony z możliwością
                zwiedzania zabytków pobliskich miast.
            </p>
        </blockquote>
    </article>
</section>
<section>
    <div class="rslides">
        <iframe src="https://www.youtube.com/embed/J34QDV-9U6s?showinfo=0&modestbranding=1&autoplay=0&rel=0" style="width:1200px; height:675px;" frameborder="0" allowfullscreen></iframe>
    </div>
</section>
<section>
    <article class="flex f4 intro">
        <div>
            <h2 class="text-normal"><strong>Hotel Kalchem</strong> - miejsce w kt&oacute;rym odpoczniesz od natłoku codziennych spraw.</h2>
        </div>
        <div>
            <h3>Hotel oraz basen, sauny i jacuzzi</h3>
            <p>Mimo, że jesteśmy 3-gwiazdkowym hotelem to cały kompleks hotelowy posiada wiele udogodnień jakie można spotkać w hotelach wyższej kategorii. Są to m.in. basen wraz z saunami suchą i mokrą a także jacuzzi.</p>
        </div>
        <div>
            <h3>Komfortowe pokoje z łazienkami</h3>
            <p>Naszym gościom oferujemy nocleg w komfortowo urządzonych pokojach z łazienkami. Każdy pok&oacute;j wyposażony jest m.in. w TV, Telefon, Wi-Fi i łazienkę z pełnym węzłem sanitarnym. Do każdego noclegu można zam&oacute;wić śniadanie.</p>
        </div>
        <div>
            <h3>Sala konferencyjna dla biznesu.</h3>
            <p>Klientom biznesowym oferujemy organizowanie spotkań i prezentacji dla swoich kontrahent&oacute;w w naszej sali konferencyjnej. Zachęcamy r&oacute;wnież do korzystania z naszego kompleksu przy okazji wyjazd&oacute;w służbowych.</p>
        </div>
    </article>
</section>
<section>
    <article>
        <?php
        the_content();
        ?>
    </article>
</section>
<a id="pokoje"></a>
<section class="quote">
    <article>
        <h2 class="text-normal">Pokoje dla gości</h2>
        <blockquote>
            <p>Do Państwa dyspozycji oddajmy 20 komfortowo wyposażonych pokoi oraz 4 pokoje ekonomiczne co daje łącznie 70 miejsc noclegowych. Ponadto zapraszamy do degustowania się w specjałach lokalnej kuchni m. in. daniach z dziczyzny w akompaniamencie borowików i kurek z pobliskich lasów.</p>
        </blockquote>
    </article>
</section>
<section>
    <article class="flex f2 box">
        <div class="box-item">
            <img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/gallery/1/cover.jpg"; ?>" alt="Apartament nowożeńców *****">
            <div>
                <h3 class="text-normal"><a href="<?php echo get_page_link(get_page_by_title('Apartament nowożeńców')->ID); ?>">Apartament nowożeńców <i class="fa fa-star-o gold"></i><i class="fa fa-star-o gold"></i><i class="fa fa-star-o gold"></i><i class="fa fa-star-o gold"></i><i class="fa fa-star-o gold"></i></a></h3>
                <p><i class="fa fa-bed" aria-hidden="true"></i> 1 łoże małżeńskie <i class="fa fa-user" style="margin-left:20px" aria-hidden="true"></i> max. 2 osoby </p>
                <p><i>Apartament to idealne uzupełnienie dla nowożeńców, którzy zdecydują się celebrować swój ślub na sali weselnej w Hotelu Kalchem.</i></p>
                <p>
                    <a href="<?php echo get_page_link(get_page_by_title('Apartament nowożeńców')->ID); ?>" class="btn btn--marginRight">
                        Szczegóły oferty
                    </a>
                    <a href="tel:+48564935251" class="btn">
                        Rezerwacja
                    </a>
                </p>
            </div>
        </div>
        <div class="box-item">
            <img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/pokoje-1-2-osobowe.jpg"; ?>" alt="Pokoje 1-2 osobowe ****">
            <div>
                <h3 class="text-normal"><a href="<?php echo get_page_link(get_page_by_title('Pokoje 1-2 osobowe')->ID); ?>">Pokoje 1-2 osobowe <i class="fa fa-star-o gold"></i><i class="fa fa-star-o gold"></i><i class="fa fa-star-o gold"></i><i class="fa fa-star-o gold"></i></a></h3>
                <p><i class="fa fa-bed" aria-hidden="true"></i> 2 jednosobowe <i class="fa fa-user" style="margin-left:20px" aria-hidden="true"></i> max. 2 osoby </p>
                <p><i>Pokój 2-osobowy z dwoma pojedynczymi łóżkami. Pokój ten dysponuje łazienką i jest wyposażony w telewizor LCD z dostępem do kanałów telewizji satelitarnej.</i></p>
                <p>
                    <a href="<?php echo get_page_link(get_page_by_title('Pokoje 1-2 osobowe')->ID); ?>" class="btn btn--marginRight">
                        Szczegóły oferty
                    </a>
                    <a href="tel:+48564935251" class="btn">
                        Rezerwacja
                    </a>
                </p>
            </div>
        </div>
        <div class="box-item">
            <img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/pokoje-2-osobowe.jpg"; ?>" alt="Pokoje 2-osobowe ****">
            <div>
                <h3 class="text-normal"><a href="<?php echo get_page_link(get_page_by_title('Pokoje 2-osobowe')->ID); ?>">Pokoje 2-osobowe <i class="fa fa-star-o gold"></i><i class="fa fa-star-o gold"></i><i class="fa fa-star-o gold"></i><i class="fa fa-star-o gold"></i></a></h3>
                <p><i class="fa fa-bed" aria-hidden="true"></i> 1 podwójne <i class="fa fa-user" style="margin-left:20px" aria-hidden="true"></i> max. 2 osoby </p>
                <p><i>Pokój 2-osobowy z dużym łożem, idealny dla par. Pokój ten dysponuje łazienką i jest wyposażony w telewizor LCD z dostępem do kanałów telewizji satelitarnej.</i></p>
                <p>
                    <a href="<?php echo get_page_link(get_page_by_title('Pokoje 2-osobowe')->ID); ?>" class="btn btn--marginRight">
                        Szczegóły oferty
                    </a>
                    <a href="tel:+48564935251" class="btn">
                        Rezerwacja
                    </a>
                </p>
            </div>
        </div>
        <div class="box-item">
            <img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/pokoje-3-osobowe-3-lozka.jpg"; ?>" alt="Pokoje 3-osobowe ***">
            <div>
                <h3 class="text-normal"><a href="<?php echo get_page_link(get_page_by_title('Pokoje 3-osobowe 3 łóżka')->ID); ?>">Pokoje 3-osobowe <i class="fa fa-star-o gold"></i><i class="fa fa-star-o gold"></i><i class="fa fa-star-o gold"></i></a></h3>
                <p><i class="fa fa-bed" aria-hidden="true"></i> 3 pojedyncze <i class="fa fa-user" style="margin-left:20px" aria-hidden="true"></i> max. 3 osoby </p>
                <p><i>Pokój 3-osobowy z trzema pojedynczymi łóżkami. Pokój ten dysponuje łazienką i jest wyposażony w telewizor LCD z dostępem do kanałów telewizji satelitarnej.</i></p>
                <p>
                    <a href="<?php echo get_page_link(get_page_by_title('Pokoje 3-osobowe 3 łóżka')->ID); ?>" class="btn btn--marginRight">
                        Szczegóły oferty
                    </a>
                    <a href="tel:+48564935251" class="btn">
                        Rezerwacja
                    </a>
                </p>
            </div>
        </div>
        <div class="box-item">
            <img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/pokoje-3-osobowe-2-lozka-2.jpg"; ?>" alt="Pokoje 3-osobowe ***">
            <div>
                <h3 class="text-normal"><a href="<?php echo get_page_link(get_page_by_title('Pokoje 3-osobowe 2 łóżka')->ID); ?>">Pokoje 3-osobowe <i class="fa fa-star-o gold"></i><i class="fa fa-star-o gold"></i><i class="fa fa-star-o gold"></i></a></h3>
                <p><i class="fa fa-bed" aria-hidden="true"></i> 1 podwójne, 1 pojedyncze <i class="fa fa-user" style="margin-left:20px" aria-hidden="true"></i> max. 3 osoby </p>
                <p><i>Pokój 3-osobowy z 1 pojedynczym łóżkiem oraz 1 podwójnym. Pokój ten dysponuje łazienką i jest wyposażony w telewizor LCD z dostępem do kanałów telewizji satelitarnej.</i></p>
                <p>
                    <a href="<?php echo get_page_link(get_page_by_title('Pokoje 3-osobowe 2 łóżka')->ID); ?>" class="btn btn--marginRight">
                        Szczegóły oferty
                    </a>
                    <a href="tel:+48564935251" class="btn">
                        Rezerwacja
                    </a>
                </p>
            </div>
        </div>
    </article>
</section>

<?php
get_footer();
?>
