<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <!-- <div class="navbar">
        <div class="logo">
            <h2>Car Reseller MP</h2>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Sell</a></li>
                <li><a href="#" >About Us</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Contact Us</a></li>
             
            </ul>
        </div>

    </div> -->


    <?php include "navbar.php"; ?>

    <?php

        if(isset($_POST["btnSubmit"])){
            require_once 'Dbconn.php';

            $obj = new Dbcon();
            $conn = $obj->connect();

            $name = $_POST["txtName"];
            $dob = $_POST["txtDOB"];
            $email = $_POST["txtEmail"];
            $address = $_POST["txtAddress"];
            $city = $_POST["txtCity"];
            $contactNo = $_POST["txtContactNo"];
            $password = $_POST["txtPassword"];

            $sql = "INSERT INTO customer(Name, Dob, Email, Address, City, ContactNo., Password) VALUES ('$name','$dob','$email','$address','$city','$contactNo','$password')";

            //$sql = "INSERT INTO city(Name, Password) VALUES ('$name', '$password')";

            if($conn->query($sql)){
                echo " <script> alert ('User Registration Sucessfull  !!') </script>";
                echo "<script> window.location.href = '/CarResellerMP/' </script>";
            }

        }


        //  require_once 'DbConn.php';

        //  $obj = new Dbcon();
        //  $conn = $obj->connect();

        //  $name = $_POST["txtName"];
        //  $dob = $_POST["txtDOB"];
        //  $email = $_POST["txtEmail"];
        //  $address = $_POST["txtAddress"];
        //  $city = $_POST["txtCity"];
        //  $contactNo = $_POST["txtContactNo"];
        //  $password = $_POST["txtPassword"];

        //  $sql = "INSERT INTO customer(Name, Dob, Email, Address, City, ContactNo., Password) VALUES ('$name','$dob','$email','$address','$city','$contactNo','$password')";

        //  if($conn->query($sql)){
        //     echo " <script> alert ('User Registration Sucessfull  !!') </script>";
        //     echo "<script> window.location.href = '/CarResellerMP/' </script>";
        //  }
    ?>

    <div class="container">
        <div class="signup-main">
            <h1>Customer Registration</h1>

            <form action="signup.php" method="POST">

           

            <div class="form-row">
                <label>Name :</label><br>
                <input type="text" name="txtName" class="form-element">
            </div>

            <div class="form-row">
                <label>Date of Birth :</label><br>
                <input type="date" name="txtDOB" class="form-element">
            </div>

            <div class="form-row">
                <label>Email id :</label><br>
                <input type="text" name="txtEmail" class="form-element">
            </div>

            <div class="form-row">
                <label>Address :</label><br>
                <textarea name="txtAddress" class="form-element" ></textarea>
            </div>

            <div class="form-row">
                <label>City :</label><br>
                <input type="text" name="txtCity" class="form-element">
            </div>

            <div class="form-row">
                <label>Contact No :</label><br>
                <input type="text" name="txtContactNo" class="form-element">
            </div>

            <div class="form-row">
                <label>Password :</label><br>
                <input type="password" name="txtPassword" class="form-element">
            </div>

            <div class="form-row">
                <label>Re-Type Password :</label><br>
                <input type="password" name="txtRePassword" class="form-element">
            </div>

            <div class="form-row text-centre">
                <input type="submit" name="btnSubmit">
                <input type="reset" name="btnReset">
            </div>

            </form>

            
        </div>

    </div>
    <!-- <div class="footer">
        <p>All rights reserved.</p>
        <p>Copyright carsellerMP 2021</p>
    </div> -->

    <?php include "footer.php"; ?>

    
</body>
</html>