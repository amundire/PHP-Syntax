<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>

Result:

<?php

$a = intval($_GET['num']);

echo $a * 2;

?>
<br>
<br>
<form>
    A: <input type="text" name="num"/>
    <br>
    <input type="submit"/>
</form>
</body>
</html>