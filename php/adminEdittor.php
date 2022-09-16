<?php
// Include the database configuration file
require_once 'dbConfig.php';
require_once '../auth/loginConfig.php';
if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../auth/login.php');
}else  unset($_SESSION['msg']);
// Get image data from database
$result = $db->query("SELECT id,title,des FROM images ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT Faculty Student Union</title>

</head>
<body>
<div class="se-pre-con"></div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/contact-buttons.css">
<link rel="stylesheet" href="../css/banner.css">
<link rel="stylesheet" href="../css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script src="../js/loading.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<!--::header part start::-->
<header class="main_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <!--<img src="images/unionLogo.png" alt="logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item justify-content-center"
                         id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../containerAbout.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="containerLife.php">Activities</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <a href="../auth/signIn.html" class="btn_1 d-none d-lg-inline-block">Sign In</a>
                    <!--<a href="signIn.html" class="btn_1 d-none d-lg-inline-block">Sign In</a>-->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->

<div class="row" >
    <img src="../images/banner_bg.png" alt="banner" height="110px" style="width: 100%">
</div>

<div class="row" style=" padding-top: 30px;">
    <div class="container">
        <span class="mainHeading" style="align-content: center">Admin Editor</span>
        <form action="../auth/logOut.php" method="post">
            <input type="submit" name="btnLogOut"
                   value="Log Out" class="button" id="btnLogOut" style="float: right"/>
        </form>


    </div>
</div>

<!--/////////// Banner Update //////////////-->
<div class="row"  style=" padding-top: 20px;">
    <div id="containerFrame" class="container" style="width:100%; border: 1px solid lightgray;"><br><br>

        <span class="subHeadings"><u>Change Admin Password</u></span><br><br>

        <form action="pwchange.php" method="post" enctype="multipart/form-data" >
            <label style="display: inline-block">Select a password : </label>
            <input type="password" style="display: inline-block" name="pw" >

            <input type="submit" name="submit" value="Update the Password">
        </form>
        <br>
    </div>
</div>


<!--/////////// Add Activity//////////////-->

<!--/////////// Banner Update //////////////-->
<div class="row"  style=" padding-top: 20px;">
    <div id="containerFrame" class="container" style="width:100%; border: 1px solid lightgray;"><br><br>

        <span class="subHeadings"><u>Change Banner Images</u></span><br><br>

        <form action="updateBanner.php" method="post" enctype="multipart/form-data" >
            <label style="display: inline-block">Select Banner Image : </label>
            <input type="text" name="nmb" value="1" style="display: inline-block;text-align: center" readonly>
            <input type="file" style="display: inline-block" name="image" >

            <input type="submit" name="submit" value="Update Image">
        </form>

        <hr>
        <form action="updateBanner.php" method="post" enctype="multipart/form-data" >
            <label style="display: inline-block">Select Banner Image : </label>
            <input type="text" name="nmb" value="2" style="display: inline-block;text-align: center" readonly>
            <input type="file" style="display: inline-block" name="image" >

            <input type="submit" name="submit" value="Update Image">
        </form>
        <br>
    </div>
</div>


<!--/////////// Add Activity//////////////-->
<div class="row"  style=" margin-bottom: 20px;">
    <div id="containerFrame" class="container" ><br><br>

        <form action="upload.php" method="post" enctype="multipart/form-data" style="width:100%; border: 1px solid lightgray;padding: 10px">
            <span class="subHeadings"><u>Add Activities</u></span><br><br>
            <label>Select Image File : </label>
            <input type="file" name="image" ><br>
            <label>Enter Title : </label>
            <input type="text" name="title" class="form-control"><br>
            <label>Enter Description : </label>
            <textarea name="des" id="txtDes" cols="30" rows="10"></textarea><br>
            <input type="submit" name="submit" value="Add Activity">
        </form>
        <br>
    </div>
</div>

<!--/////////// Activity Delete//////////////-->
<div class="row"  style=" margin-bottom: 20px;">
    <div class="container" >
        <div class="col-md-6">

                <form method="post"  action="deleteActivity.php" style="width:100%; border: 1px solid lightgray;padding: 10px">
                    <span class="subHeadings"><u>Delete Activities</u></span><br><br>
                    <label>Enter ID : </label>
                    <input type="text" name="dltAC" class="form-control"><br>

                    <input type="submit" name="submit" id="btnDlt" value="DELETE">
                </form>
            </div>

        <div class="col-md-6">
            <div class="container" style="width:100%">
                <label>Activities Details : </label><br>
                <table class="table-hover table-bordered" style="padding: 30px;width:60%">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                    </tr>

                    <?php if($result->num_rows > 0){ ?>

                        <?php while($row = $result->fetch_assoc()){ ?>
                            <tr>
                                <td>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['title']; ?>
                                </td>
                            </tr>

                        <?php } ?>
                        <?php }else{ ?>
                            <p class="status error">Image(s) not found...</p>
                        <?php } ?>
                </table>
        </div>
        </div>
</div>
</div>

<!--/////////// Activity Update//////////////-->
<div class="row"  style=" margin-bottom: 20px;">
    <div class="container"  style="width:100%; border: 1px solid lightgray;padding: 10px">

            <span class="subHeadings"><u>Update Activities</u></span><br><br>
            <label>Enter Id of the activity you want to update : </label><br>
            <input type="text" name="txtFind" id="txtFindID" class="form-control" style="width: 50%;display: inline-block">

            <input type="submit" id="btnFind" name="submit" value="Find"><br><br><br>

        <form method="post" id="formUpdate" action="updateActivity.php">
        </form>

        <script>

                $(document).on('click',"#btnFind",function () {
                    var upID = $("#txtFindID"). val();

                  $("#btnDlt").attr('disabled','true')  ;

                    var xhttp;
                    if (upID == "") {
                        document.getElementById("formUpdate").innerHTML = "";
                        return;
                    }
                    xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("formUpdate").innerHTML = this.responseText;
                        }
                    };
                    xhttp.open("GET", "getInfo.php?q="+upID, true);
                    xhttp.send();


                });
                $(document).on('click',"#btnUpdate",function () {

                    $("#btnDlt").attr('disabled','false')  ;
                });

        </script>




    </div>
</div>


    <div class="row"  style=" margin-bottom: 20px;">
        <div class="container" style="width:100%; border: 1px solid lightgray;padding: 10px">

            <span class="subHeadings"><u>Change Committee Members</u></span><br><br>
            <label>Select the Post you want to edit : &nbsp;&nbsp;</label>
            <select name="memberEdit" id="mem" onchange="showMember(this.value)">
                <option value="">--Choose Option--</option>
                <option value="1">President</option>
                <option value="2">Secretary</option>
                <option value="3">Vice President</option>
                <option value="4">Editor</option>
                <option value="5">Junior Treasurer</option>
            </select>
            <br><br>

            <script>
                function showMember(str) {
                    var xhttp;
                    if (str == "") {
                        document.getElementById("committeeSec").innerHTML = "";
                        return;
                    }
                    xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("committeeSec").innerHTML = this.responseText;
                        }
                    };
                    xhttp.open("GET", "getCommitteeInfo.php?q="+str, true);
                    xhttp.send();
                }
            </script>

        <form action="committee.php" method="post" id="committeeSec" >

        </form>
        </div>
    </div>



<div class="row" style="background-color: #003366;">
    <br><br><br><br><br>
</div>
<!-- /////////////////  -->


<script src="../js/container.js"></script>
<script src="../js/jquery-3.4.1.min.js"></script>
</body>
</html>