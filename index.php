<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WatersportAlmanak</title>
    <script src="https://kit.fontawesome.com/4a2ea5bef2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="/assets/css/core.min.css">
</head>
<body> 
<div class="header__overlay"></div> <!-- Donkere achtergrond -->
<header class="header">
    <section class="header__top-bar">
        <div class="container">
            <div class="header__top-bar-list d-flex">
                <a class="header__top-bar-link" href="#">
                    <div class="header__top-bar-item">
                        Friese kust:
                    </div>
                    <div class="header__top-bar-item header__top-bar-item--temp">
                        <i class="fa-solid fa-temperature-three-quarters"></i> 24º
                    </div>
                    <div class="header__top-bar-item header__top-bar-item--wind">
                        <i class="fa-solid fa-windsock"></i> ZW 3
                    </div>
                    <div class="header__top-bar-item header__top-bar-item--water-temp">
                        <i class="fa-solid fa-oil-temperature"></i> 19,3º
                    </div>
                    <div class="header__top-bar-item header__top-bar-item--maximize">
                        <i class="fa-thin fa-maximize"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="header__nav">
        <div class="container d-flex">
            <div class="header__logo">
                <a href="">
                    <img src="/assets/images/wsp-logo-wit.webp" alt="">
                </a>
            </div>
            <nav>
                <div class="header__nav-item header__nav-item--mobile">
                    <a href="" class="header__nav-link">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                </div>
            </nav>
            <div class="header__nav-list">
                <div class="header__nav-item">
                    <a href="" class="header__nav-link">Varen en veiligheid</a>
                </div>
                <div class="header__nav-item">
                    <a href="" class="header__nav-link">Watersportwinkel</a>
                </div>
                <div class="header__nav-item">
                    <a href="" class="header__nav-link">Vaarroutes</a>
                </div>
                <div class="header__nav-item">
                    <a href="" class="header__nav-link">Jachthavens</a>
                </div>
                <div class="header__nav-item">
                    <a href="" class="header__nav-link">Getijden</a>
                </div>
            </div>
            <div class="header__nav-search">
                <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>
        </div>
    </section>
    <!-- Mobiel menu (verborgen standaard) -->
    <section class="header__mobile-menu">
        <div class="header__mobile-menu-header">
            <button class="header__mobile-menu-close">
                <i class="fa-regular fa-xmark"></i>
            </button>
        </div>
        <div class="header__mobile-menu-list">
            <div class="header__mobile-menu-item">
                <a href="" class="header__mobile-menu-link">Varen en veiligheid <i class="fa-solid fa-chevron-down"></i></a>
            </div>
            <div class="header__mobile-menu-item">
                <a href="" class="header__mobile-menu-link">Watersportwinkel <i class="fa-solid fa-chevron-down"></i></a>
            </div>
            <div class="header__mobile-menu-item">
                <a href="" class="header__mobile-menu-link">Vaarroutes <i class="fa-solid fa-chevron-down"></i></a>
            </div>
            <div class="header__mobile-menu-item">
                <a href="" class="header__mobile-menu-link">Jachthavens <i class="fa-solid fa-chevron-down"></i></a>
            </div>
            <div class="header__mobile-menu-item">
                <a href="" class="header__mobile-menu-link">Getijden <i class="fa-solid fa-chevron-down"></i></a>
            </div>
        </div>
    </section>
</header>
    <main>
        <section class="hero">
            <div class="container">
                <div class="hero__content">
                    <h1 class="hero__title">WatersportAlmanak</h1>
                    <h2 class="hero__subtitle">Dé gids voor alle watersporters</h2>
                    <p class="hero__description">
                        WatersportAlmanak is de grootste informatiebron voor watersporters in Nederland. Op de website vindt u zeer veel informatie over varen in het algemeen, vaarregels, jachthavens, vaarroutes en natuurlijk de getijdentabellen van geheel Nederland.
                    </p>
                    <div class="hero__buttons">
                        <a class="button button-primary" href="">Watersport winkel</a>
                        <a class="button button-outline-light" href="">Getijden app</a>
                    </div>
                </div>
                <div class="callout-cards">
                    <!-- Slider main container -->
                    <div class="swiper" id="callout-swiper">
                    <div class="swiper__controls">
                        <div class="swiper__controls-prev"><i class="fa-solid fa-arrow-left"></i></div>
                        <div class="swiper__controls-next"><i class="fa-solid fa-arrow-right"></i></div>
                    </div>
                    <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide card">
                                <h4 class="card__title">Watersport winkel</h4>
                                <p class="card__description">
                                    Wij leveren uitsluitend watersportartikelen waarvan we zelf vinden dat ze aan onze kwaliteitseisen voldoen
                                </p>
                                <a href="" class="card__link">
                                    Bekijk het aanbod <i class="fa-solid fa-arrow-right card__icon"></i>
                                </a>
                            </div>
                            <div class="swiper-slide card">
                                <h4 class="card__title">Watersport winkel</h4>
                                <p class="card__description">
                                    Wij leveren uitsluitend watersportartikelen waarvan we zelf vinden dat ze aan onze kwaliteitseisen voldoen
                                </p>
                                <a href="" class="card__link">
                                    Bekijk het aanbod <i class="fa-solid fa-arrow-right card__icon"></i>
                                </a>
                            </div>
                            <div class="swiper-slide card">
                                <h4 class="card__title">Watersport winkel</h4>
                                <p class="card__description">
                                    Wij leveren uitsluitend watersportartikelen waarvan we zelf vinden dat ze aan onze kwaliteitseisen voldoen
                                </p>
                                <a href="" class="card__link">
                                    Bekijk het aanbod <i class="fa-solid fa-arrow-right card__icon"></i>
                                </a>
                            </div>
                            <div class="swiper-slide card">
                                <h4 class="card__title">Watersport winkel</h4>
                                <p class="card__description">
                                    Wij leveren uitsluitend watersportartikelen waarvan we zelf vinden dat ze aan onze kwaliteitseisen voldoen
                                </p>
                                <a href="" class="card__link">
                                    Bekijk het aanbod <i class="fa-solid fa-arrow-right card__icon"></i>
                                </a>
                            </div>
                            <div class="swiper-slide card">
                                <h4 class="card__title">Watersport winkel</h4>
                                <p class="card__description">
                                    Wij leveren uitsluitend watersportartikelen waarvan we zelf vinden dat ze aan onze kwaliteitseisen voldoen
                                </p>
                                <a href="" class="card__link">
                                    Bekijk het aanbod <i class="fa-solid fa-arrow-right card__icon"></i>
                                </a>
                            </div>
                            <div class="swiper-slide card">
                                <h4 class="card__title">Watersport winkel</h4>
                                <p class="card__description">
                                    Wij leveren uitsluitend watersportartikelen waarvan we zelf vinden dat ze aan onze kwaliteitseisen voldoen
                                </p>
                                <a href="" class="card__link">
                                    Bekijk het aanbod <i class="fa-solid fa-arrow-right card__icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="paragraph paragraph--img paragraph--img-left">
            <div class="container">
                <div class="paragraph__wrapper">
                    <div class="paragraph__content">
                        <h2 class="paragraph__title">Getijden app</h2>
                        <div class="paragraph__description">
                            <p>De Getijden App biedt een schat aan informatie over de getijden op locaties over de hele wereld. Of je nu een ervaren zeeman bent of gewoon geïnteresseerd bent in de natuurlijke ritmes van de zee, deze app heeft voor ieder wat wils. Hier zijn enkele opmerkelijke kenmerken van deze app:</p>
                            <p>1. Nauwkeurige Getijdeninformatie: De app haalt real-time getijdeninformatie op voor duizenden locaties wereldwijd, zodat je altijd op de hoogte bent van de actuele getijdenstanden, zowel vooruit als achteruit in de tijd.</p>
                            <p>2. Gedetailleerde Grafieken: Grafische weergaven van getijdenpatronen en voorspellingen helpen je om de eb en vloed op een visuele manier te begrijpen. Hierdoor kun je gemakkelijk plannen wanneer het beste moment is om te gaan vissen, surfen of gewoon te genieten van het strand.</p>
                            <p>3. Notificaties: Stel aangepaste meldingen in, zodat je op de hoogte wordt gebracht wanneer er belangrijke veranderingen in de getijden optreden. Dit is handig voor mensen die afhankelijk zijn van het getij bij hun dagelijkse activiteiten.</p>
                        </div>
                    </div>
                    <div class="paragraph__img">
                        <img src="/assets/images/app-img.webp" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="paragraph paragraph--img paragraph--img-right" style="background-color: #F9F9FB;">
            <div class="container">
                <div class="paragraph__wrapper">
                    <div class="paragraph__content">
                        <h2 class="paragraph__title">Getijden app</h2>
                        <div class="paragraph__description">
                            <p>De Getijden App biedt een schat aan informatie over de getijden op locaties over de hele wereld. Of je nu een ervaren zeeman bent of gewoon geïnteresseerd bent in de natuurlijke ritmes van de zee, deze app heeft voor ieder wat wils. Hier zijn enkele opmerkelijke kenmerken van deze app:</p>
                            <p>1. Nauwkeurige Getijdeninformatie: De app haalt real-time getijdeninformatie op voor duizenden locaties wereldwijd, zodat je altijd op de hoogte bent van de actuele getijdenstanden, zowel vooruit als achteruit in de tijd.</p>
                            <p>2. Gedetailleerde Grafieken: Grafische weergaven van getijdenpatronen en voorspellingen helpen je om de eb en vloed op een visuele manier te begrijpen. Hierdoor kun je gemakkelijk plannen wanneer het beste moment is om te gaan vissen, surfen of gewoon te genieten van het strand.</p>
                            <p>3. Notificaties: Stel aangepaste meldingen in, zodat je op de hoogte wordt gebracht wanneer er belangrijke veranderingen in de getijden optreden. Dit is handig voor mensen die afhankelijk zijn van het getij bij hun dagelijkse activiteiten.</p>
                        </div>
                    </div>
                    <div class="paragraph__img">
                        <img src="/assets/images/app-img.webp" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <section class="footer__mailchimp">
            <div class="container">
                <div class="footer__mailchimp-wrapper">
                    <div class="footer__mailchimp-content">
                        <h2 class="footer__mailchimp-title">Schrijf je in voor onze nieuwsbrief</h2>
                        <p class="footer__mailchimp-description">We versturen uitsluitend nieuwsbrieven als we ook echt iets te melden hebben. <br>Dit is ook de reden waarom onze nieuwsbrieven onregelmatig verschijnen.</p>
                    </div>
                    <div class="footer__mailchimp-form">
                        <form action="" method="post">
                            <input type="email" class="footer__mailchimp-input" placeholder="Vul hier je e-mailadres in">
                            <button type="submit" class="footer__mailchimp-button button button-primary">Schrijf je nu in</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer__main">
            <div class="container d-flex">
                <div class="footer__main-item">
                    <h3>Direct naar</h3>
                    <ul class="menu">
                        <li class="menu-item"><a href="">Getijden</a></li>
                        <li class="menu-item"><a href="">Getijden app</a></li>
                        <li class="menu-item"><a href="">Vaarroutes</a></li>
                        <li class="menu-item"><a href="">Jachthavens</a></li>
                        <li class="menu-item"><a href="">Veiligheid</a></li>
                        <li class="menu-item"><a href="">Watersportwinkel</a></li>
                    </ul>
                </div>
                <div class="footer__main-item">
                    <h3>Over watersportalmanak</h3>
                    <ul class="menu">
                        <li class="menu-item"><a href="">Getijden</a></li>
                        <li class="menu-item"><a href="">Getijden app</a></li>
                        <li class="menu-item"><a href="">Vaarroutes</a></li>
                        <li class="menu-item"><a href="">Jachthavens</a></li>
                        <li class="menu-item"><a href="">Veiligheid</a></li>
                        <li class="menu-item"><a href="">Watersportwinkel</a></li>
                    </ul>
                </div>
                <div class="footer__main-item">
                    <h3>Watersport winkel</h3>
                    <ul class="menu">
                        <li class="menu-item"><a href="">Getijden</a></li>
                        <li class="menu-item"><a href="">Getijden app</a></li>
                        <li class="menu-item"><a href="">Vaarroutes</a></li>
                        <li class="menu-item"><a href="">Jachthavens</a></li>
                        <li class="menu-item"><a href="">Veiligheid</a></li>
                        <li class="menu-item"><a href="">Watersportwinkel</a></li>
                    </ul>
                </div>
                <div class="footer__main-item">
                    <h3>Contact</h3>
                    <ul class="menu">
                        <li class="menu-item"><a href="">Getijden</a></li>
                        <li class="menu-item"><a href="">Getijden app</a></li>
                        <li class="menu-item"><a href="">Vaarroutes</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="footer__bottom">
            <div class="container d-flex">
                <div class="footer__bottom-copy">© 2025 <a href="">Mucho Media</a></div>
                <div class="footer__bottom-menu">
                    <ul class="menu">
                        <li class="menu-item"><a href="">Voorwaarden</a></li>
                        <li class="menu-item"><a href="">Voorwaarden</a></li>
                        <li class="menu-item"><a href="">Voorwaarden</a></li>
                        <li class="menu-item"><a href="">Voorwaarden</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const heroSwiper = new Swiper('#callout-swiper', {
            slidesPerView: "auto", // Zorgt ervoor dat slides hun natuurlijke breedte behouden
            spaceBetween: 60, // Ruimte tussen de slides
            centeredSlides: false, // Voorkomt dat de slides gecentreerd worden
            navigation: {
                nextEl: ".swiper__controls-next",
                prevEl: ".swiper__controls-prev",
            },
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuButton = document.querySelector(".header__nav-item--mobile .header__nav-link");
            const mobileMenu = document.querySelector(".header__mobile-menu");
            const closeButton = document.querySelector(".header__mobile-menu-close");
            const overlay = document.querySelector(".header__overlay"); // BEM-correcte class

            // Functie om menu te openen
            function openMenu() {
                if (mobileMenu && overlay) {
                    mobileMenu.classList.add("active");
                    overlay.classList.add("active");
                }
            }

            // Functie om menu te sluiten
            function closeMenu() {
                if (mobileMenu && overlay) {
                    mobileMenu.classList.remove("active");
                    overlay.classList.remove("active");
                }
            }

            // Event listeners
            if (menuButton) {
                menuButton.addEventListener("click", function (e) {
                    e.preventDefault();
                    openMenu();
                });
            }

            if (closeButton) {
                closeButton.addEventListener("click", closeMenu);
            }

            if (overlay) {
                overlay.addEventListener("click", closeMenu); // Sluit als je op de overlay klikt
            }
        });
    </script>
</body>
</html>