<?php
session_start();
include("api_connect.php");

$username = $_POST['username'];
$password = $_POST['password'];

$check = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' AND password = '$password' ");

if(mysqli_num_rows($check)>0){
$userdata = mysqli_fetch_array($check);
$_SESSION['userdata'] = $userdata;
echo '
<script>
window.location = "../dashboard.php";
</script>       
';
}
else{
    echo '
    <script>
    alert("User not found!");
    window.location = "login.php";
    </script>       
    ';
}
?>