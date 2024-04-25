<?php

//echo "<li class='submenuunit'><a href='all'>KÕIK</a></li><br>";
//var_dump($arr);
foreach ($arr as $value) {
//    var_dump($value);
    echo "
    <a class='dropdown-item' href='category?id=" . $value['category_id'] . "'>" . $value['category_name_est'] . "</a>
   ";

//    echo "<div>
//    ". $value['name'] . "
//</div>";
}
