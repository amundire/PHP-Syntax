<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
    <?php

    $a = intval($_GET['num']);

    for ($i = $a; $i > 0; $i--){
        echo $i;
        echo " ";
    }

    ?>
</body>
</html>