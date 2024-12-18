<?php include "lib/header.php" ?>

<body>
    <main>
        <article class="info">
            <section class="contact-gegevens">
                <h1>Contactgegevens</h1>


                <section class="contact_in">
                    <p class="contact_up">E-mailadres</p>
                    <p class="contact_up_under">MijnBuuf@gmail.com</p>
                </section>

                <section class="contact_in">
                    <p class="contact_up">Telefoonnummer</p>
                    <p class="contact_up_under">+31 612345749</p>
                </section>

                <section class="contact_in">
                    <p class="contact_up">Waar? </p>
                    <p class="contact_up_under">Bleiswijkseweg 37E, 2712 PB Zoetermeer</p>
                </section>

                <section class="icons_contact">
                    <i class="fa-brands fa-facebook" style="color: #28cdac;"></i>
                    <i class="fa-brands fa-instagram" style="color: #28cdac;"></i>
                    <i class="fa-brands fa-youtube" style="color: #28cdab;"></i>
                </section>



            </section>

            <section class="Contactin">
                <img class="img_contact" src="img/contact/contactin.png" alt="">
            </section>
        </article>



        <section class="contact-formulier">
            <h1>Contactformulier</h1>
            <p>We reageren binnen 24 uur</p>
            <form action="#">
                <label for="naam"><b>Naam:</b></label>
                <input type="text" id="naam" name="naam" required placeholder="Hansd de Wit">

                <label for="email"><b>E-mailadres:</b></label>
                <input type="email" id="email" name="email" required placeholder="info@gmail.com">

                <label for="number"><b>Telefoonnummer</b></label>
                <input type="number" id="number" name="number" />

                <label for="onderwerp"><b>Onderwerp:</b></label>
                <input type="text" id="onderwerp" name="onderwerp" required>

                <label for="bericht"><b>Bericht:</b></label>
                <textarea id="bericht" name="bericht" required></textarea>

                <button class="verzend_contact" type="submit"><b>Verzenden</b></button>
            </form>
        </section>
    </main>
</body>
<?php include "lib/footer.php" ?>