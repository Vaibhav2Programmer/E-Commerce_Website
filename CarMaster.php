<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Master</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="css/alertify.css">
    <link rel="stylesheet" href="css/themes/bootstrap.css">
    

</head>
<body>
    <!-- <div class="navbar">
        <div class="logo">
            <h2>Car Reseller MP</h2>
        </div>
        <div class="menu">
           
        </div>

    </div> -->

    <?php include 'adminNavbar.php'; ?>

    <?php
        require_once 'Dbconn.php';

        $updateMode = false;

        $obj = new Dbcon();
        $conn = $obj->connect();

        $carId = "";
        $name = "";
        $model = "";
        $description = "";
        $engine = "";
        $price = "";
        $milage = "";
        $fuel = "";
        $expertView = "";
        $status = "";

        $sql = "select * from car";

        $result = $conn->query($sql);

        if(isset($_POST["btnSubmit"])){
            $name = $_POST["txtName"];
            $model = $_POST["txtModel"];
            $description = $_POST["txtDescription"];
            $engine = $_POST["txtEngine"];
            $price = $_POST["txtPrice"];
            $milage = $_POST["txtMilage"];
            $fuel = $_POST["txtFuelType"];
            $expertView = $_POST["txtExpertView"];
            $status = $_POST["ddlStatus"];

            // $sql1 = "select max(Carid) as CarId from car";
            // $result = $conn->query($sql1);

            // $row = $result->fetch_assoc();

            // $idNew = $row["CarId"] + 1;
            
            

            $sql = "INSERT INTO car(Name, Model, Description, Engine, Price, Milage, FuleType, ExpertView, Status) VALUES ('$name','$model','$description','$engine','$price','$milage','$fuel','$expertView','$status')";

            if($conn->query($sql)){
                if($_FILES["fldcarImage"]["name"]){

                    $sql1 = "select max(Carid) as CarId from car";
                    $result = $conn->query($sql1);
        
                    $row = $result->fetch_assoc();
        
                    $idNew = $row["CarId"];

                    $targetDirectory = "img/Product/";

                    $ext = pathinfo($_FILES["fldcarImage"]["name"], PATHINFO_EXTENSION);

                    if($ext != "jpg"){
                        echo "<script> alert ('USE ONLY JPEG FILES !!! ')</script>";
                        die;
                    }

                    $targetLocation = $targetDirectory . $idNew . "." . $ext;


                    try{
                        move_uploaded_file($_FILES["fldcarImage"]["tmp_name"],$targetLocation);
                        clearstatcache();
                    }catch (Throwable $th){
                        echo "<script> alert('" . $th . "') </script>";

                    }



                }
                echo "<script> window.location.href = '/CarResellerMP/CarMaster.php' </script>";
            }
        }

        if(isset($_GET["edit"])){
            $carId = $_GET["edit"];

            $sql = "select * from car where Carid = $carId";



            $result = $conn->query($sql);
            $row = $result->fetch_assoc();


            $name = $row["Name"];
            $model = $row["Model"];
            $description = $row["Description"];
            $engine = $row["Engine"];
            $price = $row["Price"];
            $milage = $row["Milage"];
            $fuel = $row["FuleType"];
            $expertView = $row["ExpertView"];
            $status = $row["Status"];


        }

        if(isset($_GET["del"])){
            $carId = $_GET["del"];

            $sql = "delete from car where Carid = $carId";

            if($conn->query($sql)){
                echo "<script> window.location.href = '/CarResellerMP/CarMaster.php' </script>";
            }

        }


    ?>

    

    <div class="container">
        <div class="admin-wrapper">

            <!-- <div class="admin-sidebar">
                <ul>
                    <li><a href="#">User Master</a> </li>
                    <li><a href="#">Car Master</a></li>
                    <li><a href="#">City Master</a></li>
                    <li><a href="#">Selling Records</a></li>
                    <li><a href="#">Selling Request</a></li>
                    <li><a href="#">Booking Verification</a></li>
                </ul>
            </div> -->

            <?php include "adminSidebar.php"; ?>

            <div class="admin-mainContent">
                <h1>Car Master</h1>

                <form action="CarMaster.php" method="POST" enctype="multipart/form-data">

                <div style="display: flex;">

                <!-- <form action="CarMaster.php" method="POST" enctype="multipart/form-data"> -->

                    <div class="admin-form">

                        <div class="form-row">
                            <label>Car id :</label><br>
                            <input type="text" name="txtcarId" value="<?php echo $carId; ?>">
                        </div>
    
                        <div class="form-row">
                            <label>Name :</label><br>
                            <input type="text" name="txtName" value="<?php echo $name; ?>">
                        </div>
        
                        <div class="form-row">
                            <label>Model :</label><br>
                            <input type="text" name="txtModel" value="<?php echo $model; ?>">
                        </div>
        
                        <div class="form-row">
                            <label>Description :</label><br>
                            <textarea class="form-element" name="txtDescription" ><?php echo $description; ?></textarea>
                        </div>
    
                        <div class="form-row">
                            <label>Engine :</label><br>
                            <input type="text" name="txtEngine" value="<?php echo $engine; ?>">
                        </div>
    
                        <!-- <div class="form-row">
                            <label>Run :</label><br>
                            <input type="text" name="txtRun">
                        </div> -->
    
                        <div class="form-row">
                            <label>Price :</label><br>
                            <input type="text" name="txtPrice" value="<?php echo $price; ?>">
                        </div>
    
                        <!-- <div class="form-row">
                            <label>Brand :</label><br>
                            <input type="text" name="txtBrand">
                        </div>
    
                        <div class="form-row">
                            <label>Owner No :</label><br>
                            <input type="text" name="txtOwnerNo">
                        </div>
    
                        <div class="form-row">
                            <label>Accidental Check :</label><br>
                            <input type="radio" name="rbdAccident" value="Yes">Yes &nbsp;
                            <input type="radio" name="rbdAccident" value="No">No
                        </div> -->
    
                        <div class="form-row">
                            <label>Milage :</label><br>
                            <input type="text" name="txtMilage" value="<?php echo $milage; ?>">
                        </div>
    
                        <div class="form-row">
                            <label>Fuel Type :</label><br>
                            <input type="text" name="txtFuelType" value="<?php echo $fuel; ?>">
                        </div>
                        
                        <div class="form-row">
                            <label>Expert View :</label><br>
                            <textarea class="form-element" name="txtExpertView" ><?php echo $expertView; ?></textarea>
                        </div>
    
                        <!-- <div class="form-row">
                            <label>Insurance :</label><br>
                            <input type="radio" name="rbdInsurance" value="Yes">Yes &nbsp;
                            <input type="radio" name="rbdInsurance" value="No">No
                        </div>
    
                        <div class="form-row">
                            <label>Seating Capacity :</label><br>
                            <input type="text" name="txtSeating">
                        </div> -->
    
                        <div class="form-row">
                            <label>Status :</label><br>
                            <select name="ddlStatus" Class="form-element" value="<?php echo $status; ?>">
                                <option value="Available">Available</option>
                                <option value="Booked">Booked</option>
                                <option value="Sold">Sold</option>
    
                            </select>
                        </div>
    
        
                        <div class="form-row text-centre">
                            <!-- <input type="submit" name="btnSubmit" > -->
                            <?php if($updateMode == false) : ?>
                                <input type="submit" name="btnSubmit" value="Save" >
                            <?php else : ?>
                                <input type="submit" name="btnUpdate" value="Update">
                            <?php endif ?>  
                            <input type="reset" name="btnReset" onclick="reload()">
                        </div>
                
                </div>
                <div class="signup-image">
                    <div class="car-image">
                        <img src=" <?php echo "img/Product/" . $carId . ".jpg"; ?> " alt="" width="100%" height="100%">

                                
    
    
                    </div>
                    <div class="gap"></div>
                    <input type="file" name="fldcarImage">
                </div>

                <!-- </form> -->

                <!-- <div class="admin-form">

                    <div class="form-row">
                        <label>Car id :</label><br>
                        <input type="text" name="txtcarId" >
                    </div>

                    <div class="form-row">
                        <label>Name :</label><br>
                        <input type="text" name="txtName">
                    </div>
    
                    <div class="form-row">
                        <label>Model :</label><br>
                        <input type="text" name="txtModel">
                    </div>
    
                    <div class="form-row">
                        <label>Description :</label><br>
                        <textarea class="form-element" name="txtDescription" ></textarea>
                    </div>

                    <div class="form-row">
                        <label>Engine :</label><br>
                        <input type="text" name="txtEngine">
                    </div>

                    <div class="form-row">
                        <label>Run :</label><br>
                        <input type="text" name="txtRun">
                    </div>

                    <div class="form-row">
                        <label>Price :</label><br>
                        <input type="text" name="txtPrice">
                    </div>

                    <div class="form-row">
                        <label>Brand :</label><br>
                        <input type="text" name="txtBrand">
                    </div>

                    <div class="form-row">
                        <label>Owner No :</label><br>
                        <input type="text" name="txtOwnerNo">
                    </div>

                    <div class="form-row">
                        <label>Accidental Check :</label><br>
                        <input type="radio" name="rbdAccident" value="Yes">Yes &nbsp;
                        <input type="radio" name="rbdAccident" value="No">No
                    </div>

                    <div class="form-row">
                        <label>Milage :</label><br>
                        <input type="text" name="txtMilage">
                    </div>

                    <div class="form-row">
                        <label>Fuel Type :</label><br>
                        <input type="text" name="txtFuelType">
                    </div>
                    
                    <div class="form-row">
                        <label>Expert View :</label><br>
                        <textarea class="form-element" name="txtExpertView" ></textarea>
                    </div>

                    <div class="form-row">
                        <label>Insurance :</label><br>
                        <input type="radio" name="rbdInsurance" value="Yes">Yes &nbsp;
                        <input type="radio" name="rbdInsurance" value="No">No
                    </div>

                    <div class="form-row">
                        <label>Seating Capacity :</label><br>
                        <input type="text" name="txtSeating">
                    </div>

                    <div class="form-row">
                        <label>Category :</label><br>
                        <select name="ddlCategory" Class="form-element">

                        </select>
                    </div>

    
                    <div class="form-row text-centre">
                        <input type="submit" name="btnSubmit" >
                        <input type="reset" name="btnReset" >
                    </div> -->


                </div>

                </form>

                <!-- <div class="signup-image">
                    <div class="car-image">
    
    
                    </div>
                    <div class="gap"></div>
                    <input type="file" name="fldcarImage">
                </div> -->

                <div class="admin-table">
                    <table>
                        <tr>
                            <th>Car Id</th>
                            <th>Name</th>
                            <!-- <th>DOB</th>
                            <th>Email</th>
                            <th>Address</th> -->
                            <th>Model</th>
                            <!-- <th>Run</th> -->
                            <th>Price</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>

                        <!-- <tr>
                            <td>1</td>
                            <td>XYZ</td>
                            <td>Indore</td>
                            <td>999XXXXX</td>
                            <td>99900</td>
                            <td><a href="#">Edit</a></td>
                            <td><a href="#">Delete</a></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>ABC</td>
                            <td>Sagar</td>
                            <td>999XXXXX</td>
                            <td>99900</td>
                            <td><a href="#">Edit</a></td>
                            <td><a href="#">Delete</a></td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>PQR</td>
                            <td>Bhopal</td>
                            <td>999XXXXX</td>
                            <td>99900</td>
                            <td><a href="#">Edit</a></td>
                            <td><a href="#">Delete</a></td>
                        </tr> -->
                        <?php
                            while($row = $result->fetch_assoc()){
                                echo "<tr>";

                                    echo "<td>";
                                        echo $row["Carid"];
                                    echo "</td>";

                                    echo "<td>";
                                        echo $row["Name"];
                                     echo "</td>";

                                    echo "<td>";
                                        echo $row["Model"];
                                    echo "</td>";

                                    echo "<td>";
                                        echo $row["Price"];
                                    echo "</td>";

                                    echo "<td>";
                                        echo "<a href= /CarResellerMP/CarMaster.php?edit=" . $row["Carid"] . ">Edit</a>";
                                    echo "</td>";

                                    echo "<td>";
                                        echo "<a href=javascript:del(" . $row["Carid"] . ")>Delete</a>";
                                    echo "</td>";

                                echo "</tr>";


                            }
                        
                        ?>


                    </table>

                    <!-- <button onclick="alertDemo()">okk</button> -->

                </div>

                
             
            </div>

        </div>
       
    </div>
    <!-- <div class="footer">
        <p>All rights reserved.</p>
        <p>Copyright carsellerMP 2021</p>
    </div> -->

    <?php include "footer.php"; ?>

    <script src="alertify.js"></script>

    <script>
//         function alertDemo(){
           
//     // alertify.alert('welcome');
//     alertify.confirm("Are you sure want to delete.",
//   function(){
//     alertify.success('Record Deleted');
//   },
//   function(){
//     alertify.error('Action Cancled');
//   });
  
//         }

function reload(){
            window.location.href='/CarResellerMP/CarMaster.php';
        }

        function del(id){
            if(confirm("Are you sure want to delete the record ?")){
                window.location.href="/CarResellerMP/CarMaster.php?del=" + id;
            }
        }
    </script>
    
</body>
</html>