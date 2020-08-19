<!DOCTYPE html>
<html lang="en">
<?php include('functions.php'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lalous</title>
    <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="../dist/build-style.css">
</head>

<body>
    <main>
        <header id="header" class="header">
            <div class="header__background"></div>
            <div class="container">
                <div class="header__wrapper">
                    <div class="header__group">
                        <h1>
                            <a href="http://localhost/lalous-dev/">
                                <img class="logo img-responsive" src="../dist/img/logo-large.jpg" alt="Lalous Dev">
                            </a>
                        </h1>
                    </div>
                    <div class="header__group">
                        <!-- begin module:ps_mainmenu/ps_mainmenu.tpl -->
                        <!-- begin C:\xampp\htdocs\lalous-dev/themes/websitestyle/modules/ps_mainmenu/ps_mainmenu.tpl -->
                        <div class="header__menu js-top-menu" id="_desktop_top_menu">
                            <ul class="menu__list" id="top-menu" data-depth="0">
                                <li class="menu-item link" id="lnk-o-nas">
                                    <a class="menu-dropdown-item" href="http://" data-depth="0">
                                        O nas
                                    </a>
                                </li>
                                <li class="menu-item link" id="lnk-e-sklep">
                                    <a class="menu-dropdown-item" href="http://" data-depth="0">
                                        E-sklep
                                    </a>

                                    <ul class="sub-menu sub-menu--e_sklep">
                                        <li class="sub-menu__item sub-menu__item--inner_list">
                                            <div class="menu__columns">
                                                <ul class="sub-menu_list">
                                                    <?php for ($i = 1; $i <= 7; $i++) : ?>
                                                        <li class="sub-menu_list__item">
                                                            <a href="menu-dropdown-item">
                                                                Kombinezony
                                                            </a>
                                                        </li>
                                                    <?php endfor; ?>
                                                </ul>
                                                <ul class="sub-menu_list">
                                                    <?php for ($i = 1; $i <= 7; $i++) : ?>
                                                        <li class="sub-menu_list__item">
                                                            <a href="menu-dropdown-item">
                                                                Marynarki
                                                            </a>
                                                        </li>
                                                    <?php endfor; ?>
                                                </ul>
                                                <ul class="sub-menu_list sub-menu_list--with_arr">
                                                    <?php for ($i = 1; $i <= 3; $i++) : ?>
                                                        <li class="sub-menu_list__item">
                                                            <a href="menu-dropdown-item">
                                                                Bestsellery
                                                            </a>
                                                        </li>
                                                    <?php endfor; ?>
                                                </ul>
                                            </div>
                                        </li>

                                        <?php for ($i = 1; $i <= 3; $i++) : ?>
                                            <li class="sub-menu__item">
                                                <a href="" class="max_width">
                                                    <img class="sub-menu__img" src="<?php asset('blog--menu.png'); ?>" alt="">
                                                </a>

                                                <a href="" class="link_std link_std--sub-menu">
                                                    Quisque pellentesque elementum...
                                                </a>
                                            </li>
                                        <?php endfor; ?>
                                    </ul>
                                </li>
                                <li class="menu-item link" id="lnk-blog">
                                    <a class="menu-dropdown-item" href="http://" data-depth="0">
                                        Blog
                                    </a>

                                    <ul class="sub-menu sub-menu--blog">
                                        <?php for ($i = 1; $i <= 4; $i++) : ?>
                                            <li class="sub-menu__item">
                                                <a class="max_width" href="">
                                                    <img class="sub-menu__img" src="<?php asset('blog--menu.png'); ?>" alt="">
                                                </a>
                                                
                                                <a href="" class="link_std link_std--sub-menu">
                                                    Quisque pellentesque elementum...
                                                </a>
                                            </li>
                                        <?php endfor; ?>
                                    </ul>
                                </li>
                                <li class="menu-item link" id="lnk-wspolpraca">
                                    <a class="menu-dropdown-item" href="http://" data-depth="0">
                                        Współpraca
                                    </a>
                                </li>
                                <li class="menu-item link" id="lnk-butiki-partnerskie">
                                    <a class="menu-dropdown-item" href="http://" data-depth="0">
                                        Butiki partnerskie
                                    </a>
                                </li>
                                <li class="menu-item link" id="lnk-kontakt">
                                    <a class="menu-dropdown-item" href="http://" data-depth="0">
                                        Kontakt
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end C:\xampp\htdocs\lalous-dev/themes/websitestyle/modules/ps_mainmenu/ps_mainmenu.tpl -->
                        <!-- end module:ps_mainmenu/ps_mainmenu.tpl -->
                        <div id="mobile_top_menu_wrapper" class="row hidden-md-up header__mobile">
                            <div class="js-top-menu mobile" id="_mobile_top_menu">
                                <ul class="menu__list" id="top-menu" data-depth="0">
                                    <li class="menu-item link" id="lnk-o-nas">
                                        <a class="menu-dropdown-item" href="http://" data-depth="0">
                                            O nas
                                        </a>
                                    </li>
                                    <li class="menu-item link" id="lnk-e-sklep">
                                        <a class="menu-dropdown-item" href="http://" data-depth="0">
                                            E-sklep
                                        </a>
                                    </li>
                                    <li class="menu-item link" id="lnk-blog">
                                        <a class="menu-dropdown-item" href="http://" data-depth="0">
                                            Blog
                                        </a>

                                        <ul class="sub-menu sub-menu--blog">
                                            <?php for ($i = 1; $i <= 4; $i++) : ?>
                                                <li class="sub-menu__item sub-menu__item--blog">
                                                    <img class="sub-menu__item__img" src="<?php asset('blog--menu.png'); ?>" alt="">
                                                    <a href="" class="link_std link_std--sub-menu">
                                                        Quisque pellentesque elementum...
                                                    </a>
                                                </li>
                                            <?php endfor; ?>
                                        </ul>
                                    </li>
                                    <li class="menu-item link" id="lnk-wspolpraca">
                                        <a class="menu-dropdown-item" href="http://" data-depth="0">
                                            Współpraca
                                        </a>
                                    </li>
                                    <li class="menu-item link" id="lnk-butiki-partnerskie">
                                        <a class="menu-dropdown-item" href="http://" data-depth="0">
                                            Butiki partnerskie
                                        </a>
                                    </li>
                                    <li class="menu-item link" id="lnk-kontakt">
                                        <a class="menu-dropdown-item" href="http://" data-depth="0">
                                            Kontakt
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header__other_options">
                                <!-- begin module:ws_signin/ws_signin.tpl -->
                                <!-- begin C:\xampp\htdocs\lalous-dev/modules/ws_signin/ws_signin.tpl -->
                                <a href="http://localhost/lalous-dev/pl/moje-konto" title="Zaloguj się do swojego konta klienta" rel="nofollow" class="header__link header__link--create-account">
                                    <span class="hidden-sm-down">Utw&oacute;rz konto</span>
                                </a>
                                <!-- end C:\xampp\htdocs\lalous-dev/modules/ws_signin/ws_signin.tpl -->
                                <!-- end module:ws_signin/ws_signin.tpl -->
                                <button type="button" class="header__link-icon">
                                    <span class="link-icon__icon link-icon__icon--search"></span>
                                </button>
                                <a class="header__link-icon" href="">
                                    <span class="link-icon__icon link-icon__icon--account"></span>
                                </a>
                                <!-- begin module:ws_shoppingcart/ws_shoppingcart.tpl -->
                                <!-- begin C:\xampp\htdocs\lalous-dev/modules/ws_shoppingcart/ws_shoppingcart.tpl -->
                                <a class="header__link-icon" rel="nofollow" href="//localhost/lalous-dev/pl/koszyk?action=show" id="blockcart-wrapper">
                                    <span class="link-icon__icon link-icon__icon--cart"></span>
                                    <span class="link-icon__text">0</span>
                                </a><!-- end C:\xampp\htdocs\lalous-dev/modules/ws_shoppingcart/ws_shoppingcart.tpl -->
                                <!-- end module:ws_shoppingcart/ws_shoppingcart.tpl -->
                            </div>
                            <div class="js-top-menu-bottom">
                                <div id="_mobile_currency_selector"></div>
                                <div id="_mobile_language_selector"></div>
                                <div id="_mobile_contact_link"></div>
                            </div>
                        </div>
                    </div>
                    <div class="header__group">
                        <div class="header__other_options">
                            <!-- begin module:ws_signin/ws_signin.tpl -->
                            <!-- begin C:\xampp\htdocs\lalous-dev/modules/ws_signin/ws_signin.tpl -->
                            <a href="http://localhost/lalous-dev/pl/moje-konto" title="Zaloguj się do swojego konta klienta" rel="nofollow" class="header__link header__link--create-account">
                                <span class="hidden-sm-down">Utw&oacute;rz konto</span>
                            </a>
                            <!-- end C:\xampp\htdocs\lalous-dev/modules/ws_signin/ws_signin.tpl -->
                            <!-- end module:ws_signin/ws_signin.tpl -->
                            <button type="button" class="header__link-icon">
                                <span class="link-icon__icon link-icon__icon--search"></span>
                            </button>
                            <a class="header__link-icon" href="">
                                <span class="link-icon__icon link-icon__icon--account"></span>
                            </a>
                            <!-- begin module:ws_shoppingcart/ws_shoppingcart.tpl -->
                            <!-- begin C:\xampp\htdocs\lalous-dev/modules/ws_shoppingcart/ws_shoppingcart.tpl -->
                            <a class="header__link-icon" rel="nofollow" href="//localhost/lalous-dev/pl/koszyk?action=show" id="blockcart-wrapper">
                                <span class="link-icon__icon link-icon__icon--cart"></span>
                                <span class="link-icon__text">0</span>
                            </a><!-- end C:\xampp\htdocs\lalous-dev/modules/ws_shoppingcart/ws_shoppingcart.tpl -->
                            <!-- end module:ws_shoppingcart/ws_shoppingcart.tpl -->
                        </div>
                        <div class="header__hamburger">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 30">
                                <path d="M0,5H62c13,0,6,28-4,18L35,0" />
                                <path d="M0,15H70" />
                                <path d="M0,25H62c13,0,6-28-4-18L35,30" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </header>