<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.gravitec.net/storage/e1c1207ef7132edb49462d359775a36c/client.js" async></script>
  </head>
<body>
<h6 class="alert-heading">Welcome - <?php echo $_SESSION['username']?></h6>
<?php require '_nav.php' ?>

  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" class="form-control" placeholder="Enter your name" name="fullname" value="" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" class="form-control" placeholder="Enter your username" name="user" value="<?php echo $_SESSION['username']?>" required readonly>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" value="" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" class="form-control" placeholder="Enter your number" name="phone" value="" required>
          </div>
          <div class="input-box">
            <span class="details">EventName</span>
            <select class="form-control" placeholder="Event Name" name="event" id = EventName required>
            
            <option value="Skit Competition">Skit Competition</option>
            <option value="Model Presentation">Model Presentation</option>
            <option value="Lan Gaming">Lan Gaming</option>
            <option value="Talent StarLight">Talent StarLight</option>
            <option value="Code Hunt">Code Hunt</option>
            <option value="Debate Competition">Debate Competition</option>
            <option value="Fashion Show">Fashion Show</option>
            <option value="Roadies">Roadies</option>
            <option value="DJ Night">DJ Night</option>
            <option value="Talent Star Light">Talent Star Light</option>
            <option value="Apti Quiz">Apti Quiz</option>
            <option value="Assemble Disassemble">Assemble Disassemble</option>
            <option value="Water Rocket Propulsion">Water Rocket Propulsion</option>
            <option value="Robotics">Robotics</option>
            <option value="100 Rs. Venture">100 Rs. Venture</option>
            <option value="Art Junkies">Art Junkies</option>
            <option value="Treasure Hunt">Treasure Hunt</option>
            <option value="Nukkad Natak">Nukkad Natak</option>
            <option value=""selected>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">College/School</span>
            <input type="text" class="form-control" placeholder="College/School" name="college" value=""  required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" class="form-control" placeholder="Enter your password" name="password" value="" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" class="form-control" placeholder="Confirm your password" name="cpassword" value="" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Register" >
        </div>
      </form>
    </div>
  </div>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>


<?php

include 'databconnect.php';

if(isset($_POST['submit'])){

    $fullname = $_POST['fullname'];
    $username = $_POST['user'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $event = $_POST['event'];
    $institute = $_POST['college'];
    $password = $_POST['password'];
  
    $insertquery = "insert into registration(fullname, username, email, phone, event, institute, password) values('$fullname','$username','$email','$phone','$event','$institute','$password')";

    $result = mysqli_query($conn, $insertquery);
  
    if($result){
        ?>
        <script>
            alert("data inserted properly");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("data not inserted");
        </script>
        <?php
    }
}
?>