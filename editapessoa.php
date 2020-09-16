<?php
    session_start();
    if($_SESSION["status"] !="OK"){
        header('location:index.php');
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Agenda 2.0</title>
        <meta charset = "UTF-8"/>
        <link rel="shortcut icon" href="imagens/icomush.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <div><h4>Agenda 2.0 - TDS - SENAI</h4></div>
            <hr/>
            <?php
                echo $_SESSION["user"];
                echo "<a href='sair.php' style='text-decoration: none; font-weight: bold;'>&nbsp;&nbsp;Sair</a>";
            ?>
        </header>
        <nav>
            <hr/>
            <?php
                include("menu.php");
            ?>
            <hr/>
        </nav>
        <section>
        <?php
                include("conecta.php");
                $id = $_GET['id'];
                $sql3 = mysqli_query($conn, "SELECT * FROM pessoa WHERE id='$id'") or die(mysqli_error($conn));
                while($pessoa = mysqli_fetch_array($sql3)){
            ?>
            <form action="editapessoabd.php?id=<?php echo $id; ?>" method="POST">
                <label>Tipo</label>
                <select name="tipopessoa">
                    <option value="fisica">Física</option>
                    <option value="juridica">Jurídica</option>
                </select>
                <br/><br/>
                <label>Nome</label>
                <input type="text" name="nome" value="<?php echo $pessoa['nome']; ?>"/>
                <br/><br/>
                <label>Endereço</label>
                <input type="text" name="endereco"value="<?php echo $pessoa['endereco']; ?>"/>
                <br/><br/>
                <label>Cidade</label>
                <input type="text" name="cidade"value="<?php echo $pessoa['cidade']; ?>"/>
                <br/><br/>
                <label>Estado</label>
                <input type="text" name="estado"value="<?php echo $pessoa['estado']; ?>"/>
                <br/><br/>
                <label>Celular</label>
                <input type="tel" name="celular"value="<?php echo $pessoa['celular']; ?>"/>
                <br/><br/>
                <label>E-mail</label>
                <input type="email" name="email"value="<?php echo $pessoa['email']; ?>"/>
                <br/><br/>
                <label>Data de Nascimento</label>
                <input type="date" name="datanascimento"value="<?php echo $pessoa['datanascimento']; ?>"/>
                <br/><br/>
                <label>Profissão</label>
                <input type="text" name="profissao"value="<?php echo $pessoa['profissao']; ?>"/>
                <br/><br/>
                <button type="submit" class="btn btn-success">Atualiza Pessoa / Empresa</button>
            </form>
            <?php
                }
                mysqli_close($conn);
            ?>
        </section>
        <footer>
            <hr/>
            <div>Agenda 2.0 Desenvolvido em Aula - Versão 1.0</div>
        </footer>
    </body>
</html>