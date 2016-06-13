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
                <input class="title" type="text" placeholder="Enter Title" name="title">
            </div>
            <div>
                <textarea class="desc" name="description" placeholder="Write something." cols="30" rows="10"></textarea>
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
                echo "<form class=todogui action=delete.php method=POST";
                echo "<h1>$perresult[title]</h1>";
                echo "<p>$perresult[description]</p>";
                echo "<p>$perresult[date_created]</p>";
                echo "<a class=cont mod href=delete.php?id=";
                echo $perresult[id];
                echo ">Delete</a><br>";;
                echo "<a class=cont mod href=update.php?id=";
                echo $perresult[id];
                echo ">Update</a><br>";;
                echo "</form>";

        }


        ?>

    </div>
</div>

</body>
</html>