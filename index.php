<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "trip";

$con = mysqli_connect($server, $username, $password, $database);

if(isset($_POST['submit'])){
    $name = $_POST['fname'];
    $lastname = $_POST['last_Name'];
    $gender = $_POST['gender'];
    $mobile = $_POST['number'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip` SET name='$name', last_name='$lastname', gender='$gender', mobile_no='$mobile' , email='$email' , other='$desc'";
    $data = mysqli_query($con,$sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="scan" src="" alt="">
    <div class="container">
        <h1>Welcome to Scan Travel Form</h1>
        <p>Enter Your Details and Submit This Form To Confim Your Participation in The Trip</p>
        <form action="index.php" method="post">
            <input type="text" name="fname" id="fname" placeholder="Enter Your First Name">
        <input type="text" name="last_Name" id="lastname" placeholder="Enter Your Last Name">
        <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
        <input type="number" name="number" id="number" placeholder="Enter Your Mobile Number">
        <input type="email" name="email" id="email" placeholder="Enter Your Email">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Any Other Information Here"></textarea>
        <button type="submit" name="submit" class="btn" >Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>