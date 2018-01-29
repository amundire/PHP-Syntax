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


    for ($currentRotation = 1; $currentRotation <= $num; $currentRotation++)
    {
        echo $a;
        echo " ";

        $newB = $a + $b;
        $a = $b;
        $b = $newB;
    }

    ?>
</body>
</html>