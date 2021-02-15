<html>
<head><link rel="stylesheet" href="enter.css"></head>
<h2>Submit your Details</h2>
<form action="" method="post">
<div class="box"><br><br>
Name<fieldset><input type="text" name="txt1"></fieldset>
Identity Number<fieldset><input type="text" name="txt2"></fieldset>
Address<fieldset><input type="text" name="txt3"></fieldset>
License Num<fieldset><input type="text" name="txt4"></fieldset>
Wepon ID<fieldset><input type="Text" name="txt6"></fieldset>
<input type="submit" value="submit" name="S3"><br>
<br><button type="submit" name="btn2" value="submit">Go Back</button>

<form>
</html>
<?php
if(isset($_POST['S3'])){
 $u_name=$_POST['txt1'];
 $u_id=$_POST['txt2'];
 $u_address=$_POST['txt3'];
 $u_Lic=$_POST['txt4']; 
 $u_WeponId=$_POST['txt6'];
if(empty($u_name)||empty($u_id)||empty($u_address)||empty($u_Lic)||empty($u_WeponId)){
 echo "<script>alert('please must enter the fields..!')</script>";        
}
else{
    $con=mysqli_connect('localhost','root','','dbproj');
    $query="insert into details(u_name,u_id,u_address,u_License,W_id)
            values('$u_name',$u_id,'$u_address',$u_Lic,$u_WeponId)";
            mysqli_query($con,$query);
            echo "<script>alert('Data Submitted..!')</script>";        

}

}
elseif(isset($_POST['btn2'])){
    echo "<script>window.open('Select.php','_self')</script>";


}

?>