<?php
ob_start();
?>
<header class="bg-primary text-white py-5">
    <div class="container text-center">
        <h1 class="display-3 head-text">Tere tulemast autokooli "Edu tee"</h1>
        <p class="lead">Õpetame teid kindlalt sõitma ja valmistame teid ette juhilubade saamiseks</p>
    </div>
</header>

<section id="about" class="mb-5">
    <div class=" container container-about">
        <div class="col-md-4 mb-4 text-center">
            <div class=" card-body">
                <div style="height: 150px; justify-content: center" class="card bg-warning">
                    <h2 class="text-white mb-4">Meie autokoolist</h2>
                </div>
            </div>
        </div>

        <p class="text">Autokool "Edu tee" pakub kvaliteetset sõiduõpet kogenud juhendajatega. Hoolitseme
            teie turvalisuse
            eest teel ja tagame täieliku ettevalmistuse juhilubade eksamiks.</p>
    </div>
</section>


<?php
echo "<section id='courses' class='text-center mb-5'>";
echo "<div class='row align-items-start justify-content-center'>";
Controller::categoryInfo();
echo "</div>";
echo "</section>";
$content = ob_get_clean();



include_once 'view/layout.php';
?>


