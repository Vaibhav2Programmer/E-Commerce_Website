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
                <li><a href="#">Login</a></li>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Contact Us</a></li>
             
            </ul>
        </div>

    </div> -->


    <?php include "navbar.php"; ?>

    <?php 
        if(isset($_GET["id"])){

            require_once 'DbConn.php';

            $obj = new Dbcon();
            $conn = $obj->connect();

            $carId = $_GET["id"];

    
            $sql = "SELECT * FROM car WHERE Carid = $carId";
    
            $result = $conn->query($sql);

            $row = $result->fetch_assoc();


        }else{
            echo " <script> alert ('Invalid product data  !!') </script>";
            echo "<script> window.location.href = '/CarResellerMP/' </script>";
        }

        // require_once 'DbConn.php';

        // $obj = new Dbcon();
        // $conn = $obj->connect();

        // $sql = "SELECT * FROM car WHERE Status != 'Sold' ORDER by Carid DESC";

        // $result = $conn->query($sql);




    ?>

    <div class="container">
        <h2 style="text-align: center;margin: 10px;">Product Details</h2>
        <hr><hr>

        <div class="productDetails-main">
            <div class="productImage">
                <!-- <img src="img/0.1.jpg" alt="productImage"> -->
                <?php 
                    echo '<img src="img/Product/' . $row["Carid"] . '.jpg" alt="Product image">';
                ?>
            </div>
            <div class="productDetails">
                <h2><?php echo $row["Name"] ?></h2>
                <h3>Model : <?php echo $row["Model"] ?></h3>
                <h3>Engine : <?php echo $row["Engine"] ?></h3>
                <h3>Price : <?php echo $row["Price"] ?></h3>
                <h3>FuleType : <?php echo $row["FuleType"] ?></h3>
                <!-- <h3><?php echo $row["Name"] ?></h3> -->

                <input type="Button" value="Book Now">
            </div>
        </div>
        <hr><hr>

        <div class="productDetails-other">
            <h3>Description :</h3>
            <p><?php echo $row["Description"] ?></p>
            <div class="gap">

            </div>
             <h3>Expert Comment :</h3>
             <p><?php echo $row["Description"] ?>ExpertView</p>
 
        </div>

    </div>
    <div class="gap"></div>
    <!-- <div class="footer">
        <p>All rights reserved.</p>
        <p>Copyright carsellerMP 2021</p>
    </div> -->

    <?php include "footer.php"; ?>
    
</body>
</html>