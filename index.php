<?php
    /* Creare una variabile con un paragrafo di testo a vostra scelta. */
    $text="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur dignissimos harum veniam at ex, recusandae ipsum nisi omnis dolorem et!";
    /* stampo a schermo contenuto variabile e la sua lunghezza */
    var_dump($text);
    var_dump(strlen($text)); 

    /* inserisco lunghezza testo in una variabile */
    $lenght = strlen($text);

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
    <p>Sono un testo di prova <?php echo $text; ?></p>
    <!-- Stampo a schermo la sua lunghezza -->
    <p>La lunghezza del paragrafo è di <?php echo $lenght; ?> caratteri </p>

</body>
</html>