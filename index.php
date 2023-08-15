<?php

include("conn.php");
if(isset($_POST['cadastrar'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $city =$_POST['city'];
    $country =$_POST['country'];

    $sql="Insert into `users`(name,email,city,country) values('$name', '$email', '$city', '$country')";
    $result = mysqli_query($conn,$sql);
}

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de usuário</title>
</head>
<body>
    <form method="POST">
    <div class="mb-3">
        <label for="nome" class="form-label">Insira seu nome</label>
        <input type="text" class="form-control" name="name" autocomplete="off">
        </div>
    
    <div class="mb-3">
        <label for="email" class="form-label">Insira seu e-mail</label>
        <input type="email" class="form-control" name="email" placeholder="exemplo@exemplo.com" autocomplete="off">
        </div>

    <div class="mb-3">
        <label for="cidade" class="form-label" >Insira a sua cidade</label>
        <input type="text" class="form-control" name="city" autocomplete="off">
        </div>    

    <div class="mb-3">
        <label for="pais" class="form-label">Insira o seu pais</label>
        <input type="text" class="form-control" name="country" autocomplete="off">
        </div>
    <button type="submit" class="btn btn-secondary" name="cadastrar">Cadastrar</button>
</form>

<script>

</script>


</body>
</html>
