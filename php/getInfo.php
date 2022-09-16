<?php

    // Include the database configuration file
    require_once 'dbConfig.php';

    // Get image data from database


$sql = "SELECT id,title,des FROM images WHERE id=?";

$stmt = $db->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id,$title, $des);
$stmt->fetch();
$stmt->close();

if($title!='' && $des!=''){
    echo "<label>ID : </label>";
    echo " <input type=\"text\" name=\"idUpdate\" value=\"". $id ."\" readonly><br>";
    echo "<label>Enter Title : </label>";
    echo          " <input type=\"text\" name=\"title\" class=\"form-control\" value=\"". $title ."\"><br>";
    echo          " <label>Enter Description : </label>";
    echo          "<textarea name=\"des\" id=\"txtDes\" cols=\"30\" rows=\"10\" value=\"". $des ."\">". $des ."</textarea><br>";
    echo          "<input type=\"submit\" id=\"btnUpdate\" name=\"submit\" value=\"Update\">";

}else echo "No result Found";

?>
