<?php
require 'config/conect.php';


if (isset($_GET['bt_entrar'])) {
    $user1 = $_GET['username2'] ;
    $senha = $_GET['senha'];

    $conn = mysqli_connect($hostname, $username, $password, $database);
    $sql_all = "SELECT * FROM usuarios";
    $result_all = mysqli_query($conn, $sql_all);
    $total = mysqli_num_rows($result_all);
    $msg = "";

    if ($total > 0) {
        while ($row = mysqli_fetch_assoc($result_all)) {
            if ($user1 === $row['user']  && $senha === $row['senha']) {
                echo '<script>alert("Deu tudo certo")<?script>';
                header('Location: usuario.php');
                
                
            }else{
                $msg = "User invalido ou senha incorreta";
            }
        }
    }else{
        echo"sem cadastro no sitema";
    }
}else{
   
}


?>