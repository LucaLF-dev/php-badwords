
<?php

$text_germany = 'A bocce ferme, rimane probabile in primavera l’apertura di una procedura per deficit eccessivo (previsto al 4,4% del PIL nel 2024), quando verrà a scadere la sospensione delle regole di bilancio decisa al momento dello scoppio della pandemia. D’altro canto, ancora una volta, l’Italia è ritenuto tra i paesi segnati da uno squilibrio macroeconomico, per via dell’elevato debito pubblico e della bassa competitività. Nella stessa situazione sono la Germania, la Francia, l’Olanda e altri otto paesi.';


$replace =$_POST['replace_word'];


$choosed_text = $_POST['what-text'];

$new_text = str_replace($replace,'***',$choosed_text);

var_dump($choosed_text)


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina Parola</title>
</head>

<body>

<h1> Manovra, da Bruxelles arriva un sì con riserva. Bocciata la Francia
</h1>

<p> <?php echo $text_germany ?></p>


<p> Lunghezza testo originale : <?php echo  strlen($text_germany) ?> caratteri </p>


<p> <?php echo str_replace($replace,'***',$text_germany); ?></p>

<p> Lunghezza testo rimpiazzato : <?php echo  strlen($new_text) ?> caratteri </p>





</body>

</html>