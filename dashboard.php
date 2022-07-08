<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location: login.php");
}
$userdata = $_SESSION['userdata'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <style>
#backbtn{
    padding: 10px;
    border-radius: 5px;
    border-color: rgb(175, 37, 67);
    background-color: darkblue;
    color: beige;
    float: left;
}
#logoutbtn{
    padding: 10px;
    border-radius: 5px;
    border-color: rgb(175, 37, 67);
    background-color: darkblue;
    color: beige;
    float: right;
}
</style>
<div id = "mainSection">
<div id = "headerSection">
    <button id = backbtn>Back</button>
    <button id = logoutbtn>Logout</button>
    <h1>Online Voting System</h1>
</div>
<hr>
    <div id="Profile">
        <img src ="../uploads/<?php echo $userdata['photo'] ?>" >
        <img src="../uploadsid/<?php echo $userdata['id_proof'] ?>" alt="Loading....">
    </div>
    </div>
</body>
</html>
