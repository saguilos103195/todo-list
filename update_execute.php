<?php


$link = new PDO('mysql:host=localhost;dbname=todo', "root", "p@");
$statement = $link->prepare("UPDATE todo.todolist SET title = :title, description = :description, date_created = :date_created WHERE id = :id");
$statement->bindValue(':id', $_GET['id']);
$statement->bindValue(':title', $_POST['title']);
$statement->bindValue(':description', $_POST['description']);
$statement->bindValue(':date_created', $_POST['date_created']);
$statement->execute();

header("Location: index.php");
exit;



?>