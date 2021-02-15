<?php
 $con=mysqli_connect('localhost','root','','dbproj');
 mysqli_query($con,"create view view_show as select u_name,u_address,u_license,Wepon_name,Wepon_Type,cdate from details,wepon,detail_log where details.W_id=wepon.Wepon_Id AND details.u_id=detail_log.detail_id");      
?>
<html>
<head><link rel="stylesheet" href="Enter.css"></head>
<h2>Enter your identity number or CNIC number below</h2>
<form action="" method="post">
<div class="box">
<br><input type="text" name="txt7"><br><br>
<input type="submit" value="submit" name="S5">
<button type="submit" name="btn1" value="submit">Show all</button><br>
<br><button type="submit" name="btn2" value="submit">Go Back</button>
</div>
</html>
<?php
if(isset($_POST['S5'])){
$I_no=$_POST['txt7'];
$con=mysqli_connect('localhost','root','','dbproj');
$query=mysqli_query($con,"select u_name,u_address,u_license,Wepon_name,Wepon_Type from details,wepon where details.W_id=wepon.Wepon_Id AND details.u_id='$I_no'");      
while ($row = mysqli_fetch_array($query)) {   
 echo "<div class='box'><br>Name=",$row['u_name'];
echo "<br>Address=",$row['u_address'];
echo "<br>License Number=",$row['u_license'];
echo"<br>Weapon Name=",$row['Wepon_name'];
echo"<br>Weapon Type=",$row['Wepon_Type'],"</div>";
}
mysqli_close($con);
}
elseif(isset($_POST['btn1'])){
    $I_no=$_POST['txt7'];
$con=mysqli_connect('localhost','root','','dbproj');
$query=mysqli_query($con,"select * from view_show");      
while ($row = mysqli_fetch_array($query)) {   
    echo "<div class='box'><br>Name=",$row['u_name'];
    echo "<br>Address=",$row['u_address'];
    echo "<br>License Number=",$row['u_license'];
    echo"<br>Weapon Name=",$row['Wepon_name'];
    echo"<br>Weapon Type=",$row['Wepon_Type'];
    echo"<br>Entry Date=",$row['cdate'],"</div>";
}
mysqli_close($con);
}
elseif(isset($_POST['btn2'])){
    echo "<script>window.open('Select.php','_self')</script>";


}
?>
            