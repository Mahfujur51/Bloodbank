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
          <h2>Blood Bank Mangement System</h2>
        </div>
        <div class="body">
          <br><br>
          <br><br>
          <form class="" method="post">


          <table align="center">
            <tr>
              <td width="200px" height="70px"><b>Enter Uername:</b></td>
              <td width="200px" height="70px"><input type="text" name="un" placeholder="Enter the user name" style="width:180px;height:35px; border-radius:10px;"> </td>
            </tr>
            <tr>
              <td width="200px" height="70px"><b>Enter password:</b></td>
              <td width="200px" height="70px"><input type="password" name="ps" placeholder="Enter password" style="width:180px;height:35px; border-radius: 10px;"> </td>
            </tr>
            <tr>
              <td></td>
              <td>  <input type="submit" name="sub" value="Login" style="height:35px;width:60px;border-radius:5px;" ></td>

            </tr>
          </table>
            </form>
            <?php if (isset($_POST['sub'])) {
                  $un=$_POST['un'];
                  $ps=$_POST['ps'];
                  $q=$db->prepare("SELECT * FROM admin WHERE username='$un' && password='$ps'");
                  $q->execute();
                  $res=$q->fetchAll(PDO::FETCH_OBJ);
                  if($res){
                    $_SESSION['un']=$un;
                    header("Location:admin-home.php");

                  }
                  else{
                    echo "<script>alert('wrong user')</script>";
                  }       
            } ?>
       </div>
        <div class="footer" align="center" style="">&copy;Mahfujur Rahman project</div>

      </div>
    </div>

  </body>
</html>
