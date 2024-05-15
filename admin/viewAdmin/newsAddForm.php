<?php ob_start();

$lang_active = getCookieValue('lang');

?>

<div class="container" style="min-height:400px;">
    <div class="col-md-11">

        <?php
        echo '
        <h2>' . ($lang_active === "ru" ? "Добавление заявки" : "Päring lisamine") . '</h2>
        ' ?>
        <?php
        if (isset($test)) {
            if ($test == true) {
                ?>
                <?php
                echo '
          
                <div class="alert alert-info">
                    <strong>' . ($lang_active === "ru" ? "Запись добавлена." : "Kirje on lisatud.") . ' </strong>
                    <a href="newsAdmin">' . ($lang_active === "ru" ? "Список заявок" : "Uudiste päring") . '</a>
                </div>
                '
                ?>
                <?php
            } else if ($test == false) {
                ?>
                <?php
                echo '
                <div class="alert alert-warning">
                    <strong>' . ($lang_active === "ru" ? "Ошибка при добавлении заявки!" : " Viga kirje lisamisel!") . '</strong>
                    <a href="newsAdmin">' . ($lang_active === "ru" ? "Список заявок" : "Uudiste päring") . '</a>
                </div>
                '
                ?>
                <?php
            }
        } else {
            ?>

            <?php
            echo '

            <form method="POST" action="newsAddResult" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <tr>
                        <td>' . ($lang_active === "ru" ? "Имя пользователя" : " Kasutajanimi") . '</td>
                        ' ?>
            <td><input type="text" name="username" class="form-control"
                       value="<?php echo htmlspecialchars($_SESSION["name"]); ?>" disabled></td>
            </tr>

            <?php
            echo '
                    <tr>
                        <td>' . ($lang_active === "ru" ? "Имя" : " Nimi") . '</td>
                        <td><input type="text" name="name" class="form-control" required></td>
                    </tr>

                    <tr>
                        <td>' . ($lang_active === "ru" ? "Фамилия" : " Perekonnanimi") . '</td>
                        <td><input type="text" name="lastname" class="form-control" required></td>
                    </tr>

                    <tr>
                        <td>' . ($lang_active === "ru" ? "Категория" : " Kategooria") . '</td>
                        <td>
                            <select name="idCategory" class="form-control">

' ?>
            <?php
            foreach ($arr as $row) {
                echo '<option value="' . $row['category_id'] . '">' . $row['category_name_est'] . '</option>';
            }
            ?>
            <?php
            echo '
            </select>
            </td>
            </tr>

            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary" name="save">
                        <span class="glyphicon glyphicon-plus"></span>' . ($lang_active === "ru" ? "Сохранить" : " Salvesta") . ' 
                    </button>
                    <a href="newsUser" class="btn btn-large btn-success">
                        <i class="glyphicon glyphicon-backward"></i> &nbsp;' . ($lang_active === "ru" ? "Обратно к списку" : " Tagasi nimekirja") . '
                    </a>
                </td>
            </tr>

            </table>
            </form>
            ' ?>
            <?php
        }
        ?>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php"; ?>
