<html >
    <head>
 <title>Cadastro de Usuario</title>
 <link href="index.css" rel="stylesheet">
</head>
<body>

    <div class="box">
        
            <fieldset>
            <legend><b>CADASTRO DAS EQUIPES</b></legend>
    <form action="cadastro.php" method="post">
    <div class="inputbox">
                    <input type="text" name="matricula" id="matricula" class="inputUser" required>
                     <label type="matricula" class="labelInput">Matricula</label>
                </div><br><br>
                   <div class="inputbox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                     <label for="nome" class="labelInput">Nome</label>
                </div><br><br>
                <div class="inputbox">
                    <input type="text" name="sobrenome" id="sobrenome" class="inputUser" required>
                    <label type="sobrenome" class="labelInput">Sobrenome</label>
                </div><br><br>
      <div class="inputbox">  EQUIPE:</div>
        <?php
        require("conexao.php");
        $resultado= $pdo->query("SELECT codigo, descricao FROM TURMA");
        ?>
        <select name="equipe" id="equipe">
        <option>selecione...</option>
       
        <?php
        while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){?>
        <option value = <?php echo "{$linha['codigo']}";?> > <?php echo "{$linha['descricao']}";?> </option>
        <?php
        }
        ?>
        </select><br>
      
    <br>
        <div class="inputbox">
                    <input type="text" name="lider" id="lider" class="inputUser" required>
                     <label type="lider" class="labelInput">Lider</label>
                 </div><br>
        
        <input type="submit" name="btn_cadastrar" id="btn_cadastrar" value="Cadastrar">
    </fieldset>
    </div>
    
    </form>
</body>