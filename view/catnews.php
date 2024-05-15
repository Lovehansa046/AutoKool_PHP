<?php
ob_start();
<<<<<<< HEAD

function getCookieValue($name)
{
    return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
}

// Извлекаем значение языка из Cookie
$lang_active = getCookieValue('lang');


// Если язык не найден в Cookie или не установлен, используем язык по умолчанию 'est'
if (!$lang_active) {
    $lang_active = 'est';
}

=======
>>>>>>> c65e37a514936309e99c24d177af379eefb808f9
?>
<!--<h1>Uudised (kategooriad)</h1>-->
<!--<br>-->

<?php
<<<<<<< HEAD
ViewNews::newsByCategory($arr, $lang_active);
=======
ViewNews::newsByCategory($arr);
>>>>>>> c65e37a514936309e99c24d177af379eefb808f9
$content = ob_get_clean();
include_once 'view/layout.php';


?>