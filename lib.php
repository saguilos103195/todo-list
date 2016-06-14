<?php


function deleteById($id)
{
    $link = new PDO('mysql:host=localhost;dbname=todo', "root", "p@");
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $link->prepare("DELETE FROM todolist WHERE id= :id");
    $statement->bindParam(':id', $id);
    $statement->execute();
}
function addTodo($title, $description, $date)
{
    $link = new PDO('mysql:host=localhost;dbname=todo', "root", "p@");
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $link->prepare("INSERT INTO todolist(title, description, date_created)
    VALUES(:title, :description, :date_created)");

    $statement->execute($todo = [
        'title' => $title,
        'description' => $description,
        'date_created' => $date
    ]
);
}
function getbyId($id)
{
    $link = new PDO('mysql:host=localhost;dbname=todo', "root", "p@");
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $link->prepare("SELECT * FROM todolist WHERE id= :id");
    $statement->bindParam(':id', $id);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function updatebyId($id, $title, $description, $date_created)
{
    $link = new PDO('mysql:host=localhost;dbname=todo', "root", "p@");
    $statement = $link->prepare("UPDATE todo.todolist SET title = :title, description = :description, date_created = :date_created WHERE id = :id");
    $statement->bindParam(':id', $id);
    $statement->bindParam(':title', $title);
    $statement->bindParam(':description', $description);
    $statement->bindParam(':date_created', $date_created);
    $statement->execute();
}





?>