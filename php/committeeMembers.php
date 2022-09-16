<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

    <?php
    // Include the database configuration file
    require_once 'dbConfig.php';

    // Get image data from database
    $result = $db->query("SELECT id,memName,email,phoneNmb FROM committee ORDER BY id");
    ?>
</head>
<body>

<div class="container" style="text-align: center;padding-top: 50px;padding-bottom: 30px">
    <span class="mainHeading" >Committee Members and Contacts</span><br><br><br>

    <?php if($result->num_rows > 0){ ?>
    <?php while($row = $result->fetch_assoc()){
    $post ='';
            switch ($row['id']) {
                case 1:
                    $post ='President';
        break;
                case 2:
                    $post ='Secretary';
                    break;
                case 3:
                    $post ='Vice President';
                    break;
                case 4:
                    $post ='Editor';
                    break;
                 case 5:
                     $post ='Junior Treasurer';
                     break;

                default:
                    $post="-";
            }
        ?>

    <div class="members">

        <span class="subHeadings"><?php echo $post; ?></span><br>
        <p class="para2"><?php echo $row['memName']; ?></p>
        <p class="para2"><?php echo $row['email']; ?></p>
        <p class="para2"><?php echo $row['phoneNmb']; ?></p>


    </div>

        <?php } ?>

    <?php }else{ ?>
        <p class="status error">Member Not Found...</p>
    <?php } ?>
</div>
</body>
</html>