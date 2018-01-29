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
    $result = 1;

    for ($i = 1; $i <= $a; $i++){

        $result *= $i;
    }
    echo $result;
    ?>
</body>
</html>