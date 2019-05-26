<?php
include('connection.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="full">
      <div class="inner_full">
        <div class="header">
          <h2><a href="admin-home.php" style="text-decoration:none; color: white;"> Bank Mangement System</a></h2>
        </div>
        <div class="body">
            <?php
              $un=$_SESSION['un'];
              if(!$un){
                  header('Location:index.php');
              }
            ?>
          <h2>Welcome admin</h2>
          <br> <br>
            <ul>
             <li><a href="donner-reg.php">Donor Registration</a></li>
             <li><a href="donner-list.php">Donor List</a></li>
             <li><a href="stock-list.php">Stock Blood List</a></li>
            </ul>
            <br> <br> <br>
            <br> <br>
            <ul>

             <li><a href="out-stok.php">Out Stock Blood List</a></li>
             <li><a href="exchange-reg.php">Exchange Blood Reg</a></li>
             <li><a href="exchange-list.php">Exchange list</a></li>
            </ul>


       </div>
        <div class="footer" align="center" style="">&copy;Mahfujur Rahman project
        <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
    </div>
             
      </div>
    </div>

  </body>
</html>
