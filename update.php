<?php

$link = new PDO('mysql:host=localhost;dbname=todo', "root", "p@");
$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $link->prepare("SELECT * FROM todolist WHERE id= :id");
$statement->bindParam(':id', $_GET['id']);
$statement->execute();

$result = $statement->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="wrapper">
    <div class="clearfix">

        <form action="update_execute.php?id=<?php print_r($_GET['id']); ?>" method="POST">
            <div>
                <input class="title" type="text" name="title" value="<?php print_r($result['title']); ?>">
            </div>
            <div>
                <textarea class="desc" name="description" cols="30" rows="10"><?php print_r($result['description']); ?></textarea>
            </div>
            <div>
                <input class="date" type="date" name="date_created" value="<?php print_r($result['date_created']); ?>">
            </div>
            <div>
                <button class="btnadd" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>