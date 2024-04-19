<?php ob_start(); ?>

<div class="profile-card">
    <h2>Личный кабинет</h2>
    <form>
        <div class="form-group">
            <label for="username">Имя пользователя</label>
            <input type="text" class="form-control" id="username" value="<?php echo htmlspecialchars($_SESSION["name"]); ?>" disabled>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" value="<?php echo htmlspecialchars($_SESSION["email"]); ?>" disabled>
        </div>
        <div class="form-group">
            <label for="password">Новый пароль</label>
            <input type="password" class="form-control" id="password" placeholder="Введите новый пароль">
        </div>
        <div class="form-group">
            <label for="confirm-password">Подтвердите пароль</label>
            <input type="password" class="form-control" id="confirm-password" placeholder="Повторите новый пароль">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Сохранить изменения</button>
    </form>
    <hr>
    <div class="text-center">
        <a href="#" class="text-danger">Удалить аккаунт</a>
    </div>
    <div class="text-center mt-3">
        <a href="logout" class="btn btn-outline-danger">Выйти <i class="fas fa-sign-out-alt"></i></a>
    </div>

</div>

<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php"; ?>
