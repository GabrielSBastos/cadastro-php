<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Cadastro de usuário</title>
</head>
<body>
    <form method="POST" action="cadastro.php">
    <div class="mb-3">
        <label for="nome" class="form-label">Insira seu nome</label>
        <input type="text" class="form-control" name="nome">
        </div>
    
    <div class="mb-3">
        <label for="email" class="form-label">Insira seu e-mail</label>
        <input type="email" class="form-control" name="email" placeholder="exemplo@exemplo.com">
        </div>

    <div class="mb-3">
        <label for="cidade" class="form-label" >Insira a sua cidade</label>
        <input type="text" class="form-control" name="cidade">
        </div>    

    <div class="mb-3">
        <label for="pais" class="form-label">Insira o seu pais</label>
        <input type="text" class="form-control" name="pais">
        </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>


</body>
</html>

<?php

$host = "localhost";
$user = "root";
$pass = "";
$base = "crud";

$conn = new mysqli($host,$user,$pass,$base);
?>