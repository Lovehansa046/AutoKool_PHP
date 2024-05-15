<?php ob_start() ?>
    <h2>404 viga</h2>
    <article>
        <h3>404 viga - mis see on?</h3>
        <p>Lehekülge ei leitud soovitud URL-i järgi</p>
    </article>

<?php $content = ob_get_clean(); ?>

<?php include "viewAdmin/templates/layout.php";
