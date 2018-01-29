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
    $num = intval($_GET['num']);

    $a = 1;
    $b = 1;
    $c = 2;

    for ($currentRotation = 0; $currentRotation < $num; $currentRotation++)
    {
        echo $a;
        echo " ";

        $result = $a + $b + $c;
        $a = $b;
        $b = $c;
        $c = $result;
    }

    ?>
</body>
</html>