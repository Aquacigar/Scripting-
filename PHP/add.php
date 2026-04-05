<html>
<head>
    <title>Addition Program</title>
</head>
<body>

<h2>Addition of Two Numbers</h2>

<form method="post">
    Enter First Number:
    <input type="number" name="num1"><br><br>

    Enter Second Number:
    <input type="number" name="num2"><br><br>

    <input type="submit" value="Add">
</form>

<?php
if($_POST)
{
    $a = $_POST['num1'];
    $b = $_POST['num2'];

    $sum = $a + $b;

    echo "<h3>Sum is: $sum</h3>";
}
?>

</body>
</html>