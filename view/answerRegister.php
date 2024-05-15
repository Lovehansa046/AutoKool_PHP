<?php
ob_start();

if (isset($result)) {
    if ($result[0] == true) {
<<<<<<< HEAD
        ?>
        <div class="container">
            <div class="alert alert-info">
                <strong>Kasutaja on lisatud.</strong>
                <a href="admin/"> Juhtpaneel</a>
            </div>
        </div>
        <?php
    } else if ($result[0] == false) {
        ?>
        <div class="container">
            <div class="alert alert-warning">
                <strong>Viga!</strong> <?php echo $result[1]; ?>
                <a href="registerForm">Registreerimisvorm</a>
            </div>
        </div>
        <?php
=======
?>
        <div class="container">
            <div class="alert alert-info">
                <strong>Пользователь добавлен. </strong>
                <a href="admin/"> Dashboard</a>
            </div>
        </div>
    <?php
    } else if ($result[0] == false) {
    ?>
        <div class="container">
            <div class="alert alert-warning">
                <strong>Ошибка!</strong> <?php echo $result[1]; ?>
                <a href="registerForm">Форма регистрации</a>
            </div>
        </div>
<?php
>>>>>>> c65e37a514936309e99c24d177af379eefb808f9
    }
}
?>
<?php $content = ob_get_clean(); ?>

<?php include "view/layout.php";
