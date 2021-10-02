<?php
$connection = mysqli_connect('localhost','root');
if($connection){
    echo "connection is stablished!!"
}
else{
    echo "ERROR connection is failed";
}
mysqli_select_db($connection,'authentication');
$username = $_POST['user_name'];
$password = $_POST['pass_word'];
// $checkbox = $_POST['check_box'];
$mobile=$_POST['mobile'];

$email=$_POST['email'];
$confirm_password=$_POST['confirm_password'];
$signup = $_POST['signup'];
$data = "INSERT INTO credential (USERNAME,MOBILE,EMAIL,PASS,CONFIRM_PASSWORD) VALUES('$username','$password','$mobile','$email','$signup')";
mysqli_query ($connection,$data);
header('location:signupsuccessful.php');
?>