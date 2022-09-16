<?php

// Include the database configuration file
require_once 'dbConfig.php';

// Get image data from database


$sql = "SELECT image FROM events WHERE id=?";

$stmt = $db->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($image);
$stmt->fetch();
$stmt->close();

echo base64_encode($image);

?>