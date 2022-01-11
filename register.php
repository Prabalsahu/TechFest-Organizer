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
        <li class="nav-item">
          <a class="nav-link" href="adminevent.php">Event</a>
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
        $query = "SELECT * FROM registration";
        $query_run = mysqli_query($connection, $query);
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th> ID </th>
              <th> Fullname </th>
              <th> Username </th>
              <th> Email </th>
              <th> Password </th>
              <th> Phone </th>
              <th> Event </th>
              <th> Institute </th>
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
            <td><?php  echo $row['sno']; ?></td> <!--<td> <//?php  echo $row['id']; ?> </td> -->
            <td><?php  echo $row['fullname']; ?></td>
            <td><?php  echo $row['username']; ?></td>
            <td><?php  echo $row['email']; ?></td>
            <td><?php  echo $row['password']; ?></td>
            <td><?php  echo $row['phone']; ?></td>
            <td><?php  echo $row['event']; ?></td>
            <td><?php  echo $row['institute']; ?></td>
            <td>
                <form action="register_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['sno']; ?>"> <!-- <input type="hidden" name="edit_id" value="<//?php echo $row['id']; ?>"> -->
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="code2.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['sno']; ?>"> <!-- <input type="hidden" name="delete_id" value="<//?php echo $row['id']; ?>"> -->
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