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
            <div>
            <form action="procura.php" method="GET">
                <label>Digite a sua procura</label>
                <input type="text" name="procura">
                <br/><br/>
                <button type="submit" class="btn btn-success">Procurar</button>
            </form></div>
            <br/>
            <hr/>
            <center><h4>A | B | C | D | E | F | G | H | I | J | L | M | N | O | P | Q | R | S | T | U | V | X | W | Y | Z</h4></center>
            <br/>
            <a href="cadpessoa.php">Cadastrar Pessoa</a><br/>
            <?php
                include("conecta.php");
                echo "<h4>Pessoas Cadastradas</h4>";
                $sql = mysqli_query($conn, "SELECT * FROM pessoa");
                echo "<table border=1";
                echo "<thead>";
                echo "<tr>";
                    echo "<th>Nome</th>";
                    echo "<th>Celular</th>";
                    echo "<th>E-mail</th>";
                    echo "<th>Tipo</th>";
                    echo "<th>Ações</th>";
                echo "</tr>";
                echo "</thead>";
                while($pessoa = mysqli_fetch_array($sql)){
                    echo "<tbody>";
                    echo "<tr>";
                        $id = $pessoa['id'];
                        echo "<td>".$pessoa['nome']."</td>";
                        echo "<td>".$pessoa['celular']."</td>";
                        echo "<td>".$pessoa['email']."</td>";
                        echo "<td>".$pessoa['tipo']."</td>";
                        echo "<td><a href='editapessoa.php?id=$id'><button type='submit' class='btn btn-success'>Editar</button></a>&nbsp;&nbsp;<a href='apagapessoa.php?id=$id'><button type='submit' class='btn btn-danger'>Apagar</button></a></td>";
                    echo "</tr>";
                    echo "</tbody>";
                }
                mysqli_close($conn);
            ?>
        </section>
        <footer>
            <hr/>
            <div>Agenda 2.0 Desenvolvido em Aula - Versão 1.0</div>
            <hr/>
        </footer>
    </body>
    
</html>