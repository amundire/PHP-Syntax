<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        X: <input type="text" name="num1" />
		Y: <input type="text" name="num2" />
        Z: <input type="text" name="num3" />
		<input type="submit" />
    </form>
    <?php
    $result = "";

    $a = intval($_GET['num1']);

    $b = intval($_GET['num2']);

    $c = intval($_GET['num3']);

    $negativeCount = 0;

    if ($a < 0) {
        $negativeCount++;
    }
    if ($b < 0) {
        $negativeCount++;
    }
    if ($c < 0) {
        $negativeCount++;
    }



    if ($negativeCount % 2 == 0) {
        $result = "Positive";
    } else {
        $result = "Negative";
    }
    if ($a == 0 || $b == 0 || $c == 0) {
        $result = "Positive";
    }

    echo $result;

    ?>
</body>
</html>