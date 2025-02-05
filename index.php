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
            <a class="header__top-bar-link" href="#">
                <div class="header__top-bar-list d-flex">
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
                </div>
            </a>
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
    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const heroSwiper = new Swiper('#callout-swiper', {
            slidesPerView: "auto", // Zorgt ervoor dat slides hun natuurlijke breedte behouden
      spaceBetween: 60, // Ruimte tussen de slides
      centeredSlides: false, // Voorkomt dat de slides gecentreerd worden
    //   freeMode: true, // Zorgt voor natuurlijk scrollen
    //   watchOverflow: true, // Voorkomt dat Swiper scrollbaar is als er te weinig slides zijn
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