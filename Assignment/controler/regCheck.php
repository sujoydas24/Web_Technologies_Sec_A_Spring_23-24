<?php
require_once('../models/alldb.php');

if (isset($_POST['add']))
{
    $name = $_POST['name'];
    $nid = $_POST['nid'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $stat = insertUser($name,$nid,$email,$phone);
    if($stat){
      header('location: ../views/regPage.php');
      echo "DB insert done :)";
   }else{
      echo "DB insert error!";
   }
   
}
 



      

?>