<?php ob_start(); ?>

    <h2>News List</h2>

    <div class="container" style="min-height:400px;">
        <div style="margin:20px;">
            <a href="newsAdd" class="btn btn-primary" role="button">Добавить новость</a>
        </div>
        <div class="col-md-11">
            <table class="table table-bordered table-responsive">
                <tr>
                    <th width="10%">ID</th>
                    <th width="70%">Header News</th>
                    <th width="20%"></th>
                </tr>
                <?php

                foreach ($arr as $row) {
                    echo '<tr>';

                    echo '<td>' . $row['application_id'] . '</td>';

                    echo '<td><b>Name: </b>' . $row['name'] . '<br>';
                    echo '<b>Lastname: </b><i>' . $row['lastname'] . '</i><br>';
                    echo '<b>Category: </b><i>' . $row['category_id'] . '</i><br>';


                    echo '</td>';

                    echo '<td>
                    
                    <a href="newsDel?id=' . $row['application_id'] . '">Delete <span class="glyphicon
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

<!--<a href="newsEdit?id=' . $row['id'] . '">Edit <span class="glyphicon-->
<!--                    glyphicon-edit" aria-hidden="true"></span></a>-->

