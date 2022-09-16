<?php

// Include the database configuration file
require_once 'dbConfig.php';

// Get image data from database


$sql = "SELECT id,memName,email,phoneNmb FROM committee WHERE id=?";

$stmt = $db->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id,$memName,$email, $phoneNmb);
$stmt->fetch();
$stmt->close();

if($memName!=''){

    echo " <input type=\"text\" name=\"memberEdit\" value=\"". $id ."\" hidden><br>";
   echo "<label>Name : </label>";
      echo "<input type=\"text\" name=\"memName\" class=\"form-control\" value=\"". $memName ."\"><br>";
    echo "<label>Email : </label>";
       echo "<input type=\"text\" name=\"memEmail\" class=\"form-control\" value=\"". $email ."\"><br>";

       echo "<label>Phone number : </label>";
        echo "<input type=\"text\" name=\"memPN\" class=\"form-control\" value=\"". $phoneNmb ."\"><br>";

          echo "<input type=\"submit\" name=\"submit\" value=\"Update\">";

}else echo "No result Found";

?>
