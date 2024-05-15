<?php ob_start();

$lang_active = getCookieValue('lang');

?>

<div class="container" style="min-height:400px;">
    <div class="col-md-11">


        <?php
        echo '
        <h2>' . ($lang_active === "ru" ? "Удаление заявки" : "Päringuse kustutamine") . '</h2>
        ' ?>
        <h2></h2>
        <?php
        if (isset($test)) {
            if ($test == true) {
                ?>
                <?php
                echo '
                <div class="alert alert-info">
                    <strong>' . ($lang_active === "ru" ? "Заявка удалена." : "Päringuse kustutatud. ") . '</strong>
                    <a href="newsAdmin"> ' . ($lang_active === "ru" ? "Список заявки" : "Päringust loend") . '</a>
                </div>
                ' ?>
                <?php
            } else if ($test == false) {
                ?>
                <?php
                echo '
                <div class="alert alert-info">
                    <strong>' . ($lang_active === "ru" ? "Ошибка удаления записи!" : "Viga kirje kustutamisel!") . '</strong>
                    <a href="newsAdmin"> ' . ($lang_active === "ru" ? "Список заявок" : "Päringust nimekiri") . '</a>
                </div>
                ' ?>
                <div class="alert alert-warning">
                    <strong>Ошибка удаления записи!</strong>
                    <a href="newsAdmin">Список новостей</a>
                </div>
                <?php
            }
        } else {
        ?>
        <form method="POST" action="newsDelResult?application_id=<?php echo $application_id; ?>"
              enctype="multipart/form-data">
            <table class="table table-bordered">
                <tr>
                    <?php echo '
                        <td>' . ($lang_active === "ru" ? "Имя пользователя" : "Kasutajanimi") . '</td>
                        ' ?>
                    <td><input type="text" name="username" class="form-control" required readonly
                               value="<?php echo htmlspecialchars($_SESSION["name"]); ?>"></td>
                </tr>

                <tr>
                    <?php echo '
                        <td>' . ($lang_active === "ru" ? "Имя" : "Nimi") . '</td>
                        ' ?>
                    <td><input type="text" name="name" class="form-control" required readonly
                               value="<?php echo $detail['name']; ?>"></td>
                </tr>

                <tr>
                    <?php echo '
                        <td>' . ($lang_active === "ru" ? "Фамилия" : "Perekonnanimi") . '</td>
                        ' ?>
                    <td><input type="text" name="lastname" class="form-control" required readonly
                               value="<?php echo $detail['lastname']; ?>"></td>
                </tr>

                <tr>
                    <?php echo '
                        <td>' . ($lang_active === "ru" ? "Категории" : "Kategooria") . '</td>
                        ' ?>

                    <td>
                        <select name="idCategory" class="form-control">
                            <?php
                            foreach ($arr as $row) {
                                echo '<option value="' . $row['category_id'] . '"';
                                if ($row['category_id'] == $detail['category_id']) echo 'selected';
                                echo '>' . $row['category_name_est'] . '</option>';
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
                                <span class="glyphicon glyphicon-plus"></span>' . ($lang_active === "ru" ? "Удалить" : " Kustuta") . '
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
