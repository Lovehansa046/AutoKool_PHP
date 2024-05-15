<<<<<<< HEAD
<?php ob_start();
?>

<?php
$lang_active = getCookieValue('lang');

echo '
<h2>' . ($lang_active === "ru" ? "Список запросов" : " Päringute nimekiri") . '</h2>
 ' ?>
<div class="container" style="min-height:400px;">
    <div style="margin:20px;">
        <?php

        echo '
        <a href="newsAdd" class="btn btn-primary" role="button">' . ($lang_active === "ru" ? "Добавить запрос" : " Lisa päring") . '</a>
         ' ?>
=======
<?php ob_start(); ?>

<h2>Päringute nimekiri</h2>

<div class="container" style="min-height:400px;">
    <div style="margin:20px;">
        <a href="newsAdd" class="btn btn-primary" role="button">Lisa päring</a>
>>>>>>> c65e37a514936309e99c24d177af379eefb808f9
    </div>
    <div class="col-md-11">
        <table class="table table-bordered table-responsive">
            <tr>
                <th width="10%">ID</th>
<<<<<<< HEAD
                <?php

                echo '
                <th width="70%">' . ($lang_active === "ru" ? "Заголовок" : " Pealkiri") . ' </th>
                <th width="20%"></th>
                ' ?>
            </tr>


            <?php

            $categories = array(
                array('category_id' => 1, 'category_name_est' => 'D'),
                array('category_id' => 2, 'category_name_est' => 'B'),
                array('category_id' => 3, 'category_name_est' => 'C'),
            );


=======
                <th width="70%">Pealkiri</th>
                <th width="20%"></th>
            </tr>
            <?php

>>>>>>> c65e37a514936309e99c24d177af379eefb808f9
            foreach ($arr as $row) {
                echo '<tr>';

                echo '<td>' . $row['application_id'] . '</td>';

<<<<<<< HEAD
                echo '<td><b>' . ($lang_active === "ru" ? "Имя:" : " Nimi:") . ' </b>' . $row['name'] . '<br>';
                echo '<b>' . ($lang_active === "ru" ? "Фамилия:" : " Perenimi:") . ' </b><i>' . $row['lastname'] . '</i><br>';
                echo '<b>' . ($lang_active === "ru" ? "Категория:" : " Kategooria:") . ' </b><i>' . getCategoryName($row['category_id'], $categories) . '</i><br>';
=======
                echo '<td><b>Nimi: </b>' . $row['name'] . '<br>';
                echo '<b>Perenimi: </b><i>' . $row['lastname'] . '</i><br>';
                echo '<b>Kategooria: </b><i>' . $row['category_id'] . '</i><br>';
>>>>>>> c65e37a514936309e99c24d177af379eefb808f9


                echo '</td>';

                echo '<td>
                    
<<<<<<< HEAD
                    <a href="newsDel?application_id=' . $row['application_id'] . '">' . ($lang_active === "ru" ? "Удалить" : " Kustuta") . ' <span class="glyphicon
=======
                    <a href="newsDel?application_id=' . $row['application_id'] . '">Kustuta <span class="glyphicon
>>>>>>> c65e37a514936309e99c24d177af379eefb808f9
                    glyphicon-remove" aria-hidden="true"></span></a>
                    </td>';

                echo '</tr>';
            }

<<<<<<< HEAD
            function getCategoryName($categoryId, $categories)
            {
                foreach ($categories as $category) {
                    if ($category['category_id'] == $categoryId) {
                        return $category['category_name_est'];
                    }
                }
                return 'Tundmatu';
            }

=======
>>>>>>> c65e37a514936309e99c24d177af379eefb808f9
            ?>
        </table>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php include "viewAdmin/templates/layout.php"; ?>

<!--<a href="newsEdit?id=' . $row['id'] . '">Muuda <span class="glyphicon-->
<!--                    glyphicon-edit" aria-hidden="true"></span></a>-->

