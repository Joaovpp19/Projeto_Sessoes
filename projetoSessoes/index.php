<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $senhaCorreta = "1234";
    $nomeUsuario = "Joao";
    if (isset($_POST["nome"]) && isset($_POST["senha"]) && $_POST["senha"] === $senhaCorreta && $_POST["nomeUsuario"] === $nomeUsuario) {
        $_SESSION["nome"] = $_POST["nomeUsuario"];
        header("Location: codSessoes.php");
        exit;
    }
}
?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Cadastro</title>   
</head>
<body class="bg-body-secondary">
    <div class="container text-center bg-body-secondary">
        <div class="row">
            <div class="col-1">
              &nbsp
            </div>
            <div class="col bg-success">
                <nav class="navbar bg-success navbar-expand-lg" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class ="navbar-brand" href="#">Sistema de Sessões</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="codSessoes.php">Sessão</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-1">
                &nbsp
            </div>
        </div>
        <div class="row">
            <div class="col-1">
              &nbsp
            </div>
            <div class="col bg-white">
              &nbsp
            </div>
            <div class="col-1">
              &nbsp
            </div>
        </div>
        <div class ="row">
            <div class = "col-1">
                &nbsp
            </div>
            <div class ="col bg-white">
                <p class ="text-start fs-5"> <b> <center> <h3>Sessões</h3></center></b> </p>
                <p>
                <form method = "POST" action="codSessoes.php">
                Nome: <input type=text name=nome id=nome>
                <br><br>
                Senha: <input type=password name=senha>
                <br><br>
                <input type=submit name="Entrar" value="Entrar"  class="btn btn-outline-success">
                <br><br>
            </div>
            <div class="col-1">
                    &nbsp
            </div>
        </div>
    </div>
</body>
</html>