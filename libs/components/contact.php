<?php

    // C O N T A C T   C O M P O N E N T


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

<!-- CONTACT -->
<section id="contact">

    <!-- Background -->
    <img class="code-background" src="<?= asset('code-graphic.webp') ?>" alt="Ikonka kodu" loading="lazy" />
    <!-- Background end -->

    <!-- Title -->
    <div class="title-container">
        <img src="<?= asset('logo-black.webp') ?>" alt="Logo Krzysztofa Kmiecia" loading="lazy" />
        <h2>Kontakt</h2>
        <img src="<?= asset('logo-black.webp') ?>" alt="Logo Krzysztofa Kmiecia" loading="lazy" />
    </div>
    <!-- Title end -->

    <div class="content-container">
        <!-- Contact form -->
        <form action="?" method="POST" onclick="event.preventDefault()" class="contact-form">
            <!-- Name -->
            <div class="input-container half-left">
                <p>Nazwa firmy/Imię i nazwisko:</p>

                <input type="text" id="fullname" onclick="checkFixInput(this.id, 'Nazwa firmy/Imię i nazwisko')" name="fullname" placeholder="Nazwa firmy/Imię i nazwisko" />
            </div>
            <!-- Name end -->

            <!-- Email -->
            <div class="input-container half-right">
                <p>Adres e-mail:</p>

                <input type="text" onclick="checkFixInput(this.id, 'Adres e-mail')" id="email" name="email" placeholder="Adres e-mail" />
            </div>
            <!-- Email end -->

            <!-- Message title -->
            <div class="input-container full">
                <p>Tytuł wiadomości:</p>

                <input type="text" onclick="checkFixInput(this.id, 'Tytuł wiadomości')" id="title" name="title" placeholder="Tytuł wiadomości" />
            </div>
            <!-- Message title end -->

            <!-- Message -->
            <div class="input-container full">
                <p>Treść wiadomości:</p>

                <textarea rows="12" id="message" onclick="checkFixInput(this.id, 'Treść wiadomości')" name="message" placeholder="Treść wiadomości"></textarea>
            </div>
            <!-- Message end -->

            <!-- Send message button -->
            <div class="input-container full">
                <?php
                    if(isset($_SESSION["email_sent"]))
                    {
                        echo '<button id="send_email-btn" disabled style="cursor: inherit; filter: brightness(1);">Musisz zaczekać aby wysłać wiadomość</button>';
                    }else
                    {
                        echo '<button id="send_email-btn" onclick="sendEmail()">Wyślij wiadomość <i class="fa-solid fa-paper-plane"></i></button>';
                    }
                ?>
            </div>
            <!-- Send message button end -->
        </form>
        <!-- Contact form end -->

        <!-- Contact description -->
        <div class="contact-description--container">
            <h3><b>Potrzebujesz pomocy? Z chęcią odpowiem na wszystkie pytania!</b></h3>

            <p><a href="mailto: <?= $config['email'] ?>"><i class="fa-regular fa-envelope"></i> &nbsp;<?= $config['email'] ?></a></p>

            <p><a href="tel: +48<?= str_replace(" ", "", $config['phone']) ?> ?>"><i style="margin-left: .1rem; margin-right: .2rem;" class="fa-solid fa-mobile-screen-button"></i> &nbsp;( +48 ) <?= $config['phone'] ?></a></p>

            <img class="decoration-img" src="<?= asset("programmer.webp") ?>" alt="Programista" />
        </div>
        <!-- Contact description end -->
    </div>
</section>
<!-- CONTACT END -->