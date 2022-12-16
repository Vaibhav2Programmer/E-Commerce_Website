<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Master</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="css/alertify.css">
    <link rel="stylesheet" href="css/themes/bootstrap.css">
    <script src="alertify.js"></script>
    

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

        $cityId = "";
        $cityName = "";
        $state = "";
        $updateMode = false;


        require_once 'Dbconn.php';

        $obj = new Dbcon();

        $conn = $obj->connect();

        $sql = "select * from city order by cityid";

        $result = $conn->query($sql);

        if(isset($_GET["btnSubmit"])){
            $cityName = $_GET["txtCityName"];
            $state = $_GET["txtState"];

            $sql1 = "INSERT INTO city(Name, State) VALUES ('$cityName', '$state')";

            if($conn->query($sql1)){
                echo "<script> alertify.success('Data Inserted Succesfully !!')</script>";
                echo "<script> window.location.href = '/CarResellerMP/CityMaster.php' </script>";

            }
            else{
                echo "<script> alertify.error(' Error Saving Data !!')</script>";

            }
        }

        if(isset($_GET["edit"])){
            $updateMode = true;
            
            $editId = $_GET["edit"];

            $sql = "select * from city where cityid= $editId";

            $editResult = $conn->query($sql);

            $editRow = $editResult->fetch_assoc();

            $cityId = $editRow["cityid"];
            $cityName = $editRow["Name"];
            $state = $editRow["State"];

        }

        if(isset($_GET["btnUpdate"])){
            $cityId = $_GET["txtCityId"];
            $cityName = $_GET["txtCityName"];
            $state = $_GET["txtState"];

            $sql = "UPDATE city SET Name='$cityName',State='$state' WHERE cityid=$cityId";

            if($conn->query($sql)){
                echo "<script> alert('Updated Successfully !!'); </script>";
                echo "<script> window.location.href='/CarResellerMP/CityMaster.php'; </script>";
            }
        }

        if(isset($_GET["del"])){
            $cityId = $_GET["del"];

            $sql = "DELETE FROM city WHERE cityid = $cityId";

            if($conn->query($sql)){
                echo "<script> window.location.href='/CarResellerMP/CityMaster.php'; </script>";
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
                <h1>City Master</h1>

                <div class="admin-form">

                <form action="CityMaster.php" method="GET">

                    <div class="form-row">
                        <label>City id :</label><br>
                        <input type="text" name="txtCityId" value="<?php echo $cityId; ?>" readonly>
                    </div>

                    <!-- <form action="CityMaster.php" method="GET"> -->
                        <div class="form-row">
                            <label>City Name :</label><br>
                            <input type="text" name="txtCityName" value="<?php echo $cityName;?>">
                        </div>
    
                        <div class="form-row">
                            <label>State :</label><br>
                            <input type="text" name="txtState" value="<?php echo $state; ?>">
                        </div>
    
                        <div class="form-row text-centre">
                            <?php if($updateMode == false) : ?>
                                <input type="submit" name="btnSubmit" value="Save" >
                            <?php else : ?>
                                <input type="submit" name="btnUpdate" value="Update">
                            <?php endif ?>    
                            <input type="reset" onclick="reload()" name="btnReset" >
                        </div>




                    </form>
    
                    <!-- <div class="form-row">
                        <label>City Name :</label><br>
                        <input type="text" name="txtCityId">
                    </div>
    
                    <div class="form-row">
                        <label>State :</label><br>
                        <input type="text" name="txtCityId">
                    </div>
    
                    <div class="form-row text-centre">
                        <input type="submit" name="btnSubmit" >
                        <input type="reset" name="btnReset" >
                    </div> -->


                </div>

                <div class="admin-table">
                    <table>
                        <tr>
                            <th>City Id</th>
                            <th>Name</th>
                            <th>State</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>

                        <!-- <tr>
                            <td>1</td>
                            <td>Inode</td>
                            <td>MP</td>
                            <td><a href="#">Edit</a></td>
                            <td><a href="#">Delete</a></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Sagar</td>
                            <td>MP</td>
                            <td><a href="#">Edit</a></td>
                            <td><a href="#">Delete</a></td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Bhopal</td>
                            <td>MP</td>
                            <td><a href="#">Edit</a></td>
                            <td><a href="#">Delete</a></td>
                        </tr> -->

                        <?php

                            while($row = $result->fetch_assoc()){
                                echo "<tr>";
                                    echo "<td>";
                                        echo $row["cityid"];
                                    echo "</td>";

                                    echo "<td>";
                                        echo $row["Name"];
                                    echo "</td>";

                                    echo "<td>";
                                        echo $row["State"];

                                    echo "</td>";

                                    echo "<td>";
                                        echo "<a href= /CarResellerMP/CityMaster.php?edit=". $row["cityid"] . ">Edit</a>";

                                    echo "</td>";

                                    //  echo "<td>";
                                    //     echo "<a href= /CarResellerMP/CityMaster.php?edit=". $row["cityid"] . ">Edit</a>";

                                    // echo "</td>";

                                    echo "<td>";
                                    echo "<a href=javascript:del(" . $row["cityid"] . ")>Delete</a>";

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
    <!-- <script src="alertify.js"></script> -->

    <!-- <script>
        function alertDemo(){
           
    // alertify.alert('welcome');
    alertify.confirm("Are you sure want to delete.",
  function(){
    alertify.success('Record Deleted');
  },
  function(){
    alertify.error('Action Cancled');
  });
  
        }
    </script> -->

    <script>
        function reload(){
            window.location.href='/CarResellerMP/CityMaster.php';
        }

        function del(id){
            if(confirm("Are you sure want to delete the record ?")){
                window.location.href="/CarResellerMP/CityMAster.php?del=" + id;
            }
        }


    </script>
        

    
    
</body>
</html>