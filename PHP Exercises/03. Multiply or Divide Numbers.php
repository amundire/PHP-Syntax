<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<?php

$a = intval($_GET['num1']);
$b = intval($_GET['num2']);

if ($b >= $a){
    echo $a * $b;
}
else {
    echo $a / $b;
}
?>
    <form>
        N: <input type="text" name="num1" />
		M: <input type="text" name="num2" />
        <input type="submit" />
    </form>
	<!--Write your PHP Script here-->
</body>
</html>