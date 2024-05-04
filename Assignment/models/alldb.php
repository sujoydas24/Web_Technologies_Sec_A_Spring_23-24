<?php
require_once('db.php');

function auth($u_id,$u_pass)
{
    $sql_log="select * from login_info where userid='$u_id' and password='$u_pass'";
    $conn=getConnection();
    $res= mysqli_query($conn,$sql_log);
    $row=mysqli_num_rows($res);
	if($row==1)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function insertUser($name,$nid,$email,$phone){
    $con = getConnection();
    $sql = "insert into emp_info (name, nid, email, phone) values ('$name', '$nid', '$email', '$phone')";
    $status = mysqli_query($con, $sql);
    return $status;
}
function showEmp()
    {
        $conn=getConnection();
        $sql_show = "SELECT * FROM emp_info";
        $show=mysqli_query($conn, $sql_show);
        return $show;
    }
?>