<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selling Record Master</title>
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
                <h1>Selling Records</h1>

                <div class="admin-form">

                    <div class="form-row">
                        <label>Sales id :</label><br>
                        <input type="text" name="txtSalesId" >
                    </div>
    
                    <div class="form-row">
                        <label>Car Id :</label><br>
                        <input type="text" name="txtCarId">
                    </div>

                    <div class="form-row">
                        <label>Car Name :</label><br>
                        <input type="text" name="txtCarName">
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
                        <label>Final Price :</label><br>
                        <input type="text" name="txtFinalPrice">
                    </div>

                    <div class="form-row">
                        <label>Date :</label><br>
                        <input type="date" name="txtDate" class="form-element">
                    </div>

                    <div class="form-row">
                        <label>Admin Id :</label><br>
                        <input type="text" name="txtAdminId">
                    </div>

                    <div class="form-row">
                        <label>Paper Work :</label><br>
                        <input type="text" name="txtPaperWork">
                    </div>

                 
    
                    <div class="form-row text-centre">
                        <input type="submit" name="btnSubmit" >
                        <input type="reset" name="btnReset" >
                    </div>


                </div>

                <div class="admin-table">
                    <table>
                        <tr>
                            <th>Sales Id</th>
                            <th>Car Name</th>
                            <!-- <th>DOB</th>
                            <th>Email</th>
                            <th>Address</th> -->
                            <th>Customer Name</th>
                            <th>Final Price</th>
                            <th>Date of Sale</th>
                            <th>Employee Id</th>
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