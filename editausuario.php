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
        </nav>
        <section>
            <?php
                include("conecta.php");
                $id = $_GET['id'];
                $sql2 = mysqli_query($conn, "SELECT * FROM usuario WHERE id='$id'") or die(mysqli_error($conn));
                while($usuario = mysqli_fetch_array($sql2)){
            ?>
            <br/><br/>
            <div class="mx-auto" style="width: 500px;">
            <form action="editausuariobd.php?id=<?php echo $id; ?>" method="POST">
                <label>Nome</label>
                <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>"/>
                <br/><br/>
                <label>Login</label>
                <input type="text" name="login" value="<?php echo $usuario['login']; ?>"/>
                <br/><br/>
                <label>Senha</label>
                <input type="password" name="senha" value="<?php echo $usuario['senha']; ?>"/>
                <br/><br/>
                <label>Tipo do usuário</label>
                <select name="tipo">
                    <option value="admin">admin</option>
                    <option value="normal">normal</option>
                </select>
                <br/><br/>
                <button type="submit" class="btn btn-outline-success">Editar Usuário</button>
            </form>
            <?php
                }
                mysqli_close($conn);
            ?>
            </div>
            <br/>
            <?php
                include("conecta.php");
                echo "<h4>Usuários Cadastrados</h4>";
                $sql = mysqli_query($conn, "SELECT * FROM usuario");
                echo "<table border=1";
                echo "<tr>";
                    echo "<th>Nome</th>";
                    echo "<th>Login</th>";
                    echo "<th>Tipo</th>";
                    echo "<th>Ações</th>";
                echo "</tr>";
                while($usuario = mysqli_fetch_array($sql)){
                    echo "<tr>";
                        $id = $usuario['id'];
                        echo "<td>".$usuario['nome']."</td>";
                        echo "<td>".$usuario['login']."</td>";
                        echo "<td>".$usuario['tipo']."</td>";
                        echo "<td><a href='editausuario.php?id=$id'><button type='submit' class='btn btn-success'>Editar</button></a>&nbsp;&nbsp;<a href='apagausuario.php?id=$id'><button type='submit' class='btn btn-danger'>Apagar</button></a></td>";
                    echo "</tr>";
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