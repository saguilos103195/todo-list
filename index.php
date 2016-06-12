<?php


$db = new PDO('mysql:host=localhost;dbname=todo', "root", "p@");

$data = $db->query('SELECT * FROM todolist');
$result = $data->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html>
<head>
    <title>To-do List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="wrapper">
    <div class="clearfix">
        <form action="add.php" method="POST">
            <div>
                <input class="title" type="text" name="title">
            </div>
            <div>
                <textarea class="desc" name="description" cols="30" rows="10"></textarea>
            </div>
            <div>
                <input class="date" type="date" name="date">
            </div>
            <div>
                <button class="btnadd" type="submit">Add</button>
            </div>
        </form>

        <?php

        foreach ($result as $perresult) {
                echo "<form action=delete.php method=POST";
                echo "<h1>$perresult[title]</h1>";
                echo "<p>$perresult[description]</p>";
                echo "<p>$perresult[date_created]</p>";
                echo "<a class=btnadd href=delete.php?id=";
                echo $perresult[id];
                echo ">Delete</a><br>";;
                echo "<a class=btnadd href=update.php?id=";
                echo $perresult[id];
                echo " && title=";
                echo $perresult[title];
                echo " && description=";
                echo $perresult[description];
                echo " && date_created=";
                echo $perresult[date_created];
                echo ">Update</a><br>";;

        }


        ?>

    </div>
</div>

</body>
</html>