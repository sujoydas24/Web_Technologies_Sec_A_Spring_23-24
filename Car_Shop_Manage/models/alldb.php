<?php 

require_once('db.php');

function auth($u_id,$u_pass)
{
    $sql_log="select * from manager where mgr_id='$u_id' and mgr_pass='$u_pass'";
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

function insertion($empId, $empName, $empType, $empShift, $empAdd, $empPhone, $empNid, $empSal)
    {
        
        $sql_in= "insert into employee 
        (emp_id, emp_type, emp_shift, emp_name, emp_add, emp_phone, emp_nid, emp_sal)
         values 
         ('$empId', '$empType', '$empShift','$empName','$empAdd', '$empPhone','$empNid','$empSal')";
        $conn= getConnection();
        $insert= mysqli_query($conn, $sql_in);

        return $insert;
    }
    
function showEmp()
    {
        $conn=getConnection();
        $sql_show = "SELECT * FROM employee";
        $show=mysqli_query($conn, $sql_show);

        return $show;
    }
function empDel($id)
    {
        $conn = getConnection();
        $sql_delete = "DELETE FROM employee WHERE emp_id = '$id'";
        $del=mysqli_query($conn, $sql_delete);

        return $del;
    }
function empupdate($id)
    {
        $conn=getConnection();
        $sql_id = "SELECT * FROM employee WHERE emp_id = '$id'";
        $show_id = mysqli_query($conn, $sql_id);
        
        return $show_id;
    }

function tdlist($cId, $cName, $cNid, $cNum, $carM, $loc, $date, $time)
    {
        
        $sql_in_td= "insert into testdrivedata 
        (c_id, c_name, c_nid, c_num, c_model, location, date, time)
         values 
         ('$cId', '$cName', '$cNid','$cNum','$carM', '$loc','$date','$time')";
        $conn= getConnection();
        $ins= mysqli_query($conn, $sql_in_td);

        return $ins;
    }
    function showtdlist()
    {
        $conn=getConnection();
        $sql_showtd = "SELECT * FROM testdrivedata";
        $show=mysqli_query($conn, $sql_showtd);

        return $show;
    }

    function sendMassage($massage, $id)
    {
        $conn= getConnection();
        $sql_massage= "UPDATE testdrivedata
        SET m_massage = '$massage' 
        WHERE c_id = '$id'";
        $res_m=mysqli_query($conn, $sql_massage);

        return $res_m;
    }
?>