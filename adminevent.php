<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="signupinfo.php">Signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Registration</a>
        </li>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<h2>Registration Info</h2><br>

</body>

<?php
     include('security.php');
?>

   <div class="table-responsive">
    <?php
        $query = "SELECT * FROM events";
        $query_run = mysqli_query($connection, $query);
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th> id </th>
              <th> Talent StarLight </th>
              <th> 100 Rs. Venture </th>
              <th> Art Junkies </th>
              <th> Treasure Hunt </th>
              <th> Nukkad Natak </th>
              <th> Code Hunt </th>
              <th> Lan Gaming </th>
              <th> Robotics </th>
              <th> Water Rocket Propulsion </th>
              <th> Assemble Disassemble </th>
              <th> Debate Competition </th>
              <th> Skit Competition </th>
              <th> Model Presentation </th>
              <th> Talent Star Light </th>
              <th> Apti Quiz </th>
              <th> Auto Expo </th>
              <th> Stunt Show </th>
              <th> Techzone </th>
              <th> Fashion Show </th>
              <th> Roadies </th>
              <th> DJ Night </th>
              <th> EDIT </th>
              <th> DELETE </th>
          </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($query_run) > 0)        
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
               ?>
          <tr>
            <td><?php  echo $row['id']; ?></td>
            <td><?php  echo $row['Talent StarLight']; ?><form action="code3.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form></td>
            <td><?php  echo $row['100 Rs. Venture']; ?></td>
            <td><?php  echo $row['Art Junkies']; ?></td>
            <td><?php  echo $row['Treasure Hunt']; ?></td>
            <td><?php  echo $row['Nukkad Natak']; ?></td>
            <td><?php  echo $row['Code Hunt']; ?></td>
            <td><?php  echo $row['Lan Gaming']; ?></td>
            <td><?php  echo $row['Robotics']; ?></td>
            <td><?php  echo $row['Water Rocket Propulsion']; ?></td>
            <td><?php  echo $row['Assemble Disassemble']; ?></td>
            <td><?php  echo $row['Debate Competition']; ?></td>
            <td><?php  echo $row['Skit Competition']; ?></td>
            <td><?php  echo $row['Model Presentation']; ?></td>
            <td><?php  echo $row['Talent Star Light']; ?></td>
            <td><?php  echo $row['Apti Quiz']; ?></td>
            <td><?php  echo $row['Auto Expo']; ?></td>
            <td><?php  echo $row['Stunt Show']; ?></td>
            <td><?php  echo $row['Techzone']; ?></td>
            <td><?php  echo $row['Fashion Show']; ?></td>
            <td><?php  echo $row['Roadies']; ?></td>
            <td><?php  echo $row['DJ Night']; ?></td>
            <td>
                <form action="register_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="code2.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>
          <?php
            } 
        }
        else {
            echo "No Record Found";
        }
        ?>
        </tbody>
      </table>
    </div>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 