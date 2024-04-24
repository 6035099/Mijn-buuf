<?php include "lib/header.php" ?>

<body>
    <main>
        <article class="info">
            <section class="contact-gegevens">
                <h1>Contactgegevens</h1>
                <p>E-mailadres:</p>
                <p>MijnBuuf@gmail.com</p>

                <p>Telefoonnummer:</p>
                <p>+31 612345749</p>

                <p>Waar?: </p>
                <p>Bleiswijkseweg 37E, 2712 PB Zoetermeer</p>
            </section>

            <section class="Contactin">
                <img src="img/Contact/contactin.png" alt="Contacten">
            </section>
        </article>

        <section class="social">
            <img src="img/Contact/insta.png" alt="Instagram">
            <img src="img/Contact/face.png" alt="Facebook">
            <img src="img/Contact/yt.png" alt="Youtube">
        </section>



        <section class="contact-formulier">
            <h1>Contactformulier</h1>
            <p>We reageren binnen 24 uur</p>
            <form action="#">
                <label for="naam"><b>Naam:</b></label>
                <input type="text" id="naam" name="naam" required>

                <label for="email"><b>E-mailadres:</b></label>
                <input type="email" id="email" name="email" required>

                <label for="Tele"><b>Telefoonnummer:</b></label>
                <input type="Tele" id="Tele" name="Tele" required>

                <label for="onderwerp"><b>Onderwerp:</b></label>
                <input type="text" id="onderwerp" name="onderwerp" required>

                <label for="bericht"><b>Bericht:</b></label>
                <textarea id="bericht" name="bericht" required></textarea>

                <button type="submit"><b>Verzenden</b></button>
            </form>
        </section>
    </main>
</body>
<?php include "lib/footer.php" ?>