<?php
    $tipo =  $_SESSION["tipo"];
    if($tipo === "admin"){
        echo "<ul class='nav nav-pills'>";
            echo "<li role='presentation'><a href='agenda.php'>HOME</a></li>";
            echo "<li role='presentation'><a href='usuario.php'>USUÁRIO</a></li>";
            echo "<li role='presentation'><a href='pessoa.php'>PESSOAS</a></li>";
        echo "</ul>";
    }
    else {
        echo "<ul class='nav nav-pills'>";
            echo "<li role='presentation'><a href='agenda.php'>HOME</a></li>";
            echo "<li role='presentation'><a href='pessoa.php'>PESSOAS</a></li>";
        echo "</ul>";
    }
?>