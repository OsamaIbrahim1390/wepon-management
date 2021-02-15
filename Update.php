<html>
<head><link rel="stylesheet" href="enter.css"></head>
<h2>UPDATE DATA!!</h2>
<form action="" method="post">
<div class="box">
<h2>CNIC must be same!!</h2> 
CNIC<fieldset><input type="text" name="txt8" size="20"></fieldset>
Name<fieldset><input type="text" name="txt9"></fieldset>
Address<fieldset><input type="text" name="txt10"></fieldset>
Lic Num<fieldset><input type="text" name="txt11"></fieldset>
Wepon ID<fieldset><input type="Text" name="txt12"></fieldset>
<input type="submit" value="submit" name="S6"><br>
<br><button type="submit" name="btn2" value="submit">Go Back</button><form></div>

</html>
<?php
if(isset($_POST['S6']))
{
$Update_Id=$_POST['txt8'];
$Update_Name=$_POST['txt9'];
$Update_Address=$_POST['txt10'];
$Update_Lic=$_POST['txt11'];
$Update_WeponId=$_POST['txt12'];

if(empty($Update_Name)||empty($Update_Address)||empty($Update_Lic)||empty($Update_WeponId)||empty($Update_Id)){
    echo "<script>alert('please must enter the fields..!')</script>";        
   }
   else{
    $con=mysqli_connect('localhost','root','','dbproj');
    $query="update details set u_name='$Update_Name',u_address='$Update_Address',u_License=$Update_Lic,W_Id=$Update_WeponId where u_id=$Update_Id";
            mysqli_query($con,$query);
            echo "<script>alert('Data Submitted..!')</script>";        

}
}
elseif(isset($_POST['btn2'])){
    echo "<script>window.open('Select.php','_self')</script>";


}

?>