<?php
ob_start();
?>
<h1>TOP 3 UUDIST</h1>
<br>
<?php

ViewNews::newsByCategory($arr);

$content = ob_get_clean();

include_once 'view/layout.php';

?>