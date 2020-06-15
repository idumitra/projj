<?php


include "../vendor/config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: login.php');
}


// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}
?>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="acceuil.php">Movie reviews</a>
    </div>
    <ul class="nav navbar-nav">
      <li <?php if($_SERVER['SCRIPT_NAME']=="/html/acceuil.php") { ?>  class="active"   <?php   }  ?>><a href="acceuil.php">Acceuil</a></li>
      <li <?php if($_SERVER['SCRIPT_NAME']=="/html/blockB.php") { ?>  class="active"   <?php   }  ?>><a href="blockB.php">Blockbusters</a></li>
      <li <?php if($_SERVER['SCRIPT_NAME']=="/html/crit.php") { ?>  class="active"   <?php   }  ?>><a href="crit.php">Critiques</a></li>
      <li <?php if($_SERVER['SCRIPT_NAME']=="/html/filmP.php") { ?>  class="active"   <?php   }  ?>><a href="filmP.php">Films prochainement</a></li>
      <li <?php if($_SERVER['SCRIPT_NAME']=="/html/cinema.php") { ?>  class="active"   <?php   }  ?>><a href="cinema.php">Cinémas Bruxelles</a></li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Settings User : <?php echo $_SESSION['uname'] ?>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="#"></a>
          <?php if($_SESSION['role']=="Admin") { ?> <a class="dropdown-item" href="admin.php">Admin page</a> <?php }?>
        </div>
      </li>
      
    </ul>
    <form method='post' action="">
            <input class="btn btn-danger navbar-btn" type="submit" value="Logout" name="but_logout">
        </form>
   
  </div>
</nav>

