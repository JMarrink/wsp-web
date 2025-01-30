<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WatersportAlmanak</title>
    <script src="https://kit.fontawesome.com/4a2ea5bef2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

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
        <button class="header__mobile-menu-close"><i class="fa-regular fa-xmark"></i></button>
        <div class="header__mobile-menu-list">
            <div class="header__mobile-menu-item">
                <a href="" class="header__mobile-menu-link">Varen en veiligheid</a>
            </div>
            <div class="header__mobile-menu-item">
                <a href="" class="header__mobile-menu-link">Watersportwinkel</a>
            </div>
            <div class="header__mobile-menu-item">
                <a href="" class="header__mobile-menu-link">Vaarroutes</a>
            </div>
            <div class="header__mobile-menu-item">
                <a href="" class="header__mobile-menu-link">Jachthavens</a>
            </div>
            <div class="header__mobile-menu-item">
                <a href="" class="header__mobile-menu-link">Getijden</a>
            </div>
        </div>
    </section>
    </header>
    <main>
    </main>
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