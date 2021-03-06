<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
// Include config file
require_once "db/config.php";

$id=$_SESSION["id"];

// Prepare a select statement
$sql = "SELECT * FROM smfr_former_registration WHERE registration_id =$id";

$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
$row = mysqli_fetch_assoc($result);
   
} else {
  echo "0 results";
}

mysqli_close($link);
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        .content_block
        {
            margin-left: 180px;
            margin-right: 500px;
            width: 80%;
            height: 600px;
            background-color: #fff;
        }
    </style>
    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
</head>
<body>
    <div id="mySidenav" class="sidenav">
      <a href="farmer_profile.php" id="Profile">About me</a>
      <a href="product.php" id="product">My Products</a>
      <a href="ware.php" id="warehouse">Warehouse</a>
      <a href="order.php" id="order">My Orders</a>
      <a href="product_price.php" id="order">Price</a>
    </div>
    <div class="content_block">
        <div id="google_translate_element" style="float: right; margin-right: 25px;"></div>
        <div class="page-header">            
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["firstname"]);echo " "; echo htmlspecialchars($_SESSION["lastname"]); ?></b></h1>
            <p>
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
            <a href="product_price.php" class="btn btn-warning">Product Price</a>
            <a href="requirement.php" class="btn btn-warning">Warehouse Requirement</a>
            </p>
        </div>
        <div>
            <table cellpadding="10" cellspacing="5" border="1">
                <tr>
                    <td><label>Name</label></td>
                    <td><label><?php echo htmlspecialchars($_SESSION["firstname"]);echo " "; echo htmlspecialchars($_SESSION["lastname"]); ?></label></td>
                </tr>
                <tr>
                    <td><label>Email</label></td>
                    <td><label><?php echo $row['email'] ?></label></td>
                </tr>
                <tr>
                    <td><label>Mobile No</label></td>
                    <td><label><?php echo $row['mobile_no'] ?></label></td>
                </tr>
                <tr>
                    <td><label>Address</label></td>
                    <td><label><?php echo $row['address'] ?></label></td>
                </tr>
                <tr>
                    <td><label>Gender</label></td>
                    <td><label><?php echo $row['gender'] ?></label></td>
                </tr>
                <tr>
                    <td><label>State</label></td>
                    <td><label><?php echo $row['state'] ?></label></td>
                </tr>
                <tr>
                    <td><label>Bank Details</label></td>
                    <td><label><?php echo $row['bank_details'] ?></label></td>
                </tr>
            </table>
            
        </div>
        
    </div>

</body>
</html>