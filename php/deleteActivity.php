<?php
// Include the database configuration file
require_once 'dbConfig.php';

// Get image data from database
if($_POST['dltAC']!=''){
    $sql = "DELETE FROM images WHERE id='".$_POST['dltAC']."'";

//<?php $db->query("DELETE FROM images WHERE id='".$_POST['dltAC']."'");

    if ($db->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $db->error;
    }

}else{
    echo "Please Enter the the Id of the Activity you want to Delete!";
}

?>
<html>
<body>
<br><br>
<a href="adminEdittor.php"><<< Back To Editor</a><br>
<a href="../index.html"><<< Homepage</a>
</body>
</html>
