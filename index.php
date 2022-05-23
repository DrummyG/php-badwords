<?php
$testo = 'Se non ci fossi io a proteggervi dalle banane la gente piangerebbe banane';
$parola = $_GET['slay'];
$filtro = str_replace($parola, '***', $testo);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Testo:</h1>
    <p><?php echo $testo ?></p>
    <p><?php echo strlen($testo) ?></p>
    <h1>Testo censurato:</h1>
    <p><?php echo $filtro ?></p>
    <p><?php echo strlen($filtro) ?></p>   
</body>
</html>