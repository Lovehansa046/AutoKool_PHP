<?php

class ViewNews
{

    public static function newsByCategory($arr,$lang_active)
    {
        foreach ($arr as $value) {

            echo "<div style='background-color: #007bff;
    color: #fff;
    padding: 20px 0;
    text-align: center; justify-content: center' class='header'>
                    <h1>". ($lang_active === 'ru' ? 'Автошкола Uus juht' : 'Autokool Uus juht'). "</h1>
                    <p style='justify-content: center'>". ($lang_active === 'ru' ? 'Лучшее место для обучения вождению!' : 'Parim koht sõitmise õppimiseks!'). "</p>
                  </div>
            <div style='flex: 1; /* Занимает всю доступную высоту (оставшуюся часть) */
    max-width: 800px;
    margin: 20px auto;
    padding: 10px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);' class='container category-container'>
            <h2 style='font-size: 24px; color: #007bff; text-align: center;margin-bottom: 20px;' class='category-title'>
            " . $value["category_name_est"] . "</h2>
            <p style='font-size: 18px; line-height: 1.6; margin-bottom: 20px;' class='category-description' >
            " . ($lang_active === 'ru' ?  $value ['category_description_rus']  :  $value ['category_description_est'] )."
            </p >
            <p style='font-size: 20px;
    font-weight: bold;
    color: #333; justify-content: center;' class='category-price' > " . $value["category_price"] . "</p >
            </div >";

//            echo ' < img src = "data:image/jpeg;base64,' . base64_encode($value['picture']) . '" width = 150 /><br > ';
//            echo "<h2>" . $value['category_name_est'] . "</h2>";
//            Controller::commentsCount($value['id']);
//            echo "<a href='category ? id = " . $value['category_id'] . "'>Edasi</a><br>";

        }
    }

    public static function allNews($arr)
    {
        foreach ($arr as $value) {
            echo "<li>" . $value['title'];
            Controller::commentsCount($value['id']);
            echo "<a href='news ? id = " . $value['id'] . "'>Edasi</a></li><br>";
        }
    }

    public static function readNews($n)
    {
        echo "<h2>" . $n['title'] . "</h2>";
        Controller::commentsCountWithAnchor($n['id']);
        echo ' < br><img src = "data:image/jpeg;base64,' . base64_encode($n['picture']) . '" width = 150 /><br > ';
        echo "<p>" . $n['text'] . "</p>";
    }

    public static function pictureTitleNews($arr)
    {
        foreach ($arr as $value) {
            echo "<div class='row'>";
            echo "<a href='news ? id = " . $value['id'] . "'><img src='data:image / jpeg;base64," . base64_encode($value['picture']) . "' width=150 class='img - thumbnail'></a>";
            echo "<a href='news ? id = " . $value['id'] . "' style='display: flex; justify - content: center; flex - direction: column;'>" . $value['title'] . "</a>";
            echo "<div style='display: flex; justify - content: center; flex - direction: column;'>";
            Controller::commentsCount($value['id']);
            echo "</div>";
            echo "</div><br>";
        }
    }

    public static function colorfulNews($arr)
    {
        foreach ($arr as $value) {
            echo "<h1 style='background - color:rgba(116, 16, 16, 0.48);'>" . $value['title'] . "</h1>";
            echo "<p style='background - color:#000000;'>" . $value['text'] . "</p><br>";
        }
    }

//    public static function viewCategory($arr){
//        foreach ($arr as $value) {
//            echo "<div class='col-md-4 mb-4'>
//                <div class='card category-card'>
//                    <div class='card-body'>
//                        <h3 class='card-title'>". $value['title'] . "</h3>
//                        <h3 class='card-title'>(sõiduauto)</h3>
//                        <p class='card-text'>Intensiivne kursus sõiduauto juhtimiseks, valmistudes teooria- ja praktilisele
//                            eksamile.</p>
//                    </div>
//                </div>
//            </div>";
//        }
//    }
}
