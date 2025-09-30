<?php require_once '../header.php'; ?>
<style>
    main {
        /* background-color: #FFF; */
        min-height: 100vh;
    }
</style>
<main>
    <section class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#">Jachthavens</a></li>
                <li><a href="#">Hindeloopen</a></li>
            </ul>
        </div>
    </section>
    <section class="page__title">
        <div class="container">
            <h1>
                Hindeloopen
            </h1>
            <div class="port-rating">
                
            </div>
        </div>
    </section>
    <section class="page__port content-with-sidebar">
        <div class="container">
            <div class="page__container with-sidebar">
                <section class="page__ports-intro">
                    <p>
                        Hindeloopen is een mooie uitvalsbasis naar de eilanden en naar bestemmingen richting het zuiden. Maar ook een prima tussenstation voor passanten. Vooral gezinnen met kinderen kunnen hier uitstekend terecht voor een of meer dagen. Veel faciliteiten voor de kinderen en direct gelegen aan het pittoreske Hindeloopen, daardoor geliefd bij toeristen op het land én bij de watersport.
                    </p>
                </section>
                <section class="relatedweather">
                    <div class="relatedweather__container">
                        <div class="relatedweather__now">
                            <div class="relatedweather__title">
                                Het weer in <span class="relatedweather__location">Hindeloopen</span>
                                <div class="relatedweather__now-details-container">
                                    <div class="relatedweather__current-temp">
                                        <i class="fa-solid fa-sun-cloud"></i>
                                        <span class="relatedweather__now-temp">7</span>
                                    </div>
                                    <div class="relatedweather__now-details">
                                        <span>Neerslagkans: 20%</span>
                                        <span>Wind: 18 km/h</span>
                                        <span>Windrichting: NW</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="relatedweather__forecast">
                            <ul>
                                <li>
                                    <span class="relatedweather__forecast-day">Ma</span>
                                    <i class="fa-regular fa-sun-cloud"></i>
                                    <span class="relatedweather__forecast-temp">8°</span>
                                </li>
                                <li>
                                    <span class="relatedweather__forecast-day">Di</span>
                                    <i class="fa-regular fa-sun-cloud"></i>
                                    <span class="relatedweather__forecast-temp">7°</span>
                                </li>
                                <li>
                                    <span class="relatedweather__forecast-day">Wo</span>
                                    <i class="fa-regular fa-sun-cloud"></i>
                                    <span class="relatedweather__forecast-temp">6°</span>
                                </li>
                                <li>
                                    <span class="relatedweather__forecast-day">Do</span>
                                    <i class="fa-regular fa-sun-cloud"></i>
                                    <span class="relatedweather__forecast-temp">5°</span>
                                </li>
                                <li>
                                    <span class="relatedweather__forecast-day">Vr</span>
                                    <i class="fa-regular fa-sun-cloud"></i>
                                    <span class="relatedweather__forecast-temp">4°</span>
                                </li>
                            </ul>
                            <a class="relatedweather__btn" href="">Bekijk het weerbericht</a>
                        </div>
                    </div>
                </section>
                <section class="relatedproduct">
                    <div class="relatedproduct__label">
                        Geralateerd product
                    </div>

                    <div class="relatedproduct__container">
                        <div class="relatedproduct__content">
                            <div class="relatedproduct__content-header">
                                <div class="product__title">
                                ANWB Wateralmanak deel 2
                                </div>
                                <div class="product__delivery">
                                <i class="fa-solid fa-truck-fast"></i> Voor 16:00 besteld, de zelfde dag verzonden
                                </div>  
                            </div>
                            <div class="relatedproduct__content-body">
                                <p>In de ANWB Wateralmanak deel 2 vindt u een zeer compleet overzicht van alle jachthavens in Nederland en België. Faciliteiten, telefoonnummers, servicestations, diepgang, aantal ligplaatsen etc. Dit is een onmisbaar boek aan boord, ook alle vaarwegen, bruggen sluizen etc. vindt u daarin terug.</p>
                            </div>
                            <div class="relatedproduct__content-footer">
                            <a class="button button-primary" href="">Bekijk product</a> <span class="relatedproduct__content-price">€ 24,99</span> <span class="relatedproduct__content-stock"><i class="fa-solid fa-check"></i>Op vooraad</span>
                            </div>
                        </div>
                        <div class="relatedproduct__img">
                            <img src="https://placehold.co/120x240" alt="">
                        </div>
                    </div>
                </section>

                <section class="port__grid">
                    <div class="port__grid-header">
                        <h3 class="port__grid-title">Jachthavens</h3>
                        <div class="port__grid-sort">
                            <select name="sort" id="sort">
                                <option value="name-asc">Nederland</option>
                                <option value="name-desc">Naam (Z-A)</option>
                                <option value="rating-asc">Beoordeling (laag naar hoog)</option>
                                <option value="rating-desc">Beoordeling (hoog naar laag)</option>
                            </select>
                            <input type="text" name="search" id="" placeholder="Zoek een jachthaven">
                        </div>
                    </div>
                    <div class="port__grid-container">
                        <div class="port__card">
                            <a class="port__card-link" href="#">
                            <div class="port__content">
                                <h4 class="port__card-title">Hindeloopen</h4>
                                <div class="port__rating"> <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
                                <div class="port__card-info">
                                    <span>Informatie:</span>
                                    <ul>
                                        <li>
                                            € 2,00 per meter
                                        </li>
                                        <li>
                                            Maximale diepgang: 2,80
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-phone"></i> <a href="">+31 (0)88-0504 140</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="" class="port__link">Bekijk de jachthaven <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            </a>
                        </div>
                        <div class="port__card">
                            <a class="port__card-link" href="#">
                            <div class="port__content">
                                <h4 class="port__card-title">Hindeloopen</h4>
                                <div class="port__rating"> <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
                                <div class="port__card-info">
                                    <span>Informatie:</span>
                                    <ul>
                                        <li>
                                            € 2,00 per meter
                                        </li>
                                        <li>
                                            Maximale diepgang: 2,80
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-phone"></i> <a href="">+31 (0)88-0504 140</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="" class="port__link">Bekijk de jachthaven <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            </a>
                        </div>
                        <div class="port__card">
                            <a class="port__card-link" href="#">
                            <div class="port__content">
                                <h4 class="port__card-title">Hindeloopen</h4>
                                <div class="port__rating"> <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
                                <div class="port__card-info">
                                    <span>Informatie:</span>
                                    <ul>
                                        <li>
                                            € 2,00 per meter
                                        </li>
                                        <li>
                                            Maximale diepgang: 2,80
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-phone"></i> <a href="">+31 (0)88-0504 140</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="" class="port__link">Bekijk de jachthaven <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="side-bar">
                <span class="side-bar__title">Op deze pagina</span>
            </div>
        </div>
    </section>
</main>
<?php require_once '../footer.php'; ?>