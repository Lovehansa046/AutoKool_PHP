<?php

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