<?php

require_once '../php/dbConfig.php';

 if($_SERVER['REQUEST_METHOD']=='POST'){
  $userIndex= $_POST['username'];
 $password =$_POST['pass'];
//
//$username = "root";
//$password = "";
//$database = "itfsu";
//$mysqli = new mysqli("localhost", $username, $password,$database);



   $sql="SELECT pw FROM `users` WHERE un='".$userIndex."'";

       if ($result = $db -> query($sql)) {
       $currentPW="";

       if($row = $result->fetch_assoc()) {
                      $currentPW=$row["pw"];
                     // echo $currentPW." ".$password;
                      if(strcmp($currentPW,$password)==0){
                          $_SESSION['user']=$userIndex;
                          header("Location:../php/adminEdittor.php");
                     }else {
                          $_SESSION['msg'] = "Password incorrect";
                          header("Location:./login.php");
                      }     // include '../login.php';
                  }else {
           $_SESSION['msg'] = "User not Found";
           header("Location:./login.php");
       }
       }



  }

function isLoggedIn()
{
    if (isset($_SESSION['user'])) {
        return true;
    }else{
        return false;
    }
}

?>