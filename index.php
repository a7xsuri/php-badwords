<?php 
$string = "Se introduci un po' di anarchia… se stravolgi l'ordine prestabilito… tutto diventa improvvisamente caos. Io sono un agente del caos. E sai qual è il bello del caos? È equo.";
 $_GET['parola'];
 $LunghezzaString = strlen($string);
 if(isset($_GET['parola'])){
    $Censuredstring = str_replace($_GET['parola'], '***', $string );
    $LunghezzaCensuredstring = strlen($Censuredstring);
 }

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
    <div> <?php echo $string ?></div>
    <p> <?php echo $LunghezzaString ?></p>
    <div> <?php echo $Censuredstring ?></div>
    <p> <?php echo $LunghezzaCensuredstring ?></p>
</body>
</html>