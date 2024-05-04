<?php 
session_start();
if(empty($_SESSION['id'])){
header("location:loginPage.php");
}
else if(isset($_GET['out']))
{
	session_destroy();
	header("location:loginPage.php");

}
require_once('../models/alldb.php');
$show=showEmp();
?>
<html>
<head>
    <title> Registration </title>
</head>
<body>
    <h1>Welcome user <?php echo $_SESSION['id'];?></h1>
    <button name= "out">Log Out</button><br><br>
    <fieldset>
        <legend>Add Employee</legend>
        <form method="post" action="../controler/regCheck.php">
            <table>
                <tr>
                    <td>Name:</td> <td><input type="text" name="name" placeholder=""></td>
                </tr>
                <tr>
                    <td>NID:</td> <td><input type="text" name="nid" placeholder=""></td>
                </tr>
                <tr>
                    <td>Email:</td> <td><input type="text" name="email" placeholder=""></td>
                </tr>
                <tr>
                    <td>Phone Number:</td> <td><input type="text" name="phone" placeholder=""></td>
                </tr>
                
                                
            </table>
            <hr>
            <button name="add">ADD</button>
    </fieldset>
    
    <h2>Employee List</h2>
        <table border= "2">
            <tr>
                <th>Name</th> 
                <th>Email</th> 
                <th>NID</th>
                <th>Phone </th>
            </tr>
            <?php while($s=mysqli_fetch_assoc($show)) {?>
            <tr>
                <td><?php echo $s["name"]?></td>
                <td><?php echo $s["nid"]?></td>
                <td><?php echo $s["email"]?></td>
                <td><?php echo $s["phone"]?></td>
            </tr>
            <?php }?>
        </table>
        </form>


</body>
</html>