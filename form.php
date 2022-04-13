<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername,$username,$password);

if ($conn->connect_error) {
    die("Connection failed :" .$conn->connect_error);
}
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$sql = "INSERT INTO `practice`.`practice`(fname,lname) VALUES('$fname','$lname')";
if ($conn->query($sql)==TRUE) {

    echo "<script> alert(`Login Success`);</script>";
}
else{
    echo "Error:" .$sql . "<br>" . $conn->error;
}
$conn->close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>
        *{
            box-sizing: border-box;
        }
        .container{
            background-color: grey;
            padding: 23px;
            margin: 23px;            
        }
        .container h2,p{
            text-align: center;
        }
        input{
            display: block;
            margin: 12px;
            padding: 7px;
            width: 50%;

            
        }
        .btn{
            margin: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome to my form</h2>
        <p>Enter your details</p>
        <form action="form.php" method="post">
            <label for="fname">Enter your first name</label>
            <input type="text" name="fname" id="fname">

            <label for="lname">Enter your last name</label>
            <input type="text" name="lname" id="lname">

            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</body>
</html>


