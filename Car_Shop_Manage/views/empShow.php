<?php
    session_start();
    if(empty($_SESSION['id'])){
        header("location:loginPage.php");
            }
    require_once('../models/alldb.php');
    $show=showEmp();

    
?>

<html>
    <head><title>Employee Details</title></head>
    <body>
        <h1>Car Shop </h1>
        <h2>Employee List</h2>
        <form method="get" action="../controler/upDelRun.php">
        <table border= "2">
            <tr>
                <th>ID</th> 
                <th>Name</th> 
                <th>Shift</th>
                <th>Type</th>
                <th>Address</th> 
                <th>Phone</th>
                <th>NID Number</th>
                <th>Salary</th>
                <th>Options</th>
            </tr>
            <?php while($s=mysqli_fetch_assoc($show)) {?>
            <tr>
                <td><?php echo $s["emp_id"]?></td>
                <td><?php echo $s["emp_name"]?></td>
                <td><?php echo $s["emp_shift"]?></td>
                <td><?php echo $s["emp_type"]?></td>
                <td><?php echo $s["emp_add"]?></td>
                <td><?php echo $s["emp_phone"]?></td>
                <td><?php echo $s["emp_nid"]?></td>
                <td><?php echo $s["emp_sal"]?></td>
                <td>
                    <button name="update" value= "<?php echo $s["emp_id"]; ?>"> Update </button>
                    <button name= "delete" value="<?php echo $s["emp_id"]; ?>">Delete</button>
                </td>
            </tr>
            <?php }?>
        </table>
        </form>
        <button><a href="empRegPage.php">Back</a></button>
    </body>
</html>