<?php
$isEasy = false;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php if($isEasy){
        echo "cest facile";
    }else{
        echo "cest difficile";
    } ?></p>
</body>
</html>