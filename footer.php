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