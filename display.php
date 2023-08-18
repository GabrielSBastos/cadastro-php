<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Display</title>
</head>

<body>
  <div class="container">
    <button onclick="AddUser()" class="btn btn-secondary my-5 class=text-light">Add user </button>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
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
            <button type="button" class="btn btn-primary">Primary</button>
            </td>
            </tr>';

          }
        }



        ?>
      </tbody>
    </table>
  </div>
  <script>
    function AddUser() {
      window.location.href = "index.php"
    }
  </script>

</body>

</html>