<?php ob_start(); ?>

<div class="profile-card">
    <h2>Isiklik konto</h2>
    <form>
        <div class="form-group">
            <label for="username">Kasutajanimi</label>
            <input type="text" class="form-control" id="username" value="<?php echo htmlspecialchars($_SESSION["name"]); ?>" disabled>
        </div>
        <div class="form-group">
            <label for="email">E-post</label>
            <input type="email" class="form-control" id="email" value="<?php echo htmlspecialchars($_SESSION["email"]); ?>" disabled>
        </div>
<!--        <div class="form-group">-->
<!--            <label for="password">Uus parool</label>-->
<!--            <input type="password" class="form-control" id="password" placeholder="Sisestage uus parool">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label for="confirm-password">Kinnitage parool</label>-->
<!--            <input type="password" class="form-control" id="confirm-password" placeholder="Korrake uut parooli">-->
<!--        </div>-->
<!--        <button type="submit" class="btn btn-primary btn-block">Salvesta muudatused</button>-->
    </form>
    <hr>
<!--    <div class="text-center">-->
<!--        <a href="#" class="text-danger">Kustuta konto</a>-->
<!--    </div>-->
    <div class="text-center mt-3">
        <a href="logout" class="btn btn-outline-danger">Logi välja <i class="fas fa-sign-out-alt"></i></a>
    </div>

</div>

<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php"; ?>
