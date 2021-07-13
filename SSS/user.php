<?php
include 'connect.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $advisor = $_POST['advisor'];
  $department = $_POST['department'];

  $sql = "insert into `users` (name, email, advisor, department) 
  values('$name', '$email', '$advisor', '$department')";
  $result = mysqli_query($con, $sql);

  if ($result) {
    //echo "Data Inserted Sucess";
    header('location:thankyou.php');
  } else {
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
  <img src="logo-big.png" alt="ECU" class="center" >
 <style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>

<body>

  <div class="container my-5">
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
        <label> Advisor</label>
        <select>
          <option value="advisor" name="advisor"> Dannie Patton </option>
          <option value="advisor" name="advisor"> Elizabeth Floyd </option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Day</label>
        <input type="text" class="form-control" placeholder="Please enter Monday-Friday" name="department">
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
  <aside>
 <hr>   
<p style="text-align:center;"><strong> Contact Info </strong></p>
<p style="text-align:center;" a href="https://www.ecok.edu/student-support-services"> Website </p>
<p style="text-align:center;"> +1 (580) 559-5833 </p>
<p style="text-align:center;">Email</p>
<p style="text-align:center;">1100 E 14th St., Admin Building 250, Ada, OK, 74820</p>
<hr>
<p style="text-align:center;"><strong>Business hours></strong></p>
<p style="text-align:center;">Mon8:00 am - 5:00 pm</p>
<p style="text-align:center;">Tue8:00 am - 5:00 pm</p>
<p style="text-align:center;">Wed8:00 am - 5:00 pm</p>
<p style="text-align:center;">Thu8:00 am - 5:00 pm</p>
<p style="text-align:center;">Fri8:00 am - 5:00 pm</p>
<p style="text-align:center;">Sat-Closed</p>
<p style="text-align:center;">Sun-Closed</p>
</aside>
</body>
</body>

</html>