<html>
<head>
    <title>Appointment Booking</title>
    <style>
        .tick{
            text-align:center;
            font-size: 28px;
            border-left:14px solid #4caf50;
            background-color:#e1fde1;
            padding:18px;
        }
      .fa fa-check-circle-o{
          color:#4caf50;
      }
    </style>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="tick"><i class="fa fa-check-circle"style="color:#4caf50;font-size:48px;"></i>Appointment Successfully Booked</div>
<?php
$servername = "localhost";
$username = "id3250181_anaveen";
$password = "qwerty";
$db  = "id3250181_442877";

//Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 $anm =  $_POST["name"];
 $email = $_POST["email"];
 $phone = $_POST["phone"];
 $age = $_POST["age"];
 $addr = $_POST["addr"];
 $adate = $_POST["adate"];
 $desc = $_POST["desc"];

$sql = "INSERT INTO appointment (name,email,phone,age,addr,date,description)
VALUES ('$anm','$email','$phone','$age','$addr','$adate','$desc')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 

$conn->close();
?> 
</body>
</html>