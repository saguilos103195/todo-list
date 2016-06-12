<?php


?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="wrapper">
    <div class="clearfix">
    <?php echo $_GET['id']  ?>
        <form action="update_execute.php" method="POST">
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
                <button class="btnadd" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>