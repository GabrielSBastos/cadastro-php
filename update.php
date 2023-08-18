<?php

include('conn.php');
$id=$_GET['updateid'];
$sql ="Select * from `users` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$city = $row['city'];
$country = $row['country'];


if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $city =$_POST['city'];
    $country =$_POST['country'];

    $sql="update `users` set id=$id, name=$name, email=$email, city=$city country=$country where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "update succesfull";
    }
}

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="indexstyle.css">
    <title>Update User</title>
</head>
<body>
    <form method="POST">
    <div class="mb-3">
        <label for="nome" class="form-label">Insira seu nome</label>
        <input type="text" class="form-control" name="name" autocomplete="off" value="<?php echo $name;?>">
        </div>
    
    <div class="mb-3">
        <label for="email" class="form-label">Insira seu e-mail</label>
        <input type="email" class="form-control" name="email" placeholder="exemplo@exemplo.com" autocomplete="off" value="<?php echo $email;?>">
        </div>

    <div class="mb-3">
        <label for="cidade" class="form-label" >Insira a sua cidade</label>
        <input type="text" class="form-control" name="city" autocomplete="off" value="<?php echo $city;?>">
        </div>    

    <div class="mb-3">
        <label for="pais" class="form-label">Insira o seu pais</label>
        <input type="text" class="form-control" name="country" autocomplete="off" value="<?php echo $country;?>">
        </div>
     <button class="btn btn-primary">Update</button>
</form>

</body>
</html>
