<?php include "lib/header.php" ?>

<body>
    <main>
        <article class="info">
            <section class="contact-gegevens">
                <h2>Contactgegevens</h2>
                <p>E-mailadres: </b> MijnBuuf@gmail.com</p>
                <p>Telefoonnummer: </b> +31 612345749</p>
                <p>Waar?:</b> Bleiswijkseweg 37E, 2712 PB Zoetermeer</p>
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
            <h2>Contactformulier</h2>
            <p>We reageren binnen 24 uur</p>
            <form action="#">
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam" required>

                <label for="email">E-mailadres:</label>
                <input type="email" id="email" name="email" required>

                <label for="Tele">Telefoonnummer:</label>
                <input type="Tele" id="Tele" name="Tele" required>

                <label for="onderwerp">Onderwerp:</label>
                <input type="text" id="onderwerp" name="onderwerp" required>

                <label for="bericht">Bericht:</label>
                <textarea id="bericht" name="bericht" required></textarea>

                <button type="submit">Verzenden</button>
            </form>
        </section>
    </main>
</body>
<?php include "lib/footer.php" ?>