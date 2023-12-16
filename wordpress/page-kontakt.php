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
                <form class="formbox" action="formularzajax2.html" method="POST" id="conform" name="conform">
                    <div class="flex f1">
                        <div class="form-group"><label class="control-label" for="conname">Imię i nazwisko</label> <input id="conname" class="form-control" name="conname" required="required" type="text" value=""/></div>
                        <div class="form-group"><label class="control-label" for="conemail">Adres email *</label> <input id="conemail" class="form-control" name="conemail" required="required" type="email" value=""/></div>
                        <div class="form-group"><label class="control-label" for="contel">Telefon kontaktowy *</label> <input id="ccontel" class="form-control" name="contel" required="required" type="tel" value=""/></div>
                        <div class="form-group textarea"><label class="control-label" for="context">Treść wiadomości:</label> <textarea id="context" class="form-control" name="context" rows="5" value=""></textarea></div>
                        <div><br><input class="btn" name="con" id="con" type="submit" value="Wyślij wiadomość"></div>
                    </div>
                </form>
            </div>
        </div>
    </article>
</section>

<?php
get_footer();
?>
