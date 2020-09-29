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
        <?php
            include("conecta.php");
            $id = $_GET['id'];
            $sql2 = mysqli_query($conn, "SELECT * FROM pessoa WHERE id='$id'") or die(mysqli_error($conn));
            while($pessoa = mysqli_fetch_array($sql2)){
        ?>
        <div style="width: 45%; padding-left:2%; padding-right:2%; float:left;">
        <div class="panel panel-primary">
            <div class="panel-heading"><h3 class="panel-title"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>&nbsp;Edição de Pessoas</h3></div>
                <div class="panel-body">
                    <form name="cadpessoa" id="cadpessoa" action="editarpessoabd.php?id=<?php echo $id; ?>" method="post">
                        <label>Tipo</label>
                        <select name="tipopessoa" disabled="" autofocus required="required" class="form-control">
                            <option value="fisica">Física</option>
                            <option value="juridica">Jurídica</option>
                        </select>
                        <br/>
                        <label>Nome</label>
                        <input type="text" name="nome"  readonly="" value="<?php echo $pessoa['nome']; ?>" maxlength="85" required="required" class="form-control">
                        <br/>
                        <label>Endereço</label>
                        <input type="text" name="endereco" readonly="" value="<?php echo $pessoa['endereco']; ?>" maxlength="85" required="required" class="form-control">
                        <br/>
                        <label>Cidade</label>
                        <input type="text" name="cidade" readonly="" value="<?php echo $pessoa['cidade']; ?>" maxlength="80" class="form-control">
                        <br/>
                        <label>Estado</label>
                        <input type="text" name="estado"  readonly=""value="<?php echo $pessoa['estado']; ?>" maxlength="30" class="form-control">
                        <br/>
                        <label>Celular</label>
                        <input type="tel" name="celular"  readonly=""value="<?php echo $pessoa['celular']; ?>" maxlength="30" required="required" class="form-control">
                        <br/>
                        <label>E-mail</label>
                        <input type="email" name="email"  readonly="" value="<?php echo $pessoa['email']; ?>" maxlength="90" required="required" class="form-control">
                        <br/>
                        <label>Data de Nascimento</label>
                        <input type="date" name="datanascimento" readonly="" value="<?php echo $pessoa['datanascimento']; ?>" class="form-control">
                        <br/>
                        <label>Profissão</label>
                        <input type="text" name="profissao" readonly="" value="<?php echo $pessoa['profissao']; ?>" maxlength="30" class="form-control">
                    </form>
                    <?php
                        }
                        mysqli_close($conn);
                    ?>
                </div>    
        </div>
        </div>

        <div style="width: 52%; padding-left:2%; padding-right:2%; float:right;">
        <div class="panel panel-primary">
            <div class="panel-heading"><h3 class="panel-title"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>&nbsp;Edição de Pessoas</h3></div>
                <div class="panel-body">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.9669986312842!2d-51.94220698554656!3d-23.42555926247511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ecd72dbc0105a9%3A0xcb3ce548d96f1df9!2sAv.%20Tiradentes%20-%20Zona%2001%2C%20Maring%C3%A1%20-%20PR!5e0!3m2!1spt-BR!2sbr!4v1601073869586!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>      
        </div>
        </div>
        </section>
        <footer>
        <div style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: DodgerBlue; color: white; text-align: center;">Agenda 2.0 Desenvolvido em Aula - Versão 1.0</div>
        </footer>
    </body>
</html>