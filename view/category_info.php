<?php

//echo "<li class='submenuunit'><a href='all'>KÕIK</a></li><br>";
foreach ($arr as $value) {
    echo "<div class='col-md-4 mb-4'>
                <div class='card category-card'>
                    <div class='card-body'>
                        <h3 class='card-title'  href='category?id=" . $value['category_id'] . "'>" . $value['category_name_est'] . "</h3>
                        <h3 class='card-title'>" . $value['category_price'] . "</h3>
                        <h3 class='card-title'>(sõiduauto)</h3>
                        <p class='card-text'>Intensiivne kursus sõiduauto juhtimiseks, valmistudes teooria- ja praktilisele
                            eksamile.</p>
                    </div>
                </div>
            </div>";

}

echo "<main class='container py-5'>
    <section id='benefits' class='mb-5'>
        <div class='container container-primary'>
            <h2 class='text-primary mb-4'>Õppimise eelised meie juures</h2>
            <ul class='list-group'>
                <li class='list-group-item'>Individuaalne lähenemine igale õpilasele</li>
                <li class='list-group-item'>Kogenud ja sõbralikud juhendajad</li>
                <li class='list-group-item'>Vastutulelik õppegraafik</li>
                <li class='list-group-item'>Kaasaegsed autod ja varustus</li>
                <li class='list-group-item'>Abi teooria- ja praktilise eksami ettevalmistamisel</li>
            </ul>
        </div>
    </section>

    <section id='contact' class='mb-5'>
        <div class='container container-primary'>
            <h2 class='text-primary mb-4 contact-info'>Kontaktandmed</h2>
            <ul class='list-group'>
                <li class='list-group-item'>Aadress: Kesk tn 123, Tallinn</li>
                <li class='list-group-item'>Telefon: +372 123 456-78-90</li>
                <li class='list-group-item'>E-post: info@auto-kool.ee</li>
            </ul>
        </div>
    </section>
</main>";

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
