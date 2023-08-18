<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>All Users</title>
</head>

<body>
  <div class="container" >
    <button onclick="AddUser()" class="btn btn-primary my-5 class=text-light">Add user </button>
    <button class="btn btn-secondary"><a href="index.php? deleteid='.$id.'" class="text-light text-decoration-none">Return to Home</a></button>
    <table class="table" >
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">City</th>
          <th scope="col">Country</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        <?php

        include("conn.php");
        $sql = "Select * from `users`";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $city = $row['city'];
            $country = $row['country'];
            echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $name . '</td>
            <td>' . $email . '</td>
            <td>' . $city . '</td>
            <td>' . $country . '</td>
            <td>
            <button class="btn btn-success"><a href="update.php?updateid='.$id.'" class="text-light text-decoration-none">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light text-decoration-none">Delete</a></button>
            </td>
          </tr>';

          }
        }



        ?>
      </tbody>
    </table>
  </div>
<script>
  function AddUser(){
    window.location.href = "index.php"
  }
</script>
  
</body>

</html>