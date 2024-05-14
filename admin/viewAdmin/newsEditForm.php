<?php ob_start(); ?>

<div class="container" style="min-height:400px;">
    <div class="col-md-11">

        <h2>Uudise muutmine</h2>
        <?php
        if (isset($test)) {
            if ($test == true) {
                ?>
                <div class="alert alert-info">
                    <strong>Kirje on muudetud.</strong>
                    <a href="newsAdmin">Uudiste nimekiri</a>
                </div>
                <?php
            } else if ($test == false) {
                ?>
                <div class="alert alert-warning">
                    <strong>Viga kirje muutmisel!</strong>
                    <a href="newsAdmin">Uudiste nimekiri</a>
                </div>
                <?php
            }
        } else {
            ?>
            <form method="POST" action="newsEditResult?id=<?php echo $id; ?>" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <tr>
                        <td>Uudise pealkiri</td>
                        <td>
                            <input type="text" name="title" class="form-control" required value="<?php echo $detail['title']; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>Uudise tekst</td>
                        <td>
                            <textarea rows="5" name="text" class="form-control" required><?php echo $detail['text']; ?></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>Kategooria</td>
                        <td>
                            <select name="idCategory" class="form-control">
                                <?php
                                foreach ($arr as $row) {
                                    echo '<option value="' . $row['id'] . '"';
                                    if ($row['id'] == $detail['category_id']) echo ' selected';
                                    echo '>' . $row['name'] . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>

                    <!-- Pilt -->
                    <tr>
                        <td>Vana pilt</td>
                        <td>
                            <div>
                                <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($detail['picture']) . '" />'; ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Uus pilt</td>
                        <td>
                            <div>
                                <input type="file" name="picture" style="color:black;">
                            </div>
                        </td>
                    </tr>
                    <!-- Pildi lõpp -->

                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary" name="save">
                                <span class="glyphicon glyphicon-edit"></span> Muuda
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
