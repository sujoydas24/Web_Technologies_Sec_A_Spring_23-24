<?php 

    if(isset($_GET['err'])){
        echo "null username/password";
    }
?>

<html>
<head>
    <title>Login</title>
</head>
<body>
        <form method="post" action="../controler/logCheck.php">
            <fieldset>
                <legend>Login</legend>
                <table>
                    <tr>
                        <td>User ID</td>
                        <td><input type="text" name="id" value=""></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="pass" value=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button name= "log">LogIn</button>
                            
                        </td>
                        
                    </tr>
                </table>
            </fieldset>
        </form>
</body>
</html>