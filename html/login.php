<?php
include "../vendor/config.php";

$error_message = "";

if(isset($_POST['btnsignup'])){

    $uname = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            // Check  user role
            $stmt = $con->prepare("SELECT role FROM users WHERE username = ?");
            $stmt->bind_param("s", $uname);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();
            while($row = mysqli_fetch_assoc($result)) {
             $_SESSION['role']=$row['role'];
          }
            header('Location: acceuil.php');
        }else{
           $error_message = "Invalid username and password";
        }

    }

}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Log in</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  </head>
  <body>
  <div class='container'>
      <div class='row'>

        <div class='col-md-6' >

          <form method='post' action=''>
          <?php 
            // Display Error message
            if(!empty($error_message)){
            ?>
            <div class="alert alert-danger">
              <strong>Error!</strong> <?= $error_message ?>
            </div>

            <?php
            }
            ?>

          
         
            <h1>Please Log in first</h1>
            <div class="form-group">
              <label for="username">User Name:</label>
              <input type="text" class="form-control" name="username" id="username" required="required" maxlength="80">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" name="password" id="password" required="required" maxlength="80">
            </div>

            <button type="submit" name="btnsignup" class="btn btn-default">Submit</button>
          </form>
        </div>

     </div>
    </div>
  </body>
</html>