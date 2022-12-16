<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        require_once 'DbConn.php';

        $obj = new Dbcon();
        $conn = $obj->connect();

        $sql = "SELECT * FROM car WHERE Status != 'Sold' ORDER by Carid DESC";

        $result = $conn->query($sql);




    ?>

    

    <div class="container">
        <div class="cover">
            <input type="text">
            <input type="button" value="search">
        </div>
        <div class="main-content">
            <h2 style="text-align: center; margin: 25px;">Available Cars</h2>
            <div class="car-view">

            <?php

                while($row = $result->fetch_assoc()){
                    echo '<div class="item">';
                    echo '<a href="productDetails.php?id=' . $row["Carid"] . '">';
                    echo '<img src="img/Product/' . $row["Carid"] . '.jpg" alt="">';
                    echo '<h2>' . $row["Name"] . '</h2>';
                    echo '<h2> &#8377; ' . $row["Price"] . '</h2>';
                    echo '</a>';
                    echo '</div>';


                }


            ?>
                <!-- <div class="item">
                    <img src="img/0.1.jpg" alt="">
                    <h2>Bugati Veyron</h2>
                    <h2>10.5 Lakhs</h2>
                </div> -->

                <!-- <div class="item">
                    <img src="img/0.1.jpg" alt="">
                    <h2>Bugati Veyron</h2>
                    <h2>10.5 Lakhs</h2>
                </div>

                <div class="item">
                    <img src="img/0.1.jpg" alt="">
                    <h2>Bugati Veyron</h2>
                    <h2>10.5 Lakhs</h2>
                </div>

                <div class="item">
                    <img src="img/0.1.jpg" alt="">
                    <h2>Bugati Veyron</h2>
                    <h2>10.5 Lakhs</h2>
                </div>

                <div class="item">
                    <img src="img/0.1.jpg" alt="">
                    <h2>Bugati Veyron</h2>
                    <h2>10.5 Lakhs</h2>
                </div>

                <div class="item">
                    <img src="img/0.1.jpg" alt="">
                    <h2>Bugati Veyron</h2>
                    <h2>10.5 Lakhs</h2>
                </div>

                <div class="item">
                    <img src="img/0.1.jpg" alt="">
                    <h2>Bugati Veyron</h2>
                    <h2>10.5 Lakhs</h2>
                </div>

                <div class="item">
                    <img src="img/0.1.jpg" alt="">
                    <h2>Bugati Veyron</h2>
                    <h2>10.5 Lakhs</h2>
                </div>

                <div class="item">
                    <img src="img/0.1.jpg" alt="">
                    <h2>Bugati Veyron</h2>
                    <h2>10.5 Lakhs</h2>
                </div>

                <div class="item">
                    <img src="img/0.1.jpg" alt="">
                    <h2>Bugati Veyron</h2>
                    <h2>10.5 Lakhs</h2>
                </div>

                <div class="item">
                    <img src="img/0.1.jpg" alt="">
                    <h2>Bugati Veyron</h2>
                    <h2>10.5 Lakhs</h2>
                </div> -->

                <!-- <div class="item">
                    <img src="img/0.1.jpg" alt="">
                    <h2>Bugati Veyron</h2>
                    <h2>10.5 Lakhs</h2>
                </div> -->
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