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

  if (iconv_strlen($name) > 3 && strpos($mail, "@") !== false && strpos($mail, ".") !== false && is_numeric($age) === true) {
    $msg = "Accesso riuscito <ul><li> Nome: " . $name . "</li><li>" . "Email: " . $mail . "</li><li>" . "Età: " . $age . "</li>";
    echo $msg;
  } else {
    echo "Accesso negato";
  }

  ?>
</body>
</html>