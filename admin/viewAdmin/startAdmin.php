<?php ob_start() ?>
    <article>
        <div id="main" class="container">
            <h3>Administraatori paneel</h3>
            <div class="row">
                <p>Tere tulemast administraatori paneelile.</p>
            </div>
        </div>
    </article>

<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php";
