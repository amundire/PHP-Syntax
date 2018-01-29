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
    $n = intval($_GET['num']);

    for($i = $n-1; $i > 0; $i--)
    if($n % $i != 0){
        echo $i.' ';
    }
    ?>
</body>
</html>