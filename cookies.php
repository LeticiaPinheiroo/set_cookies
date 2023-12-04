<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$cookie_name = $_POST['nome']; //nome
$cookie_value = $_POST['senha']; 
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Cookies</title>
</head>

<body class="text-bg-light">
<div class="container text-center">
        <!--linha 1 -->
        <div class="row bg-primary">
            <div class="col">
                <nav class="navbar" style="background-color:#4682B4;">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
 
                    </div>
                </nav>
            </div>
        </div>

        <!--linha 2 -->
        <div class="row bg-white">
            <div class="col">
                &nbsp;
            </div>
        </div>

        <!--linha 3 formulário-->
        <div class="row bg-white">
            <div class="col text-start">
                <form method="post">
                    <p class="fs-2">Cookies</p>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                            <input type="name" class="form-control" id="exampleFormControlInput1" name="nome">        
                        </div>
                        </br>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Senha:</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" name="senha">
                        </div>
                        </br>
                        <div class="mb-3">
                            <button class="botao" type="submit" name="acao" style="background-color:#4682B4;">Acessar</button>
                        </div>        
                </form>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $cookie_value;
} else {
  echo "Cookie named '" . $cookie_name . "' is not set!";
}
?>

         
</body>
</html>