<?php
session_start();
if(empty($_SESSION['id'])){
    header("location:loginPage.php");
        }
        
require_once('../models/alldb.php');
$id=$_GET['update'];
$update_emp=empupdate($id);
//print_r($show_id);
$s=mysqli_fetch_assoc($update_emp);


?>


<html>
<head>
    <title> Update </title>
</head>
<body>
    <h1>Car Shop </h1>
    <fieldset>
        <legend>Update</legend>
        <form method="post" action="../controler/empUpdateCheck.php" >
        
            ID: <input type="number" name="emp_id" value="<?php echo $s["emp_id"]?>"><br><br>
            Name: <input type="text" name="emp_name" value="<?php echo $s["emp_name"]; ?>"><br><br>
            Type: <select name="emp_type" id="">
            <option value="<?php echo $s["emp_type"]; ?>"><?php echo $s["emp_type"]; ?></option>    
            <option value="Mechanic">Mechanic</option>
            <option value="Driver">Driver</option>
            <option value="Cutomer Representative">Cutomer Representative</option>
            <option value="Clenar">Clenar</option>
            </select><br><br>
            Shift: <select name="emp_shift" id=""> 
            <option value="<?php echo $s["emp_shift"]; ?>"><?php echo $s["emp_shift"]; ?></option>    
            <option value="9am-3pm">9am-3pm</option>
            <option value="3pm-8pm">3pm-8pm</option>
            </select><br><br>
            Address: <input type="text" name="emp_add" value="<?php echo $s["emp_add"]; ?>"><br><br>
            Phone Number: +880 <input type="number" name="emp_phone" value="<?php echo $s["emp_phone"]; ?>"><br><br>
            NID Number: <input type="number" name="emp_nid" value="<?php echo $s["emp_nid"]; ?>"><br><br>
            Salary: <input type="text" name="emp_sal" value="<?php echo $s["emp_sal"]; ?>"><br><br>
            
            <hr>
            <button name="up"> Update </button>
            <button><a href="empShow.php">Back</a></button>
            
        </form>
    </fieldset>
</body>
</html>