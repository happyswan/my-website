<?php

    // A B O U T   M E   C O M P O N E N T


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

<!-- ABOUT ME -->
<section id="about-me">

    <!-- Title -->
    <div class="title-container">
        <img src="<?= asset('logo-black.webp') ?>" alt="Logo Krzysztofa Kmiecia" loading="lazy" />
        <h2>Kim jest Krzysztof Kmieć?</h2>
        <img src="<?= asset('logo-black.webp') ?>" alt="Logo Krzysztofa Kmiecia" loading="lazy" />
    </div>
    <!-- Title end -->

    <div class="content-container">
        <!-- About description -->
        <div class="articles">
            <!-- First article - the beginning -->
            <article>
                    <h3>Początki kariery programisty</h3>

                    <p>
                        <b>Pierwszą aplikację komercyjną</b> 
                        wdrożyłem dla klienta w wieku 18 lat. Od tego czasu przez lata intensywnie
                        pracowałem w zawodzie sam lub w zespole, projektując, programując,
                        a także zarządzając pracą grupową.
                        Tak powstały aplikacje, które służą użytkownikom do dzisiaj.
                    </p>

                    <p>
                        <b>Spędzając dodatkowo wieczory na nauce</b> zgłębiałem wiedzę nie tylko
                        na temat popularnych technologii i frameworków, ale także na rozwijaniu
                        programowania kreatywnego obejmującego technologię „Canvas” oraz „Web Audio API”.
                    </p>

                    <p>
                        <b>Od początku wiedziałem</b>,
                        że edukacja informatyczna to za mało, żeby świadczyć rzeczywiście wartościowe usługi.
                        Zgłębianie nowoczesnych technologii oraz zdobywanie doświadczenia doprowadziło mnie
                        do jednego prostego wniosku...</p>

                    <p><b><i>NAJWAŻNIEJSI SĄ ZAWSZE UŻYTKOWNICY KORZYSTAJĄCY Z TWORZONEJ APLIKACJI!</i></b></p>
            </article>
            <!-- First article - the beginning end -->

            <!-- Second article - experience and approach -->
            <article>
                    <h3>Doświadczenie i podejście zawodowe</h3>

                    <p>
                        <b>Wieloletnia praca przy większych</b> jak i mniejszych projektach
                        oraz bezpośredni kontakt z klientami
                        pozwoliły mi odkryć najczęstsze błędy popełniane przy współpracy z działem IT.
                        Zawsze zależy mi, aby od samego początku prac nad projektem
                        nie powstawały żadne komplikacje wynikające z nieporozumień i źle przemyślanych rozwiązań.
                    </p>

                    <p>
                        <b>Równie jak na dobrze dobranej technologii</b> i profesjonalnym podejściu do zawodu
                        zależy mi na dobrej współpracy i wzajemnej komunikacji. Nie potrafiłbym znieść
                        niewypełniania zadań
                        u siebie, więc nie wyobrażam sobie podobnej sytuacji w pracy.
                    </p>

                    <p>
                        <b>Projektując i tworząc aplikację</b> nieustannie zwracam uwagę na każdy szczegół tak,
                        aby dopasować go do rzeczywistych potrzeb użytkowników.
                    </p>
            </article>
            <!-- Second article - experience and approach end -->

            <!-- Third article - technologies -->
            <article>
                    <h3>Technologie, których używam do pracy</h3>
                    
                    <div class="technology-container">
                        <div class="technology">
                            <img src="<?= asset('logos/html5.webp') ?>" alt="Logo HTML5">

                            <p class="description"><i>HTML5</i></p>
                        </div>

                        <div class="technology">
                            <img src="<?= asset('logos/css3.webp') ?>" alt="Logo CSS3">

                            <p class="description"><i>CSS3</i></p>
                        </div>

                        <div class="technology">
                            <img src="<?= asset('logos/js.webp') ?>" alt="Logo JavaScript">

                            <p class="description"><i>Vanilla JavaScript</i></p>
                        </div>

                        <div class="technology">
                            <img src="<?= asset('logos/php.webp') ?>" alt="Logo PHP">

                            <p class="description"><i>PHP</i></p>
                        </div>

                        <div class="technology">
                            <img src="<?= asset('logos/wordpress.webp') ?>" alt="Logo Wordpress">

                            <p class="description"><i>Wordpress</i></p>
                        </div>

                        <div class="technology">
                            <img src="<?= asset('logos/bootstrap.webp') ?>" alt="Logo Bootstrap">

                            <p class="description"><i>Bootstrap</i></p>
                        </div>

                        <div class="technology">
                            <img src="<?= asset('logos/jquery.webp') ?>" alt="Logo JQuery" style="height: 2.5rem; margin-top: .75rem; margin-bottom: .75rem">

                            <p class="description"><i>JQuery</i></p>
                        </div>

                        <div class="technology">
                            <img src="<?= asset('logos/vue.webp') ?>" alt="Logo Vue.js">

                            <p class="description"><i>Vue.js</i></p>
                        </div>

                        <div class="technology">
                            <img src="<?= asset('logos/laravel.webp') ?>" alt="Logo Laravel">

                            <p class="description"><i>Laravel</i></p>
                        </div>

                        <div class="technology">
                            <img src="<?= asset('logos/inertia.webp') ?>" alt="Logo Inertia">

                            <p class="description"><i>Inertia.js</i></p>
                        </div>

                        <div class="technology">
                            <img src="<?= asset('logos/flutter.webp') ?>" alt="Logo Flutter">

                            <p class="description"><i>Dart/Flutter</i></p>
                        </div>

                        <div class="technology">
                            <img src="<?= asset('logos/git.webp') ?>" alt="Logo Git">

                            <p class="description"><i>Git</i></p>
                        </div>
                    </div>

            </article>
            <!-- Third article - technologies end -->
        </div>
        <!-- About description end -->

        <!-- Background title -->
        <div class="background-title">
            <p>
                skuteczność
            </p>
        </div>
        <!-- Background title end -->
    </div>
</section>
<!-- ABOUT ME END -->