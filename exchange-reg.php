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
          <h2>Exchange Blood Donner Registration</h2>
  
          <center>
            <div id="form">
                <form action="" method="post">
                <table>
                    <tr>
                        <td width="200px" height="50px">Enter Name:</td>
                        <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter the name"></td>
                        <td width="200px" height="50px">Enter Father's  Name:</td>
                        <td width="200px" height="50px"><input type="text" name ="fname" placeholder="Enter Father Name"></td>
                    </tr>
                    <tr>
                        <td width="200px" height="50px">Enter Adress:</td>
                        <td width="200px" height="50px"><textarea name="address"  cols="20" rows="3"></textarea></td>
                        <td width="200px" height="50px">Enter City Name:</td>
                        <td width="200px" height="50px"><input type="text" name ="city" placeholder="Enter The name of city"></td>
                    </tr>
                    <tr>
                        <td width="200px" height="50px">Enter Age:</td>
                        <td width="200px" height="50px"><input type="text" name ="age" placeholder="Enter the age"></td>
                        <td width="200px" height="50px">Enter Email:</td>
                        <td width="200px" height="50px"><input type="text" name ="email" placeholder="Enter Email"></td>
                    </tr>
                    <tr>
                     <td width="200px" height="50px">Enter Mobile:</td>
                        <td width="200px" height="50px"><input type="text" name ="mno" placeholder="Enter Mobile"></td>
                    </tr>
                    <tr>
                    <td width="200px" height="50px">Enter Blood Group:</td>
                        <td width="200px" height="50px">

                             <select name="bgroup" id="">
                                             <option >A-</option>
                                             <option >A+</option>
                                             <option >B+</option>
                                             <option >B-</option>
                                             <option >O+</option>
                                             <option >O-</option>
                                             <option >AB+</option>
                                             <option >AB-</option>
                              </select>
                        </td>
                        <td width="200px" height="50px">Exchange Blood Group:</td>
                        <td width="200px" height="50px">

                             <select name="ebgroup" id="">
                                             <option >A-</option>
                                             <option >A+</option>
                                             <option >B+</option>
                                             <option >B-</option>
                                             <option >O+</option>
                                             <option >O-</option>
                                             <option >AB+</option>
                                             <option >AB-</option>
                              </select>
                        </td>
                    </tr>
                    <td>
                    </td>
                    
                    <td style="float:right">
                        <input type="submit" name="submit" Vlaue="Submit">
                    </td>
                  



                </table>
                </form>
                
              <?php
                 if(isset($_POST['submit'])){
                   //font end data input
                     $name=$_POST['name'];
                     $fname=$_POST['fname'];
                     $address=$_POST['address'];
                     $city=$_POST['city'];
                     $age=$_POST['age'];
                     $bgroup=$_POST['bgroup'];  
                     $email=$_POST['email'];
                     $mno=$_POST['mno'];
                     $ebgroup=$_POST['ebgroup'];
                     //font end data input end 
                    
                     //select amd insert
                     $q2="SELECT * FROM donner_reg WHERE bgroup='$bgroup' ";
                     $st=$db->query($q2);
                     $num_row=$st->fetch();
                    $id=$num_row['id'];
                    $name=$num_row['name'];
                    $b1=$num_row['bgroup'];
                    $mno=$num_row['mno'];
                    $q1="INSERT INTO out_stock_bgroup(bname,name,mno) value(?,?,?)";
                    $st=$db->prepare($q1);
                    $st->execute([$b1,$name,$mno]);
                    //select and insert end 
                    
                    //delete code
                    $delete_q="DELETE donner_reg where id='$id'";
                    $st=$db->prepare($delete_q);
                    $st->execute();
                    //delete  code 

                    //exchange user reg code 

                     $q=$db->prepare("INSERT INTO exchange_bgroup(name,fname,address,city,age,bgroup,email,mno,ebgroup) VALUES(:name,:fname,:address,:city,:age,:bgroup,:email,:mno,:ebgroup)");
                     $q->bindValue('name',$name);
                     $q->bindValue('fname',$fname);
                     $q->bindValue('address',$address);
                     $q->bindValue('city',$city);
                     $q->bindValue('age',$age);
                     $q->bindValue('bgroup',$bgroup);
                     $q->bindValue('email',$email);
                     $q->bindValue('mno',$mno);
                     $q->bindValue('ebgroup',$ebgroup);
                     if($q->execute()){
                         echo "<script>alert('Donor Registration Successfully')</script>";
                     }
                     else{
                        echo "<script>alert('Donor Registration Not Successfully')</script>";
                        }
                 //cxchange user reg code end 
                }

              ?>

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
