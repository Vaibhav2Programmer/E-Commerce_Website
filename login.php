<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                <li><a href="#">Login</a></li>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Contact Us</a></li>
             
            </ul>
        </div>

    </div> -->


    <?php include "navbar.php"; ?>

    <div class="container">
        <div class="login-main">
            <h1>Customer Login</h1>

            <div class="form-row">
                <label>Login id :</label><br>
                <input type="text" name="txtLoginId">
            </div>
            <div class="form-row">
                <label>Password :</label><br>
                <input type="password" name="txtPassword">
            </div>
            <div class="form-row text-centre">
                <input type="submit" name="btnSubmit" >
                <input type="reset" name="btnReset" >
            </div>
        </div>
    </div>

    <div class="gap"></div>
    <!-- <div class="gap"></div>
    <div class="gap"></div> -->
    


    <!-- <div class="footer">
        <p>All rights reserved.</p>
        <p>Copyright carsellerMP 2021</p>
    </div> -->

    <?php include "footer.php"; ?>


    
</body>
</html>