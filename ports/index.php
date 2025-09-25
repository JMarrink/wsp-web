<?php require_once '../header.php'; ?>
<style>
    main {
        /* background-color: #FFF; */
        min-height: 100vh;
    }

    .port__grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-column-gap: 25px;
            grid-row-gap: 25px;
        }
</style>
<main>
    <section class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#">Jachthavens</a></li>
            </ul>
        </div>
    </section>
    <section class="page__title">
        <div class="container">
            <h1>
                Jachthavens
            </h1>
        </div>
    </section>
    <section class="page__ports">
        <div class="container">
            <div class="page__container">
            <section class="page__ports-description">
                <h2>
                    Overzicht jachthavens Nederland, België en Duitsland
                </h2>
                <p>
                    Regelmatig publiceren wij verslagen van jachthavens die door de redactie van de watersportalmanak zijn bezocht. Soms zijn de verslagen zeer actueel, maar soms ook vanuit een langer geleden bezoek. Het gaat hier niet om een ultieme test van alle jachthavens maar om een persoonlijke en algemene indruk, aangevuld met feiten, meningen en tarieven. 
                </p>
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
        </div>
    </section>
</main>
<?php require_once '../footer.php'; ?>