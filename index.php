<!-- Descrizione:
- Creare una variabile con un paragrafo di testo a vostra scelta.
- Stampare a schermo il paragrafo e la sua lunghezza.
- Una parola da censurare viene passata dall'utente tramite parametro GET.
- Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
    /* Creare una variabile con un paragrafo di testo a vostra scelta. */
    $text="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur dignissimos harum veniam at ex, recusandae ipsum nisi omnis dolorem et!";
    /* dumpo a schermo contenuto variabile e la sua lunghezza */
    var_dump($text);
    var_dump(strlen($text)); 

    /* inserisco lunghezza testo in una variabile */
    $length = strlen($text);

    /* Creo un parametro GET ed inserisco nella variabile la parola da censurare*/
    $paragraph = $_GET['paragraph'];
    /* dumpo a schermo la variabile da censurare*/
    var_dump($paragraph);

    /* Inserisco in una variabile il testo con la parola censurata */
    $censured_text = str_replace($paragraph, '***', $text);
    /* dumbo il testo con la parola censurata */
    var_dump($censured_text);
    /* dumbo la lunghezza del testo con la parola censurata */
    $length_text_censured = strlen($censured_text);

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
    <!-- Stampo a schermo il paragrafo -->
    <p>Sono un testo: <?php echo $text; ?></p>

    <!-- Stampo a schermo la sua lunghezza -->
    <p>La lunghezza del paragrafo è di <?php echo $length; ?> caratteri </p>

    <!-- Stampo a schermo il paragrafo con la parola censurata -->
    <p>Sono un testo censurato: <?php echo $censured_text; ?></p>

    <!-- Stampo a schermo la lunghezza del paragrafo censurato -->
    <p>La lunghezza del paragrafo censurato è di <?php echo $length_text_censured; ?> caratteri </p>


</body>
</html>