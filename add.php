<?php


$link = new PDO('mysql:host=localhost;dbname=todo', "root", "p@");
$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $link->prepare("INSERT INTO todolist(title, description, date_created)
    VALUES(:title, :description, :date_created)");

$statement->execute($todo = [
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'date_created' => $_POST['date']
]
);

header("Location: index.php");
exit;


?>