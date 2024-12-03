<?php
$age = 24;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php if($age < 18 ){
        echo "vous etes mineur";
    }else{
       echo "Vous etes majeur";
    } ?></p>
</body>
</html>