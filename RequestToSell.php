<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Your Car</title>
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


    <div class="container">
        <div class="Selling-heading">
            <h1>Sell Your Car</h1>
            <div class="gap"></div>
            <p>Please fill this form to provide details about your car. Our company executive will contact you for further process</p>
            <div class="gap"></div>
            <hr>
            <hr>


        </div>
            
        
        <div class="signup-wrapper">

            



            <div class="signup-main">
                <!-- <h1>Sell Your Car</h1>
                <div class="gap"></div>
                <p>Please fill this form to provide details about your car. Our company executive will contact you for further process</p>
                <div class="gap"></div>
                <hr>
                <hr> -->
    
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
                    <input type="password" name="txtContactNo" class="form-element">
                </div>
    
                <div class="form-row">
                    <label>Re-Type Password :</label><br>
                    <input type="password" name="txtContactNo" class="form-element">
                </div>
    
                <div class="form-row text-centre">
                    <input type="submit" name="btnSubmit">
                    <input type="reset" name="btnSubmit">
                </div>
    
                
            </div>
            <div class="signup-image">
                <div class="car-image">


                </div>
                <div class="gap"></div>
                <input type="file" name="fldcarImage">
            </div>

        </div>
        

    </div>
    <!-- <div class="footer">
        <p>All rights reserved.</p>
        <p>Copyright carsellerMP 2021</p>
    </div> -->

    <?php include "footer.php"; ?>
    
</body>
</html>