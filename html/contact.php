<?php include('header.php'); ?>

<div class="container">
    <!-- okruszki -->

    <div class="contact">
        <div class="contact__wrapper">
            <div class="contact__info">
                <h2 class="contact__title">
                    KONTAKT
                </h2>

                <div class="contact__text">
                    <p>Masz uwagi do zamówienia lub problemy z rejestracją? Zależy Ci na ekspresowej realizacji zamówienia? A może chcesz dowiedzieć się więcej na temat współpracy z Lalous? Z chęcią rozwiejemy wszelkie Twoje wątpliwości i odpowiemy na nurtujące Cię pytania. Wystarczy, że skontaktujesz się z nami, wykorzystując formularz.
                    </p>
                    <p>Żeby być na bieżąco oraz otrzymywać informacje o najnowszych kolekcjach, wyprzedażach i trendach w modzie, koniecznie zapisz się do naszego newslettera. Polub również fanpage marki Lalous na Facebooku i Instagramie, gdzie systematycznie publikujemy zdjęcia projektowanych ubrań.
                        Baw się modą i eksperymentuj z Lalous – polskim producentem wyjątkowej odzieży na każdą okazję.
                    </p>
                    <p>
                        <em>Gorąco zachęcamy do zakupów i kontaktu z nami!</em>
                    </p>
                </div>

                <div class="contact__logo">
                    <img src="<?php dist('img/logo-black.svg'); ?>" alt="">
                </div>
            </div>

            <div class="contact__form">
                <form class="form">
                    <label for="f_name" class="form__label">
                        IMIĘ I NAZWISKO*
                    </label>

                    <div class="form__row">
                        <input type="text" name="f_name" id="f_name" placeholder="Imię" class="form__input" required>
                        <input type="text" name="f_surname" id="f_surname" placeholder="Nazwisko" class="form__input" required>
                    </div>

                    <label for="f_mail" class="form__label">
                        ADRES E-MAIL*
                    </label>

                    <input type="email" name="f_mail" id="f_mail" class="form__input" placeholder="Twój adres e-mail" required>

                    <label for="f_tel" class="form__label">
                        TELEFON*
                    </label>

                    <input type="tel" name="f_tel" id="f_tel" class="form__input" placeholder="Twój numer telefonu" required>

                    <label for="f_message" class="form__label">
                        WIADOMOŚĆ*
                    </label>

                    <textarea name="f_message" id="f_message" class="form__input form__input--textarea" placeholder="Treść wiadomości..." required></textarea>

                    <label for="f_terms" class="checkbox__wrapper">
                        <div class="checkbox">
                            <input type="checkbox" name="f_terms" id="f_terms" required>
                            <div class="checkbox__checked"></div>
                        </div>
                        <span>Wyrażam zgodę na przetwarzanie podanych w formularzu danych osobowych zgodnie z ustawą o ochronie danych osobowych w celu kontaktu. Zostałem poinformowany, że podanie danych jest dobrowolne, ale konieczne do udzielenia odpowiedzi na zapytanie oraz, że przysługuje mi prawo dostępu do danych, ich zmiany, usunięcia i zaprzestania przetwarzania. Administratorem danych osobowych jest DORIANO AISSATOU BEATA MADEJSKA adres biura: ul. Lutza 26 05-092 Łomianki REGON 010850593, NIP 118-006-98-72.</span>
                    </label>

                    <button type="submit" class="form__submit">
                        <span>WYŚLIJ WIADOMOŚĆ</span>
                        <?php svg('form_arr.svg'); ?>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="contact">
        <div class="contact__wrapper contact__wrapper--map">
            <h2 class="contact__title">
                PUNKTY SPRZEDAŻY
            </h2>

            <?php for ($i = 1; $i <= 2; $i++) : ?>
                <div class="contact__map map">
                    <div class="map__label map-label">
                        <h3 class="map-label__title">
                            NAZWA SKLEPU
                        </h3>

                        <div class="line line--black"></div>

                        <div class="map-label__row">
                            <h4 class="map-label__sub-title">
                                Adres:
                            </h4>

                            <div class="map-label__text">
                                12-345, Miasto <br>
                                ul. Przykładowa 12/3A
                            </div>
                        </div>

                        <div class="line"></div>

                        <div class="map-label__row">
                            <h4 class="map-label__sub-title">
                                NUMER TELEFONU:
                            </h4>

                            <div class="map-label__text">
                                <a href="tel:+48123456789">+48 123 456 789</a>
                            </div>
                        </div>

                        <div class="line"></div>

                        <div class="map-label__row">
                            <h4 class="map-label__sub-title">
                                ADRES E-MAIL:
                            </h4>

                            <div class="map-label__text">
                                <a href="mailto:adres@email.com">adres@email.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="map__container">
                        <img src="<?php asset('map.png'); ?>" alt="">
                    </div>
                </div>
            <?php endfor; ?>

        </div>
    </div>
</div>

<?php include('footer.php'); ?>