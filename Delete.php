<html>
<head><link rel="stylesheet" href="enter.css"></head>
<h2>Enter your identity number or CNIC number below</h2>
<form action="" method="post">
<div class="box">
<br><input type="text" name="txt6"><br><br>
<input type="submit" value="submit" name="S4"><form><br>
<br><button type="submit" name="btn2" value="submit">Go Back</button>


</html>
<?php
            $con=mysqli_connect('localhost','root','','dbproj');
if(isset($_POST['S4'])||isset($_number)){
$_number=$_POST['txt6'];
$con=mysqli_connect('localhost','root','','dbproj');
mysqli_query($con,"Delete from details where u_id=$_number");
mysqli_query($con,"Delete from detail_log where detail_id=$_number");
echo "<script>alert('Data is Deleted!!')</script>";        }
elseif(isset($_POST['btn2'])){
    echo "<script>window.open('Select.php','_self')</script>";


}

?>