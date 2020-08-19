<?php include('header.php'); ?>

<div class="container">
    <!-- "okruszki" -->

    <?php for ($i = 1; $i <= 3; $i++) : ?>
        <div class="poster <?php if ($i % 2 == 0) {
                                echo 'poster--rev';
                            } ?>">
            <div class="poster__wrapper">
                <div class="poster__img_content">
                    <img class="poster__main_img" src="<?php asset('about.png'); ?>" alt="">
                </div>

                <div class="poster__description description">
                    <div class="description__top">
                        <img src="<?php asset('about.png'); ?>" alt="">
                        <div class="description__title">
                            O MARCE <br>
                            LALOUS
                        </div>
                    </div>

                    <div class="description__center">
                        <div class="text">
                            <p>Lalous jest polskim producentem odzieży dla kobiet ceniących sobie niepowtarzalny styl, oryginalność oraz wysoką jakość w połączeniu z przystępną ceną. Jako firma z doświadczeniem w działalności na polskim i europejskim rynku na bieżąco oraz dynamicznie dostosowujemy się i wyznaczamy nowe trendy w szeroko pojętej branży mody. Wszystko po to, by zagwarantować naszym klientkom dostęp do wyjątkowych ubrań o unikalnym charakterze.
                            </p>
                            <p>Jednym z czynników, który nas wyróżnia spośród innych producentów, jest posiadanie własnej szwalni, dzięki czemu jesteśmy w stanie w sposób ciągły kontrolować proces produkcyjny ze szczególnym uwzględnieniem bardzo wysokiej jakości wykonania jako znaku firmowego naszych produktów. Gwarantem powyższego jest nowoczesny park maszynowy oraz wysoko wykwalifikowana i doświadczona kadra profesjonalistów zaangażowanych w cały proces produkcyjny.
                            </p>
                            <p>Potwierdzeniem wysokiej jakości oferowanych przez nas produktów są rekomendacje naszych klientów, którzy stale powracają do Lalous w poszukiwaniu kolejnych kolekcji oryginalnej oraz stylowej odzieży na każdą okazję.
                            </p>
                        </div>
                    </div>

                    <div class="description__bottom">
                        <div class="description__column">
                            <div class="description__special_text">
                                LALOUS
                            </div>
                            <div class="pink_line"></div>
                        </div>
                        <img src="<?php asset('about.png'); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>

<?php include('footer.php'); ?>