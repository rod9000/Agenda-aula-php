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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    </head>
    <body>
        <header>
        <div class="col-md-4 col-md-offset-4"><h3>Agenda 2.0 - TDS - SENAI</h3></div>
        <br/><br/>
        </header>
        <nav>
        <hr/>
        <div class="col-xs-8 col-xs-offset-2">
            <div class="col-xs-6 col-xs-offset-0">
            <?php
                include("menu.php");
            ?>
           </div>
           <div class="col-xs-4 col-xs-offset-1">
           <?php
                echo "<span class='glyphicon glyphicon-user' aria-hidden='true'></span>";
                echo $_SESSION["user"];
                echo "<a href='sair.php' style='text-decoration: none; font-weight: bold;'>&nbsp;&nbsp;Sair</a>";
            ?>
            </div>
        </div>
        <br/>
        </nav>
        <section>
        <br/><br/>
        <div style="width: 65%; padding-left:5%; padding-right:5%;">
        <div class="panel panel-primary">
            <div class="panel-heading"><h3 class="panel-title"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>&nbsp;Cadastro de Pessoas</h3></div>
                <div class="panel-body">
                    <form name="cadpessoa" id="cadpessoa" action="cadastrapessoa.php" method="post">
                        <label>Tipo</label>
                        <select name="tipopessoa" autofocus required="required" class="form-control">
                            <option value="fisica">Física</option>
                            <option value="juridica">Jurídica</option>
                        </select>
                        <br/>
                        <label>Nome</label>
                        <input type="text" name="nome" placeholder="Digite o nome" maxlength="85" required="required" class="form-control">
                        <br/>
                        <label>Endereço</label>
                        <input type="text" name="endereco" placeholder="Digite o endereço" maxlength="85" required="required" class="form-control">
                        <br/>
                        <label>Cidade</label>
                        <input type="text" name="cidade" placeholder="Digite a cidade" maxlength="80" class="form-control">
                        <br/>
                        <label>Estado</label>
                        <input type="text" name="estado" placeholder="Digite o estado" maxlength="30" class="form-control">
                        <br/>
                        <label>Celular</label>
                        <input type="tel" name="celular" placeholder="Digite o celular" maxlength="30" required="required" class="form-control">
                        <br/>
                        <label>E-mail</label>
                        <input type="email" name="email" placeholder="Digite um e-mail válido" maxlength="90" required="required" class="form-control">
                        <br/>
                        <label>Data de Nascimento</label>
                        <input type="date" name="datanascimento" class="form-control">
                        <br/>
                        <label>Profissão</label>
                        <input type="text" name="profissao" placeholder="Digite a profissão da pessoa" maxlength="30" class="form-control">
                        <br/>
                        <input type="submit" value="Cadastrar" class="btn btn-primary" />
                    </form>
                </div>    
        </div>
        </div>
        </section>
        <footer>
        <div style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: DodgerBlue; color: white; text-align: center;">Agenda 2.0 Desenvolvido em Aula - Versão 1.0</div>
        </footer>
    </body>
</html>