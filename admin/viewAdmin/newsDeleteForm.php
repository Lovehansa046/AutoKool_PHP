<<<<<<< HEAD
<?php ob_start(); 
$lang_active = getCookieValue('lang');
?>
=======
<?php ob_start(); ?>
>>>>>>> 234c80a7aef3e775749dac95c6a0f42048624d4d

<div class="container" style="min-height:400px;">
    <div class="col-md-11">

        <h2>Uudiste kustutamine</h2>
        <?php
        if (isset($test)) {
            if ($test == true) {
                ?>
                <div class="alert alert-info">
                    <strong>Kirje on kustutatud. </strong>
                    <a href="newsAdmin"> Uudiste nimekiri</a>
                </div>
                <?php
            } else if ($test == false) {
                ?>
                <div class="alert alert-warning">
                    <strong>Viga kirje kustutamisel!</strong>
                    <a href="newsAdmin"> Uudiste nimekiri</a>
                </div>
                <?php
            }
        } else {
            ?>
            <form method="POST" action="newsDelResult?application_id=<?php echo $application_id; ?>"
                  enctype="multipart/form-data">
                <table class="table table-bordered">
                    <tr>
                        <td>Kasutajanimi</td>
                        <td><input type="text" name="username" class="form-control" required readonly
                                   value="<?php echo htmlspecialchars($_SESSION["name"]); ?>"></td>
                    </tr>

                    <tr>
                        <td>Nimi</td>
                        <td><input type="text" name="name" class="form-control" required readonly
                                   value="<?php echo $detail['name']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Perekonnanimi</td>
                        <td><input type="text" name="lastname" class="form-control" required readonly
                                   value="<?php echo $detail['lastname']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Kategooria</td>
                        <td>
                            <select name="idCategory" class="form-control">
                                <?php
                                foreach ($arr as $row) {
                                    echo '<option value="' . $row['category_id'] . '"';
                                    if ($row['category_id'] == $detail['category_id']) echo 'selected';
                                    echo '>' . $row['category_name_est'] . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary" name="save">
                                <span class="glyphicon glyphicon-remove"></span> Kustuta
                            </button>
                            <a href="newsAdmin" class="btn btn-large btn-success">
                                <i class="glyphicon glyphicon-backward"></i> &nbsp;Tagasi nimekirja
                            </a>
                        </td>
                    </tr>

                </table>
            </form>
            <?php
        }
        ?>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php"; ?>
