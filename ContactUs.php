<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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

        <div class="contactUsWrapper">

            <div class="contactUsMap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.878218537085!2d75.80140201496046!3d22.621022385157875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962f958dcb7169d%3A0xd877c12078e50f0f!2sMedi-Caps%20University!5e0!3m2!1sen!2sin!4v1625456206557!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


            </div>

            <div class="contactUsAddress">
                <h2>Address</h2>
                <hr>
                <h3>Indore</h3>
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic suscipit impedit ratione ea dolore reiciendis</h3>
                <div class="gap"></div>
                <h3>Bhopal</h3>
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad soluta explicabo labore voluptatem rerum nam</h3>

            </div>

        </div>
        <hr>

        <div class="contactUsForm">
            <h2>Write To Us</h2>
            <p>If you have any querry, please fill form, our executive will contact</p>

            <div class="form-row">
                <label>Name :</label><br>
                <input type="text" name="txtName" class="form-element">
            </div>

            <div class="form-row">
                <label>Message :</label><br>
                <textarea name="messag" class="form-element"></textarea>
            </div>

            <div class="form-row text-centre">
                <input type="submit" name="btnSubmit" >
                <input type="reset" name="btnReset" >
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