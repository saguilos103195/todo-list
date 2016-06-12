<?php

$link = new PDO('mysql:host=localhost;dbname=todo', "root", "p@");
$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $link->prepare("DELETE FROM todolist WHERE id= :id");
$statement->bindParam(':id', $_GET['id']);
$statement->execute();

?>