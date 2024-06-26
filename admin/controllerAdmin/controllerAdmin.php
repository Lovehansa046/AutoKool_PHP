<?php
class ControllerAdmin
{

    public static function PersonalAccount() {
        include_once ('viewAdmin/PersonalAccount.php');
    }
    public static function formLoginSite()
    {
        include_once('viewAdmin/formLogin.php');
    }
    // Форма авторизации админа
    public static function loginAction()
    {
        $logIn = ModelAdmin::userAuthentication();
        if (isset($logIn) and $logIn == true) {
            include_once('viewAdmin/PersonalAccount.php');
        } else {
            $_SESSION['errorString'] = 'Vale kasutajanimi või parool';
            include_once('viewAdmin/formLogin.php');
        }
    }
    // Выход из админ-панели
    public static function logoutAction()
    {
        ModelAdmin::userLogout();
        include_once('viewAdmin/formLogin.php');
    }
    // Страница Error
    public static function error404()
    {
        include_once('viewAdmin/error404.php');
    }
}  // end class
