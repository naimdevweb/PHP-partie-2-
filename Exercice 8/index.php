<?php
$isOk = true;
//   echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p><?php if($isOk){
echo 'c\'est pas bon !!!';
    }else{
        echo 'c\'est ok !!';
    } 
     ?></p>
</body>
</html>