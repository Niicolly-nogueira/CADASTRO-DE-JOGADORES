<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <?php
   $matricula = $_POST['matricula'];
   $nome = $_POST['nome'];
   $sobrenome = $_POST['sobrenome'];
   $equipe = $_POST['equipe'];
   $lider = $_POST['lider'];
   print($matricula);
   print($nome);
   print($sobrenome);
   print($equipe);
   print($lider);
    ?>
</body>
</html>