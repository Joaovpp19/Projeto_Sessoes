<?php
session_start();
if (isset($_SESSION["nome"])) {
    $nome = $_SESSION["nome"];
} else {
    $nome = "Usuário não foi identificado";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Código Sessões</title>

</head>
<body class="bg-body-secondary">
    <div class="container text-center bg-body-secondary">
        <div class="row">
            <div class="col-1">
              &nbsp;
            </div>
            <div class="col bg-success">
                <nav class="navbar bg-success navbar-expand-lg" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Dados</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="index.php">voltar ao Inicio</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-1">
                &nbsp;
            </div>
        </div>
        <div class="row">
            <div class="col-1">
              &nbsp;
            </div>
            <div class="col bg-white"><br>
                <h3 class="text-start fs-5 custom-heading">Dados da Sessão</h3>
                <p>
                    Bem-vindo, <?php echo $nome; ?>!
                </p>
                <form method="post" action="">
                    <div class="mb-3 text-start">
                        <button type="submit" name="sair" class="btn btn-custom custom-navbar">Sair</button>
                    </div>
                </form>

                <?php
                if (isset($_POST['sair'])) {
                    // irá destruir a sessão e redirecionará para o início
                    session_destroy();
                    header("Location: index.php");
                    exit;
                }
                ?>
            </div>
            <div class="col-1">
                &nbsp;
            </div>
        </div>
    </div>
</body>
</html>

