<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/banner.css">
    <link rel="stylesheet" href="../css/style.css">
    <?php
    // Include the database configuration file
    require_once 'dbConfig.php';

    // Get image data from database
    $result = $db->query("SELECT title,image,des FROM images ORDER BY id DESC");
    ?>

</head>
<body style=" background-color: #f2f2f2">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="container" style="width:100%">
    <span class="mainHeading" >Life in Faculty</span><br>

    <div class="activities">


        <?php if($result->num_rows > 0){ ?>
            <?php $index = 0; ?>
                <?php while($row = $result->fetch_assoc()){ ?>

                    <?php if($index%2==0){ ?>
                <div class="row activityRows">
                <div class="col-md-6 section1">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" style="width:100%" class="curveImage"/>
                </div>
                <div class="col-md-6 section2">
                    <p><b><?php echo $row['title']; ?></b></p>
                    <p><?php echo $row['des']; ?></p>
                </div>
                </div>
                    <?php }else{ ?>
                    <div class="row activityRows">
                        <div class="col-md-6 section2">
                            <p><b><?php echo $row['title']; ?></b></p>
                            <p><?php echo $row['des']; ?></p>
                        </div>
                        <div class="col-md-6 section1">
                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" style="width:100%" class="curveImage"/>
                        </div>
                    </div>
                <?php } ?>
                <?php $index+=1;
                    if($index==3)break;
                ?>
                <?php } ?>

        <?php }else{ ?>
            <p class="status error">Image(s) not found...</p>
        <?php } ?>

</div>
</div>

</body>
</html>