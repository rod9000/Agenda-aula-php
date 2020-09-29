<!DOCTYPE HTML>
<html>
    <head>
        <title>Agenda 2.0</title>
        <meta charset = "UTF-8"/>
        <link rel="shortcut icon" href="imagens/icomush.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <body>
        <header>
            <div class="col-md-4 col-md-offset-4"><h3>Agenda 2.0 - TDS - SENAI</h3></div>
            <br/><br/>
        </header>
        <nav>
            <hr/>
        </nav>
        <section>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h3 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Login</h3></div>
                        <div class="panel-body">
                            <form name="login" id="login_usuario" action="login.php" method="post">
                            <label>Login</label> 
                            <input type="text" name="login" placeholder="Digite o seu login" maxlength="30" required="required" autofocus class="form-control" />
                            <br/>
                            <label>Senha</label> 
                            <input type="password" name="senha" placeholder="Digite a sua senha" maxlength="30"  required="required" class="form-control" />
                            <br/>
                            <input type="submit" value="Login" class="btn btn-primary" />
                        </div>
                </div>
            </div>
        </div>
        </section>
        <footer>
            <hr/>
            <div style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: DodgerBlue; color: white; text-align: center;">Agenda 2.0 Desenvolvido em Aula - Versão 1.0</div>
        </footer>
    </body>
</html>