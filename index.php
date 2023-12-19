<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is a Multiplication table of 8</h1>
    <?php 
        $num = 8;
        for ($i=1; $i <= 12; $i++) { 
            echo $num . " x ". $i ." = ".$num * $i . "<br>" . "---------------<br>";
        }         
    ?>
</body>
</html>