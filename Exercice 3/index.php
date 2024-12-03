<?php
$age = 20;
$gender =  "Homme";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php if($gender == "Homme"){
echo "vous ete un homme";
    }else{
        echo " vous etes une femme";
    } if($age < 18){
        echo " vous etes mineur";
    }else{
        echo " vous etes majeur";
    } ?></p>
</body>
</html>