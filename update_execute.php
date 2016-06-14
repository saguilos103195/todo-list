<?php

require_once('lib.php');
updatebyId($_GET['id'], $_POST['title'], $_POST['description'], $_POST['date_created']);


header("Location: index.php");
exit;



?>