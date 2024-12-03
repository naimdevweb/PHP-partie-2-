<?php
$age = 18;
//   echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p><?php if($age >= 18){
echo 'Tu est majeur';
    }else{
        echo  'Tu n\'es pas majeur';
    } 
     ?></p>
</body>
</html>