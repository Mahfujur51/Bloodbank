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
          <h2>Stock Blood  List</h2>
          <br>
          <center>
            <div id="form">
                <table >
                        <tr>
                            <td><center><b><font color="blue">Name</font></b></center></td>
                            <td><center><b><font color="blue">Quantaty</font></b></center></td>
                            
                        </tr>
                       
                        <tr>
                            <td><center>A+</center></td> 
                            <td><center>
                                <?php
                                 $q=$db->query("SELECT * FROM donner_reg WHERE bgroup='A+'");
                                 echo $row=$q->rowcount();

                                
                                ?>

                            </center></td> 
                            
                        </tr>
                        <tr>
                            <td><center>A-</center></td> 
                             <td><center>
                                <?php
                                 $q=$db->query("SELECT * FROM donner_reg WHERE bgroup='A-'");
                                 echo $row=$q->rowcount();
                                 
                                
                                ?>

                            </center></td> 
                            
                        </tr>
                        <tr>
                            <td><center>B+</center></td> 
                            <td><center>
                                <?php
                                 $q=$db->query("SELECT * FROM donner_reg WHERE bgroup='B+'");
                                 echo $row=$q->rowcount();
                                 
                                
                                ?>

                            </center></td> 
                            
                        </tr>
                        <tr>
                            <td><center>B-</center></td> 
                          <td><center>
                                <?php
                                 $q=$db->query("SELECT * FROM donner_reg WHERE bgroup='B-'");
                                 echo $row=$q->rowcount();
                                 
                                
                                ?>

                            </center></td> 
                            
                        </tr>
                        <tr>
                            <td><center>O+</center></td> 
                            <td><center>
                                <?php
                                 $q=$db->query("SELECT * FROM donner_reg WHERE bgroup='O+'");
                                 echo $row=$q->rowcount();
                                 
                                
                                ?>

                            </center></td> 
                            
                        </tr>
                        <tr>
                            <td><center>O-</center></td> 
                            <td><center>
                                <?php
                                 $q=$db->query("SELECT * FROM donner_reg WHERE bgroup='O-'");
                                 echo $row=$q->rowcount();
                                 
                                
                                ?>

                            </center></td> 
                            
                        </tr>
                        <tr>
                            <td><center>AB+</center></td> 
                            <td><center>
                                <?php
                                 $q=$db->query("SELECT * FROM donner_reg WHERE bgroup='AB+'");
                                 echo $row=$q->rowcount();
                                 
                                
                                ?>

                            </center></td> 
                            
                        </tr>
                        <tr>
                            <td><center>AB-</center></td> 
                            <td><center>
                                <?php
                                 $q=$db->query("SELECT * FROM donner_reg WHERE bgroup='AB-'");
                                 echo $row=$q->rowcount();
                                 
                                
                                ?>

                            </center></td> 
                            
                        </tr>

                    
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