<?php

require_once('lib.php');

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
                <input class="title" type="text" name="title" value="<?php print_r(getbyId($_GET['id'])['title']); ?>">
            </div>
            <div>
                <textarea class="desc" name="description" cols="30" rows="10"><?php print_r(getbyId($_GET['id'])['description']); ?></textarea>
            </div>
            <div>
                <input class="date" type="date" name="date_created" value="<?php print_r(getbyId($_GET['id'])['date_created']); ?>">
            </div>
            <div>
                <button class="btnadd" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>