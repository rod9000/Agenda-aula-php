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
        </header>
        <nav>
            <hr/>
        </nav>
        <section>
            <div class="mx-auto" style="width: 300px;">
            <form action="login.php" method="post">
                <fieldset>
                <legend>Login</legend>
                <label>Login</label>
                <input type="text" name="login" class="form-control" required/>
                <br/>
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" required/>
                <br/>
                <button type="submit" class="btn btn-outline-success">Entrar</button>
                </fieldset>
            </form>
            </div>
        </section>
        <footer>
            <hr/>
            <div>Agenda 2.0 Desenvolvido em Aula - Versão 1.0</div>
        </footer>
    </body>
</html>