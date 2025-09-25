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