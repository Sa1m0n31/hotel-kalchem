<?php
get_header();
?>

<section class="quote quote--pageHeading">
    <article>
        <h1 class="text-normal">Kontakt</h1>
        <blockquote>
            <p>
                Zachęcamy do kontaktu telefonicznego bądź mailowego, gdzie nasz personel chętnie odpowie na Państwa pytania.
            </p>
        </blockquote>
    </article>
</section>
<section>
    <article class="flex f3">
        <div class="flex contact--left">
            <ul class="rslides">
                <li>
                    <img src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/recepcja-2.jpg"; ?>" alt="">
                </li>
            </ul>
        </div>
        <div class="contact--right">
            <div class="contact">
<!--                <h3>Hotel Kalchem</h3>-->
<!--                <p>Brzozie 157, 87-313 Brzozie-->
<!--                    <br> NIP: 874-162-27-10-->
<!--                    <br> REGON: 340931353-->
<!--                    <br> tel. 56 49 352 51</p>-->
<!--                <br>-->

                <h3>Formularz kontaktowy</h3>
                <br>
                <div class="formbox">
                    <?php echo do_shortcode('[contact-form-7 id="e11e76a" title="Formularz 1"]'); ?>
                </div>
            </div>
        </div>
    </article>
</section>

<?php
get_footer();
?>
