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
    <style>
               td{
                   width: 200px;
                   height: 25px;
               }
 #form1{
  width: 80%;
  height: 320px;
  background-color: red;
  border-radius: 10px;

}
    </style>
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
          <h2>Out Stock Blood list </h2>
          <br>
          <center>
            <div id="form1">
                <table >
                        <tr>
                            <td><center><b><font color="blue">Name</font></b></center></td>
                            <td><center><b><font color="blue">Mobile No</font></b></center></td>
                            <td><center><b><font color="blue">Blood Group</font></b></center></td>
                            
                        </tr>
                        <?php
                         $q=$db->query("SELECT * FROM exchange_bgroup");
                         while($result=$q->fetch(PDO::FETCH_OBJ)){

                    
                        
                        ?>
                        <tr>
                            <td><center><?=$result->name;?></center></td> 
                            <td><center><?=$result->mno;?></center></td> 
                            <td><center><?=$result->bgroup;?></center></td> 
                           
                         
                        </tr>
                        <?php
                             }
                      ?>
                </table>
                
            </div>
        </center>
       </div>
        <div class="footer" align="center" style="">&copy;Mahfujur Rahman project
        <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
    </div>
             
      </div>
    </div>

  </body>
</html>