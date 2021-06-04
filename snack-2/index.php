<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>snack-2</title>
</head>
<body>
  <?php
  
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];

  if (empty($name) || empty($mail) || empty($age)) {
    echo "Errore: inserisci tutti i campi.";
  } elseif (iconv_strlen($name) < 3) {
    echo "Errore: inserire nome valido.";
  } elseif (strpos($mail, "@") === false || strpos($mail, ".") === false) {
    echo "Errore: inserire indirizzo mail valido.";
  } elseif (!is_numeric($age)) {
    echo "Errore: età non valida, inserire un numero.";
  } else {
    echo "Accesso autorizzato.";
  }

  ?>
</body>
</html>