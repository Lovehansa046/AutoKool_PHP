<?php ob_start(); ?>

<h2>Päringute nimekiri</h2>

<div class="container" style="min-height:400px;">
    <div style="margin:20px;">
        <a href="newsAdd" class="btn btn-primary" role="button">Lisa päring</a>
    </div>
    <div class="col-md-11">
        <table class="table table-bordered table-responsive">
            <tr>
                <th width="10%">ID</th>
                <th width="70%">Pealkiri</th>
                <th width="20%"></th>
            </tr>
            <?php

            foreach ($arr as $row) {
                echo '<tr>';

                echo '<td>' . $row['application_id'] . '</td>';

                echo '<td><b>Nimi: </b>' . $row['name'] . '<br>';
                echo '<b>Perenimi: </b><i>' . $row['lastname'] . '</i><br>';
                echo '<b>Kategooria: </b><i>' . $row['category_id'] . '</i><br>';


                echo '</td>';

                echo '<td>
                    
                    <a href="newsDel?application_id=' . $row['application_id'] . '">Kustuta <span class="glyphicon
                    glyphicon-remove" aria-hidden="true"></span></a>
                    </td>';

                echo '</tr>';
            }

            ?>
        </table>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php include "viewAdmin/templates/layout.php"; ?>

<!--<a href="newsEdit?id=' . $row['id'] . '">Muuda <span class="glyphicon-->
<!--                    glyphicon-edit" aria-hidden="true"></span></a>-->

