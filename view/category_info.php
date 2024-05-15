<?php

// Функция для получения значения из Cookie
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

// Теперь переменная $lang_active содержит активный язык, который был сохранен в Cookie

foreach ($arr as $value) {
    echo "<div class='col-md-4 mb-4'>
                <div class='card category-card'>
                    <div class='card-body'>
                        <h3 class='card-title' href='category?id=" . $value['category_id'] . "'>" . ($lang_active === 'ru' ? $value['category_name_rus'] : $value['category_name_est']) . "</h3>
                        <h3 class='card-title'>" . $value['category_price'] . "</h3>
                        <p class='card-text'>" . ($lang_active === 'ru' ? 'Интенсивный курс вождения категории автомобиля '. $value ['category_name_rus'] .', подготовка к теоретическому и практическому экзаменам.' : 'Intensiivne kursus kategoriija sõiduauto juhtimiseks '. $value ['category_name_est'] .', valmistudes teooria- ja praktilise eksamile.') . "</p>
                    </div>
                </div>
            </div>";
}

echo "<main class='container py-5'>
    <section id='benefits' class='mb-5'>
        <div class='container container-primary'>
            <h2 class='text-primary mb-4'>" . ($lang_active === 'ru' ? 'Преимущества обучения у нас' : 'Õppimise eelised meie juures') . "</h2>
            <ul class='list-group'>
                <li class='list-group-item'>" . ($lang_active === 'ru' ? 'Индивидуальный подход к каждому ученику' : 'Individuaalne lähenemine igale õpilasele') . "</li>
                <li class='list-group-item'>" . ($lang_active === 'ru' ? 'Опытные и дружелюбные инструкторы' : 'Kogenud ja sõbralikud juhendajad') . "</li>
                <li class='list-group-item'>" . ($lang_active === 'ru' ? 'Гибкий учебный график' : 'Vastutulelik õppegraafik') . "</li>
                <li class='list-group-item'>" . ($lang_active === 'ru' ? 'Современные автомобили и оборудование' : 'Kaasaegsed autod ja varustus') . "</li>
                <li class='list-group-item'>" . ($lang_active === 'ru' ? 'Помощь в подготовке к теоретическому и практическому экзаменам' : 'Abi teooria- ja praktilise eksami ettevalmistamisel') . "</li>
            </ul>
        </div>
    </section>

    <section id='contact' class='mb-5'>
        <div class='container container-primary '  style='align-content: center'>
            <h2 class='text-primary mb-4 contact-info container-info' style='width: 100%;'>" . ($lang_active === 'ru' ? 'Контактная информация' : 'Kontaktandmed') . "</h2>
            <ul class='list-group'>
                <li class='list-group-item'>" . ($lang_active === 'ru' ? 'Адрес: Центральная улица 123, Таллинн' : 'Aadress: Kesk tn 123, Tallinn') . "</li>
                <li class='list-group-item'>" . ($lang_active === 'ru' ? 'Телефон: +372 123 456-78-90' : 'Telefon: +372 123 456-78-90') . "</li>
                <li class='list-group-item'>" . ($lang_active === 'ru' ? 'Эл. почта: info@auto-kool.ee' : 'E-post: info@auto-kool.ee') . "</li>
            </ul>
        </div>
    </section>
</main>";

?>


