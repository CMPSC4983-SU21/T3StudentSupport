<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <button class="btn- btn-primary my-5"> <a href="user.php" class="text-light">Add User</a>
    </button>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Advisor</th>
          <th scope="col">Department</th>
          <th scope="col">operation</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $sql = "Select * from `users`";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $advisor = $row['advisor'];
            $department = $row['department'];
            echo '<tr>
      <th scope="row">' . $id . '</th>
      <td>' . $name . '</td>
      <td>' . $email . '</td>
      <td>' . $advisor . '</td>
      <td>' . $department . '</td>
      <td>
    <button class="btn btn-primary"><a href="update.php? updateid=' . $id . '" class="text-light" >Update</a></button>
    <button class="btn btn-danger"><a href="delete.php? deleteid=' . $id . ' "class="text-light">Delete</a></button>
    </td>
    </tr>';
          }
        }
        ?>


      </tbody>
    </table>
  </div>
</body>

</html>