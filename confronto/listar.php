<?php
require("conexao.php");
$resultado = $pdo->query("SELECT matricula, nome, sobrenome, equipe, lider FROM ALUNO");
?>
<?php 
while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){?>
    <tr>
        <td><?php echo "{$linha['matricula']}";?> </td>
        <td><?php echo "{$linha['nome']}";?> </td>
        <td><?php echo "{$linha['sobrenome']}";?> </td>
        <td><?php echo "{$linha['equipe']}";?> </td>
        <td><?php echo "{$linha['lider']}";?> </td>
    </tr>
  <?php  
}
?>
<?php

?>
