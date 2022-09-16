<?php
// Include the database configuration file
require_once 'dbConfig.php';

// Get image data from database
if($_POST['title']!='' && $_POST['des']!=''){

    $sql = "Update images SET title='". $_POST['title'] ."', des='" . $_POST['des']. "' WHERE id='".$_POST['idUpdate']."'";

//<?php $db->query("DELETE FROM images WHERE id='".$_POST['dltAC']."'");

    if ($db->query($sql) === TRUE) {
        echo "Record Updated successfully";
    } else {
        echo "Error updating record: " . $db->error;
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
