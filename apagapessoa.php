<?php
    include("conecta.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM pessoa WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        echo "<script language = 'javascript' type = 'text/javascript'>
        alert('Usuário apagado com sucesso!');
        window.location.href = 'pessoa.php';
        </script>";
    }
    else
    {
        echo "<script language = 'javascript' type = 'text/javascript'>
        alert('Usuário não foi apagado com sucesso!');
        window.location.href = 'pessoa.php';
        </script>";
    }
    mysqli_close($conn);
?>