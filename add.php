<?php

require_once('lib.php');

addTodo($_POST['title'], $_POST['description'], $_POST['date']);

header("Location: index.php");
exit;


?>