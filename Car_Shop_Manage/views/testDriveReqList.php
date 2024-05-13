<?php
    session_start();
    if(empty($_SESSION['id'])){
        header("location:loginPage.php");
            }
    

    require_once('../models/alldb.php');
    $res1=showtdlist();
    
?>

<html>
    <head><title>Test Drive List</title></head>
    <body>
        <h1>Car Shop </h1>
        <h2>Test Drive Request List</h2>
        <form method="get" action="">
        <table border= "2">
            <tr>
                <th>Customer ID</th> 
                <th>Name</th> 
                <th>NID Number</th>
                <th>Contact Number</th>
                <th>Car Model</th> 
                <th>Location</th>
                <th>Date</th>
                <th>Time</th>
                
            </tr>
            <?php while($p=mysqli_fetch_assoc($res1)) {?>
            <tr>
                <td><?php echo $p["c_id"]?></td>
                <td><?php echo $p["c_name"]?></td>
                <td><?php echo $p["c_nid"]?></td>
                <td><?php echo $p["c_num"]?></td>
                <td><?php echo $p["c_model"]?></td>
                <td><?php echo $p["location"]?></td>
                <td><?php echo $p["date"]?></td>
                <td><?php echo $p["time"]?></td>
                
            </tr>
            <?php }?>
        </table>
        
        </form>
        <button><a href="managerDash.php">Back</a></button>
    </body>
</html>