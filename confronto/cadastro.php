<?php
$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$equipe = $_POST['equipe'];
$lider = $_POST['lider'];


require("conexao.php");
$res = $pdo->prepare("INSERT INTO ALUNO (MATRICULA, NOME, SOBRENOME, EQUIPE, LIDER) VALUES (:matricula, :nome, :sobrenome, :equipe, :lider)");
$res->bindparam(":matricula", $matricula);
$res->bindparam(":nome", $nome);
$res->bindparam(":sobrenome", $sobrenome);
$res->bindparam(":equipe", $equipe);
$res->bindparam(":lider", $lider);
$res->execute();

?>