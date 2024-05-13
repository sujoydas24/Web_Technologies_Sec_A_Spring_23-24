<?php
session_start();

?>

<html>
<head>
    <title> Registration </title>
</head>
<body>
    <h1>Car Shop </h1>
    <fieldset>
        <legend>Registration</legend>
        <form method="post" action="../controler/empRegCheck.php" >
            ID: <input type="number" name="emp_id" value=""><br><br>
            Name: <input type="text" name="emp_name" value=""><br><br>
            Type: <select name="emp_type" id="">
            <option value="">Select</option>    
            <option value="Mechanic">Mechanic</option>
            <option value="Driver">Driver</option>
            <option value="Cutomer Representative">Cutomer Representative</option>
            <option value="Clenar">Clenar</option>
            </select><br><br>
            Shift: <select name="emp_shift" id=""> 
            <option value="">Select</option>    
            <option value="9am-3pm">9am-3pm</option>
            <option value="3pm-8pm">3pm-8pm</option>
            </select><br><br>
            Address: <input type="text" name="emp_add" value=""><br><br>
            Phone Number: +880 <input type="number" name="emp_phone" value=""><br><br>
            NID Number: <input type="number" name="emp_nid" value=""><br><br>
            Salary: <input type="text" name="emp_sal" value=""><br><br>
            
            <hr>
            <button name="insert"> Insert </button>
            <button type="reset">Reset</button>
            <button><a href="managerDash.php">Back</a></button>

            <button><a href="empShow.php">Employee List</a></button>
            
            
        </form>
    </fieldset>
</body>
</html>