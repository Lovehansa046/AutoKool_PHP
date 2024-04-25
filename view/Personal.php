<?php
ob_start();
?>

<div class="container"> Meie Autojuht!</div>


<?php
Viewpersonal::viewPersonal($arr);
$content = ob_get_clean();
include_once 'view/layout.php';


?>