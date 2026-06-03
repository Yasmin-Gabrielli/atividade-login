<?php
 session_start();
// require 'config/conect.php';
include 'login.php';


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Login - Site entrada</title>
</head>

<body class=" mx-auto" >

    <main class="container align-content-center mt-5 " style=" width: 100%; height: 70px">
        <div class="card w-50 h-auto  rounded-2 bg-black " style="margin: 10px auto;">
            <form class="w-50 h-50 text-light px-md-5" style="margin: 10px auto;">
                <div class="form-group col  m-1">
                    <label for="exampleInputEmail1">Nome de usuario</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="username2">
                    <small id="emailHelp" class="form-text text-light">Digite seu nome de usuario</small>
                </div>
                <div class="form-group m-1">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
                </div>
                
                <button type="submit" class="btn btn-primary mt-2" nome="bt-entrar">Submit</button>
            </form>
        </div>
    </main>
</body>

</html>