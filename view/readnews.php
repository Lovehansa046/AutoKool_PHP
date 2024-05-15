<?php
ob_start();
?>

<br>

<?php
ViewNews::readNews($n);

echo "<br>";
Controller::comments($_GET['id']);

echo "<br>";
ViewComments::commentsForm();

$content = ob_get_clean();
include_once 'view/layout.php';

?>