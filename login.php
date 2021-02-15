

<html>
<head><link rel="stylesheet" href="enter.css"></head>
<body>
    <form action="" method="post">
    <div class="box">
    <h1>Enter User Id and Password</h1>
   <br> <input type="text" name="user"><br> <br>
    <input type="password" name="pass"><br><br>
    <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
            $con=mysqli_connect('localhost','root','','dbproj');

    if(isset($_POST['submit'])||isset($admin_name)||isset($admin_pass))
    {
        
        $admin_name=$_POST['user'];
        $admin_pass=$_POST['pass'];
        $run=mysqli_query($con,"select * from login where username='$admin_name' AND password='$admin_pass'");
        if(mysqli_num_rows($run)>0)
        {
            mysqli_query($con,"CREATE TRIGGER `insertLog` AFTER INSERT ON `details` FOR EACH ROW insert INTO detail_log values(null,NEW.u_id,'Inserted',Now())");
            
            echo "<script>window.open('select.php?logged=Logged in Successfully..!','_self')</script>";
        }
        else
        {
            echo "<script>alert('Password or Username is incorrect..!')</script>";        }
        

    }

?>