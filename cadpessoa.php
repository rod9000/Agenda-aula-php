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
            <form action="cadastrapessoa.php" method="POST">
                <label>Tipo</label>
                <select name="tipopessoa">
                    <option value="fisica">Física</option>
                    <option value="juridica">Jurídica</option>
                </select>
                <br/><br/>
                <label>Nome</label>
                <input type="text" name="nome">
                <br/><br/>
                <label>Endereço</label>
                <input type="text" name="endereco">
                <br/><br/>
                <label>Cidade</label>
                <input type="text" name="cidade">
                <br/><br/>
                <label>Estado</label>
                <input type="text" name="estado">
                <br/><br/>
                <label>Celular</label>
                <input type="tel" name="celular">
                <br/><br/>
                <label>E-mail</label>
                <input type="email" name="email">
                <br/><br/>
                <label>Data de Nascimento</label>
                <input type="date" name="datanascimento">
                <br/><br/>
                <label>Profissão</label>
                <input type="text" name="profissao">
                <br/><br/>
                <button type="submit" class="btn btn-success">Gravar Pessoa / Empresa</button>
            </form>
        </section>
        <footer>
            <hr/>
            <div>Agenda 2.0 Desenvolvido em Aula - Versão 1.0</div>
        </footer>
    </body>
</html>