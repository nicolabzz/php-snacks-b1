<!-- 
## Snack 2
Passare come parametri GET name, mail ed age.
Verificare (cercando i metodi che non conosciamo nella documentazione) che:
- name sia più lungo di 3 caratteri
- che mail contenga un punto, una chiocciola
- che age sia un numero

Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack2</title>
</head>

<body>
  <?php
  if (isset($_GET["name"]) && isset($_GET["mail"]) && isset($_GET["age"])) {
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

    if (strlen($name) < 4 || !(in_array('@', $mail) || in_array('.', $mail)) || !(is_numeric($age))) {
      $alert = "ACCESSO NEGATO... Please rememer that: NAME must be at least 4 characters long, EMAIL must have '@' and a '.' and the age must be a number. Thank you.";
    }
    else {
      $message = 'Accesso riuscito!';
    }
  }
  ?>
  <form action="" method="get">
    <label for="name">Name</label>
    <br>
    <input type="text" name="name" id="name" value="<?= $name ?>">
    <br>
    <label for="mail">Email</label>
    <br>
    <input type="text" name="mail" id="mail" value="<?= $mail ?>">
    <br>
    <label for="age">Age</label>
    <br>
    <input type="text" name="age" id="age" value="<?= $age ?>">
    <br>
    <button>Cechk</button>
  </form>

  <h1 style="text-align: center; color: crimson;"><?= $alert ?></h1>
  <h1 style="text-align: center; color: greenyellow;"><?= $message ?></h1>
</body>

</html>