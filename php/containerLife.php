<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT Faculty Student Union</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/titleLogo.png" />
    <?php
    // Include the database configuration file
    require_once 'dbConfig.php';

    // Get image data from database
    $result = $db->query("SELECT title,image,des FROM images ORDER BY id DESC");
    ?>

</head>
<body >
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
                                <a class="nav-link" href="#">Activities</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <a href="../auth/login.php" class="btn_1 d-none d-lg-inline-block">Log In</a>
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


<div class="row"  style=" margin-bottom: 20px;">
    <div id="containerFrame" class="container" style="margin-bottom: 20px;"><br><br>

        <br>
        <div class="container" style="border: none;width:100%;box-shadow: 2px 2px 15px 2px #888888;border-radius: 10px;padding: 40px;">
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
                        <?php $index+=1; ?>
                    <?php } ?>

                <?php }else{ ?>
                    <p class="status error">Image(s) not found...</p>
                <?php } ?>

            </div>
        </div>


    </div>
</div>

<div class="row"  style=" margin-bottom: 20px;">
    <div id="containerFrame2" class="container" style=" margin-bottom: 5px;"><br><br>
        <iframe src="committeeMembers.php" width=100% height="400px" style="border: none;overflow-y: scroll"></iframe>
    </div>
</div>


<div class="row" style="background-color: #003366;">
    <div class="container">
        <br><br><br><br>
        <p style="color: white;text-align: center;">Copyright &copy; Faculty of Information Technology, University of Moratuwa, Sri Lanka.</p>
        <br>
    </div>
</div>
<!-- /////////////////  -->


<div class="jquery-script-ads"><script type="text/javascript"><!--
        google_ad_client = "ca-pub-2783044520727903";
        /* jQuery_demo */
        google_ad_slot = "2780937993";
        google_ad_width = 728;
        google_ad_height = 90;
        //-->
    </script>
    <script type="text/javascript"
            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../js/jquery.contact-buttons.js"></script>
<script src="../js/demo.js"></script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

<script src="../js/container.js"></script>
<script src="../js/jquery-3.4.1.min.js"></script>
</body>
</html>