<?php

class Info {
    public static function viewInfo() {
        echo "<header class='bg-primary text-white py-5'>
            <div class='container text-center'>
                <h1 class="display-3 head-text">Tere tulemast autokooli "Edu tee"</h1>
                <p class="lead">Õpetame teid kindlalt sõitma ja valmistame teid ette juhilubade saamiseks</p>
            </div>
        </header>

        <main class='container py-5">
            <section id="about" class="mb-5">
                <div class='container container-about">
                    <div class='col-md-4 mb-4 text-center">
                        <div class='card-body">
                            <div style="height: 150px; justify-content: center" class='card bg-warning">
                                <h2 class="text-white mb-4">Meie autokoolist</h2>
                            </div>
                        </div>
                    </div>

                    <p class="text">Autokool "Edu tee" pakub kvaliteetset sõiduõpet kogenud juhendajatega. Hoolitseme
                        teie turvalisuse
                        eest teel ja tagame täieliku ettevalmistuse juhilubade eksamiks.</p>
                </div>
            </section>

            <section id='courses" class="text-center mb-5">
                <div class="row align-items-start justify-content-center">

                    <?php
                    Controller::categoryInfo();
                    ?>

                    <!--            <div class='col-md-4 mb-4">-->
                    <!--                <div class='card category-card">-->
                    <!--                    <div class='card-body">-->
                    <!--                        <h3 class='card-title">Kategooria C</h3>-->
                    <!--                        <h3 class='card-title">(veoauto)</h3>-->
                    <!--                        <p class='card-text">Õpe veoauto juhtimiseks koos kogenud juhendajatega, valmistudes kategooria C-->
                    <!--                            eksami sooritamiseks.</p>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--            <div class='col-md-4 mb-4">-->
                    <!--                <div class='card category-card">-->
                    <!--                    <div class='card-body">-->
                    <!--                        <h3 class='card-title">Kategooria D</h3>-->
                    <!--                        <h3 class='card-title">(buss)</h3>-->
                    <!--                        <p class='card-text">Täielik õppekursus bussi juhtimiseks, sealhulgas tehnikaga tutvumine ja-->
                    <!--                            juhtimisoskuste omandamine.</p>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                </div>
            </section>

            <section id="benefits" class="mb-5">
                <div class='container container-primary">
                    <h2 class="text-primary mb-4">Õppimise eelised meie juures</h2>
                    <ul class="list-group">
                        <li class="list-group-item">Individuaalne lähenemine igale õpilasele</li>
                        <li class="list-group-item">Kogenud ja sõbralikud juhendajad</li>
                        <li class="list-group-item">Vastutulelik õppegraafik</li>
                        <li class="list-group-item">Kaasaegsed autod ja varustus</li>
                        <li class="list-group-item">Abi teooria- ja praktilise eksami ettevalmistamisel</li>
                    </ul>
                </div>
            </section>

            <section id='contact" class="mb-5">
                <div class='container container-primary">
                    <h2 class="text-primary mb-4 contact-info">Kontaktandmed</h2>
                    <ul class="list-group">
                        <li class="list-group-item">Aadress: Kesk tn 123, Tallinn</li>
                        <li class="list-group-item">Telefon: +372 123 456-78-90</li>
                        <li class="list-group-item">E-post: info@auto-kool.ee</li>
                    </ul>
                </div>
            </section>
        </main>"
    }
}
