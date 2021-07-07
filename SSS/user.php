<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $advisor=$_POST['advisor'];
  $department=$_POST['department'];

  $sql="insert into `users` (name, email, advisor, department) 
  values('$name', '$email', '$advisor', '$department')";
  $result=mysqli_query($con,$sql);

  if($result){
    //echo "Data Inserted Sucess";
    header('location:thankyou.php');
  }else{
    die(mysqli_error($con));
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Appointment</title>
</head>

<body>
  <div class="container my-5" >
    <form method="post">
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter your name." name="name">
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Enter your email." name="email">
      </div>
      <div class="mb-3">
        <label class="form-label">Advisor</label>
        <input type="text" class="form-control" placeholder="Enter your name." name="advisor">
      </div>
      <div class="mb-3">
        <label class="form-label">Department</label>
        <input type="text" class="form-control" placeholder="Enter your department." name="department">
      </div>


      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>

</body>

</html>