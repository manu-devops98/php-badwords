<?php 
/* Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. */

$str = 'lorem ipsum dolor sit';
$stringUser = $_GET['name'];
$stringCensored = str_replace($stringUser, '***', $stringUser);
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
    <h1> <?php echo $str; ?> </h1>
    <p>Lunghezza paragrafo: <?php echo strlen($str); ?></p>
    <h3>Parola da censurare: <?php echo $stringUser; ?></h3>
    <h3>Lunghezza parola da censurare: <?php echo strlen($stringCensored); ?></h3>
    <h3>Parola censurata: <?php echo $stringCensored ?></h3>
  
    
</body>
</html>