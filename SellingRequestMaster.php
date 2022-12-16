<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selling Request Master</title>
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
                <h1>Selling Request</h1>

                <div class="admin-form">

                    <div class="form-row">
                        <label>Request id :</label><br>
                        <input type="text" name="txtRequestId" >
                    </div>

                    

                    <div class="form-row">
                        <label>Car Name :</label><br>
                        <input type="text" name="txtCarName">
                    </div>

                    <div class="form-row">
                        <label>Description :</label><br>
                        <textarea class="form-element" name="txtDescription"></textarea>
                    </div>

                    <div class="form-row">
                        <label>Model Year :</label><br>
                        <input type="text" name="txtModel">
                    </div>

                    

                    <div class="form-row">
                        <label>Customer Id :</label><br>
                        <input type="text" name="txtCustomerId">
                    </div>
    

                    <div class="form-row">
                        <label>Customer Name :</label><br>
                        <input type="text" name="txtCustomerName">
                    </div>

                    <div class="form-row">
                        <label>Expected Price :</label><br>
                        <input type="text" name="txtExpectedPrice">
                    </div>

                    <div class="form-row">
                        <label>Engine :</label><br>
                        <input type="text" name="txtEngine">
                    </div>

                   
    
                    <div class="form-row text-centre">
                        <input type="submit" name="btnSubmit" >
                        <input type="reset" name="btnReset" >
                    </div>


                </div>

                <div class="admin-table">
                    <table>
                        <tr>
                            <th>Request Id</th>
                            <th>Car Name</th>
                            <!-- <th>DOB</th>
                            <th>Email</th>
                            <th>Address</th> -->
                            <th>Customer Name</th>
                            <th>Expected Price</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>

                        <tr>
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
                        </tr>
                    </table>

                    <button onclick="alertDemo()">okk</button>

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