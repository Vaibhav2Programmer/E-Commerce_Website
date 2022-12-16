<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Master</title>
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
        
        require_once 'Dbconn.php';
        $obj = new Dbcon();
        $conn = $obj->connect();


        $customerId = "";
        $name = "";
        $dob = "";
        $email = "";
        $address = "";
        $city = "";
        $contactNo = "";

        $updateMode = false;

        $sql = "select * from customer";

        $result = $conn->query($sql);

        if(isset($_POST["btnSubmit"])){
            $name = $_POST["txtName"];
            $dob = $_POST["txtDOB"];
            $email = $_POST["txtEmail"];
            $address = $_POST["txtAddress"];
            $city = $_POST["txtCity"];
            $contactNo = $_POST["txtContactNo"];

            //$sql = "INSERT INTO customer( Name, Dob, Email, Address, City, ContactNo.) VALUES ('$name', '$dob', '$email', '$address', '$city', '$contactNo')";
             $sql = "INSERT INTO customer(Name, City) VALUES ('$name', '$city')";
             //$sql = "INSERT INTO customer(Dob, Email) VALUES ('$dob', '$email')";



            if($conn->query($sql)){
                echo "<script> window.location.href='/CarResellerMP/UserMaster.php'; </script>";
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
                <h1>User Master</h1>

                <form action="UserMaster.php" method="POST">

                <!-- </form> -->

                <div class="admin-form">

                    <div class="form-row">
                        <label>Customer id :</label><br>
                        <input type="text" name="txtCustomerId" readonly>
                    </div>
    
                    <div class="form-row">
                        <label>Name :</label><br>
                        <input type="text" name="txtName">
                    </div>
    
                    <div class="form-row">
                        <label>DOB :</label><br>
                        <input type="date" name="txtDOB" class="form-element">
                    </div>

                    <div class="form-row">
                        <label>Email :</label><br>
                        <input type="text" name="txtEmail">
                    </div>

                    <div class="form-row">
                        <label>Address :</label><br>
                        <textarea class="form-element" name="txtAddress" ></textarea>
                    </div>

                    <div class="form-row">
                        <label>City :</label><br>
                        <input type="text" name="txtCity">
                    </div>

                    <div class="form-row">
                        <label>Contact No :</label><br>
                        <input type="text" name="txtContactNo">
                    </div>

                    
    
                    <div class="form-row text-centre">
                        <input type="submit" name="btnSubmit" >
                        <input type="reset" name="btnReset" >
                    </div>

                 <!-- </form> -->


                </div>

                <!-- </form> -->
                </form>

                <div class="admin-table">
                    <table>
                        <tr>
                            <th>Customer Id</th>
                            <th>Name</th>
                            <!-- <th>DOB</th>
                            <th>Email</th>
                            <th>Address</th> -->
                            <th>City</th>
                            <th>Contact No</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>

                        <!-- <tr>
                            <td>1</td>
                            <td>XYZ</td>
                            <td>Indore</td>
                            <td>999XXXXX</td>
                            <td><a href="#">Edit</a></td>
                            <td><a href="#">Delete</a></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>ABC</td>
                            <td>Sagar</td>
                            <td>999XXXXX</td>
                            <td><a href="#">Edit</a></td>
                            <td><a href="#">Delete</a></td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>PQR</td>
                            <td>Bhopal</td>
                            <td>999XXXXX</td>
                            <td><a href="#">Edit</a></td>
                            <td><a href="#">Delete</a></td>
                        </tr> -->

                        <?php
                            while($row = $result->fetch_assoc()){
                                echo "<tr>";

                                    echo "<td>";
                                        echo $row["CustomerId"];
                                    echo "</td>";

                                    echo "<td>";
                                        echo $row["Name"];
                                     echo "</td>";

                                    echo "<td>";
                                        echo $row["City"];
                                    echo "</td>";

                                    echo "<td>";
                                        echo $row["ContactNo."];
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
    </script>
    
</body>
</html>