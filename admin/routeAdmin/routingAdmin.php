<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

if ($path == '' or $path == 'index.php') {
    // Главная страница -
    $response = ControllerAdmin::formLoginSite();
} // ---- ВХОД ----
elseif ($path == 'login') {
    // Форма входа
    $response = ControllerAdmin::loginAction();
} elseif ($path == 'logout') {
    // Выход
    $response = ControllerAdmin::logoutAction();
} // listNews
elseif ($path == 'newsAdmin') {
    $response = ControllerAdminNews::newsListAdmin();
} elseif ($path == 'newsUser') {
    $response = ControllerAdminNews::newsList();
} elseif ($path == 'PersonalAccount') {
    $response = ControllerAdmin::PersonalAccount();
} // add news
elseif ($path == 'newsAdd') {
    $response = ControllerAdminNews::newsAddForm();
} elseif ($path == 'newsAddResult') {
    $response = ControllerAdminNews::newsAddResult();
} // edit news
elseif ($path == 'newsEdit' && isset($_GET['id'])) {
    $response = ControllerAdminNews::newsEditForm($_GET['id']);
} elseif ($path == 'newsEditResult' && isset($_GET['id'])) {
    $response = ControllerAdminNews::newsEditResult($_GET['id']);
} // delete news
elseif ($path == 'newsDel' && isset($_GET['application_id'])) {
    $response = ControllerAdminNews::newsDeleteForm($_GET['application_id']);
} elseif ($path == 'newsDelResult' && isset($_GET['application_id'])) {
    $response = ControllerAdminNews::newsDeleteResult($_GET['application_id']);
} // Страница не существует
else {
    $response = ControllerAdmin::error404();
}
