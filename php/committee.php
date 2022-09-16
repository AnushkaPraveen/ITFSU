<?php
// Include the database configuration file
require_once 'dbConfig.php';

if($_POST['memName']!='' && $_POST['memEmail']!='' && $_POST['memPN']!=''){

    $sql = "UPDATE committee SET memName='".$_POST['memName']."', email='".$_POST['memEmail']."', phoneNmb='".$_POST['memPN']."' WHERE id='".$_POST['memberEdit']."'";

//<?php $db->query("DELETE FROM images WHERE id='".$_POST['dltAC']."'");

    if ($db->query($sql) === TRUE) {
        echo "Record Updated successfully";
    } else {
        echo "Error Updating record: " . $db->error;
    }


}else{
    echo "Add Committee member's details correctly";
}

?>

<html>
<body>
<br><br>
<a href="adminEdittor.php"><<< Back To Editor</a><br>
<a href="../index.html"><<< Homepage</a>
</body>
</html>

