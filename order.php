<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
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
            height: 100%;
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
      <a href="products.php" id="product">My Products</a>
      <a href="ware.php" id="warehouse">Warehouse</a>
      <a href="order.php" id="order">My Orders</a>
    </div>
    <div class="content_block">
      <div id="google_translate_element" style="float: right; margin-right: 25px;"></div>
        <div class="page-header">
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["firstname"]);echo " "; echo htmlspecialchars($_SESSION["lastname"]); ?></b></h1>
            <p>
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
            </p>
        </div>
        <div>
<table id="tab" style="width: 80%">
  <tr>
    <th>Buyers</th>
    <th>Bill Amount</th>
    <th>Status</th>
  </tr>
  <tr>
    <td>aaa</td>
    <td>Rs.500</td>
    <td>Paid</td>
  </tr>
  <tr>
    <td>bbb</td>
    <td>Rs.300</td>
    <td>Not Paid</td>
  </tr>
  
  <tr>
    <td>Cccc</td>
    <td>Rs.100</td>
    <td>Not Paid</td>
  </tr>
  <tr>
    <td>Cccc</td>
    <td>Rs.100</td>
    <td>Not Paid</td>
  </tr>
  <tr>
    <td>Cccc</td>
    <td>Rs.100</td>
    <td>Not Paid</td>
  </tr>
  <tr>
    <td>Cccc</td>
    <td>Rs.100</td>
    <td>Not Paid</td>
  </tr>
</table>

        
    </div>
</body>
</html>