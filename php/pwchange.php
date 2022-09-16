<?php
// Include the database configuration file
require_once 'dbConfig.php';

if($_POST['pw']!=''){
    $un = 'admin';
    $sql = "Update users SET pw='". $_POST['pw'] ."' WHERE un='".$un."'";


    if ($db->query($sql) === TRUE) {
        echo "Password Updated successfully";
    } else {
        echo "Error updating password: " . $db->error;
    }

}else{
    echo "Please fill the text fields to update!";
}


?>
<html>
<body>
<br><br>
<a href="adminEdittor.php"><<< Back To Editor</a><br>
<a href="../index.html"><<< Homepage</a>
</body>
</html>