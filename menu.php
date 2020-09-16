<?php
    $tipo =  $_SESSION["tipo"];
    if($tipo === "admin"){
        echo "<a href='agenda.php' style='text-decoration: none; font-weight: bold;'>HOME | </a>";
        echo "<a href='usuario.php' style='text-decoration: none; font-weight: bold;'>USUÁRIO | </a>";
        echo "<a href='pessoa.php' style='text-decoration: none; font-weight: bold;'>PESSOAS</a>";
    }
    else {
        echo "<a href='agenda.php' style='text-decoration: none; font-weight: bold;'>HOME | </a>";
        echo "<a href='pessoa.php' style='text-decoration: none; font-weight: bold;'>PESSOAS</a>";
    }
?>