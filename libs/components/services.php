<?php

    // S E R V I C E S   C O M P O N E N T


    // Check if user wants to enter file and redirect to unauthorized if true
    if(!defined('site'))
    {
        require_once __DIR__."/../../errors/403.php";
        header('HTTP/1.0 403 Forbidden');
        exit();
    }


    // Import app config if not imported
    if(!isset($config))
    {
        $config = require_once __DIR__.'/../../config.php';
    }

    // Import assets library if not imported
    if(!isset($assets))
    {
        require_once __DIR__.'/../php/assets.php';
    }

?>

<!-- SERVICES -->
<section id="services">

    <!-- Background -->
    <div class="img-bg">
        <img src="<?= asset('programming-background.webp') ?>" alt="Tło programowanie" loading="lazy" />
    </div>
    <!-- Background end -->

    <!-- Title -->
    <div class="title-container">
        <img src="<?= asset('logo-black.webp') ?>" alt="Logo Krzysztofa Kmiecia" loading="lazy" />
        <h2>Usługi programistyczne</h2>
        <img src="<?= asset('logo-black.webp') ?>" alt="Logo Krzysztofa Kmiecia" loading="lazy" />
    </div>
    <!-- Title end -->

    <!-- Services cards -->
    <div class="container">
        <div class="row">
            <!-- Card -->
            <div class="card-container">
                <div class="card">
                    <div class="badge">
                        <p style="background: var(--color-red)">Skontaktuj się!</p>
                    </div>

                    <h3>Skuteczny e-commerce</h3>

                    <div class="box-container">
                        <div class="shadow"></div>

                        <div class="front" style="background: var(--color-red)">
                            <div class="img-bg">
                                <img src="<?= asset('chmury.webp') ?>" alt="Tekstura jednolitego szumu" loading="lazy" />
                            </div>

                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <div class="left" style="background: var(--color-red)">
                            <div class="img-bg">
                                <img src="<?= asset('chmury.webp') ?>" alt="Tekstura jednolitego szumu" loading="lazy" />
                            </div>
                        </div>
                    </div>

                    <div class="price-description--container">
                        <p>Doświadczenie nabyte w pracy przy niezliczonej ilości sklepów, od Wordpressa po autorskie rozwiązania.</p>
                    </div>

                    <a href="#contact" class="order-container" style="background: var(--color-red)">
                        <p>Skontaktuj po więcej <i class="fa-solid fa-arrow-right"></i></p>
                    </a>
                </div>
            </div>
            <!-- Card end -->

            <!-- Card -->
            <div class="card-container">
                <div class="card">
                    <div class="badge">
                        <p style="background: var(--color-blue)">Skontaktuj się!</p>
                    </div>

                    <h3>Nowoczesne strony internetowe</h3>

                    <div class="box-container">
                        <div class="shadow"></div>

                        <div class="front" style="background: var(--color-blue)">
                            <div class="img-bg">
                                <img src="<?= asset('chmury.webp') ?>" alt="Tekstura jednolitego szumu" loading="lazy" />
                            </div>

                            <i class="fa-solid fa-earth-americas"></i>
                        </div>
                        <div class="left" style="background: var(--color-blue)">
                            <div class="img-bg">
                                <img src="<?= asset('chmury.webp') ?>" alt="Tekstura jednolitego szumu" loading="lazy" />
                            </div>
                        </div>
                    </div>

                    <div class="price-description--container">
                        <p>Nie tylko wygląd i ładna wizytówka, ale także bogata struktura i optymalizacja SEO.</p>
                    </div>

                    <a href="#contact" class="order-container" style="background: var(--color-blue)">
                        <p>Skontaktuj po więcej <i class="fa-solid fa-arrow-right"></i></p>
                    </a>
                </div>
            </div>
            <!-- Card end -->

            <div class="card-container">
                <div class="card">       
                    <div class="badge">
                        <p style="background: var(--color-orange)">Skontaktuj się!</p>
                    </div>

                    <h3>Dedykowane aplikacje webowe</h3>

                    <div class="box-container">
                        <div class="shadow"></div>

                        <div class="front" style="background: var(--color-orange)">
                            <div class="img-bg">
                                <img src="<?= asset('chmury.webp') ?>" alt="Tekstura jednolitego szumu" loading="lazy" />
                            </div>

                            <i class="fa-solid fa-compass-drafting"></i>
                        </div>
                        <div class="left" style="background: var(--color-orange)">
                            <div class="img-bg">
                                <img src="<?= asset('chmury.webp') ?>" alt="Tekstura jednolitego szumu" loading="lazy" />
                            </div>
                        </div>
                    </div>

                    <div class="price-description--container">
                        <p>Brak ograniczeń, bezpieczne przetwarzanie informacji, obróbka obrazu i audio.</p>
                    </div>

                    <a href="#contact" class="order-container" style="background: var(--color-orange)">
                        <p>Skontaktuj po więcej <i class="fa-solid fa-arrow-right"></i></p>
                    </a>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 4rem">
            <!-- Card -->
            <div class="card-container">
                <div class="card">
                    <div class="badge">
                        <p style="background: var(--color-green)">Skontaktuj się!</p>
                    </div>

                    <h3>Efektywne aplikacje mobilne</h3>

                    <div class="box-container">
                        <div class="shadow"></div>

                        <div class="front" style="background: var(--color-green)">
                            <div class="img-bg">
                                <img src="<?= asset('chmury.webp') ?>" alt="Tekstura jednolitego szumu" loading="lazy" />
                            </div>

                            <i class="fa-brands fa-android"></i>
                        </div>
                        <div class="left" style="background: var(--color-green)">
                            <div class="img-bg">
                                <img src="<?= asset('chmury.webp') ?>" alt="Tekstura jednolitego szumu" loading="lazy" />
                            </div>
                        </div>
                    </div>

                    <div class="price-description--container">
                        <p>Wszystkie możliwości webowe w pełni zoptymalizowane i przeniesione do kieszeni użytkowników.</p>
                    </div>

                    <a href="#contact" class="order-container" style="background: var(--color-green)">
                        <p>Skontaktuj po więcej <i class="fa-solid fa-arrow-right"></i></p>
                    </a>
                </div>
            </div>
            <!-- Card end -->

            <!-- Card -->
            <div class="card-container">
                <div class="card">

                    <div class="badge">
                        <p style="background: var(--color-lightblue)">Skontaktuj się!</p>
                    </div>

                    <h3>Analiza stron UX/UI + SEO</h3>

                    <div class="box-container">
                        <div class="shadow"></div>

                        <div class="front" style="background: var(--color-lightblue)">
                            <div class="img-bg">
                                <img src="<?= asset('chmury.webp') ?>" alt="Tekstura jednolitego szumu" loading="lazy" />
                            </div>

                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <div class="left" style="background: var(--color-lightblue)">
                            <div class="img-bg">
                                <img src="<?= asset('chmury.webp') ?>" alt="Tekstura jednolitego szumu" loading="lazy" />
                            </div>
                        </div>
                    </div>

                    <div class="price-description--container">
                        <p>Przetestowanie struktury pod kątem wydajności, doświadczeń użytkownika, a także wpływu witryny na wyszukiwarki.</p>
                    </div>

                    <a href="#contact" class="order-container" style="background: var(--color-lightblue)">
                        <p>Skontaktuj po więcej <i class="fa-solid fa-arrow-right"></i></p>
                    </a>
                </div>
            </div>
            <!-- Card end -->
        </div>
    </div>
    <!-- Services cards end -->

</section>
<!-- SERVICES END -->