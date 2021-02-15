<html> 
<head><link rel="stylesheet" href="enter.css"></head>
<form action="" method="post">
<br><h2>Add</h2><input type="radio" value="Add" name="R">
<br><h2>Delete</h2><input type="radio" value="Delete" name="R">
<br><h2>Show</h2><input type="radio" value="Show" name="R">
<br><h2>Update</h2><input type="radio" value="Update" name="R"><br><br>
<input type="submit" value="submit" name=S2><br>
<br><button type="submit" name="btn2" value="submit">LogOut</button>

</html>
<?php
if(isset($_POST['R'])){
if(strcmp($_POST['R'],"Add")==0){
    echo "<script>window.open('Add.php','_self')</script>";
}
elseif(strcmp($_POST['R'],"Delete")==0){
    echo "<script>window.open('Delete.php','_self')</script>";

}
elseif(strcmp($_POST['R'],"Show")==0){
    echo "<script>window.open('Show.php','_self')</script>";

}
elseif(strcmp($_POST['R'],"Update")==0){
    echo "<script>window.open('update.php','_self')</script>";

}

}
elseif(isset($_POST['btn2'])){
    echo "<script>window.open('login.php','_self')</script>";


}

?>