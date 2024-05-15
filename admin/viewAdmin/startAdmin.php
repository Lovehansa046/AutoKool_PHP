<?php ob_start();

$lang_active = getCookieValue('lang');
?>

<?php
echo '
    <article>
        <div id="main" class="container">
            <h3>' . ($lang_active === "ru" ? "Панель администратора" : "Administraatori paneel") . '</h3>
            <div class="row">
                <p>' . ($lang_active === "ru" ? "Добро пожаловать в админ панель." : "Tere tulemast administraatori paneelile.") . '</p>
            </div>
        </div>
    </article>
' ?>
<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php";
