<?php
    session_start();
    if(empty($_SESSION['id'])){
    header("location:loginPage.php");
        }
   

?>

<!DOCTYPE html>
<html>
<head>
    <title>Manager Dashbord</title>
</head>
<body>
<h1>Car Shop</h1>
<h2>Welcome <?php echo $_SESSION['id'];?></h2><br><br>
<a href="empRegPage.php">Employee Details</a>
<a href="testDriveReqList.php">Test Drive Request List</a><br>
    <button> <a href="../controler/logout.php">Logout</a></button>




</body>
</html>