<!DOCTYPE html>
<html class="not-ie no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kindergarten</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.css" type="text/css" rel="stylesheet" media="screen">
    <script src="js/modernizr.js"></script>
    <script src="js/respond.js"></script>
</head>

<body>
    <div class="container" id="wrapper">
        <header>
            <a href="index-2.html" class="logo">
                <img src="images/logo.png" alt="" />
            </a>
            <nav role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa">&#xf0c9;</span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li class="active"><a href="register.html">register</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li class="has-children"><a>Menu</a>
                            <ul class="children">
                                <li><a href="Babysitter.html">Babysitter</a></li>
                                <li><a href="working.html">Working</a></li>
                                <li><a href="LogIn.html">LogIn Manager</a></li>
                            </ul>
                    </ul>
                </div>
                <div id="sun"></div>
            </nav>
            <div class="clearfix"></div>
        </header>
        <section id="content" class="col-lg-7 col-md-8 col-sm-12">
            <div class="cloud">
                <h1>REGISTER</h1>
            </div>
            <div class="content-bg">
                <h2 class="entry-title post-title">Please Full All Information for Register</h2>
                <div class="container">
                    <div class="col-lg-12 well">
                        <div class="row">
                                        <?php
                        require_once("dbcontroller.php");
                        $db_handle = new DBController();
                        if(!empty($_POST["submit"])) {
                            $query = "INSERT INTO tb_user_224(Id, FirstName, LastName, FatherName, MothrName,Address,City,CodeZip,Brithdate,Gender,PhoneNumber) VALUES('".$_POST["Id"]."','".$_POST["FirstName"]."','".$_POST["LastName"]."','".$_POST["FatherName"]."','".$_POST["MothrName"]."','".$_POST["Address"]."','".$_POST["City"]."','".$_POST["CodeZip"]."','".$_POST["Brithdate"]."','".$_POST["Gender"]."','".$_POST["PhoneNumber"]."')";
                                $result = $db_handle->executeQuery($query);
                            if(!$result){
                                    $message="Problem in Adding to database. Please Retry.";
                            } else {
                                echo "New record created successfully";
                                    echo "<br>To register someone else please go to the registration";
                            }
                        }
                                ?>
                        </div>
                    </div>
        </section>
        <div class="clearfix"></div>
    </div>
    <footer>
        <div class="footer-menu">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm- fa social-media">
                    <a href="mailto:masritamer@gmail.com"><img src="images/google.png" alt="google" title="google">
                        <a target="_blank" href="#"><img src="images/linkedin.png" alt="link" title="linkedIn"></a>
                        <a target="_blank" href="#"><img src="images/twitter.png" alt="link" title="twitter"></a>
                        <a target="_blank" href="#"><img src="images/youtube.png" alt="link" title="youtube"></a>
                        <a target="_blank" href="https://www.facebook.com/tamer.masri.94"><img src="images/facebook.png"
                                alt="faceBook" title="faceBook"></a>
                </div>
                <div class="footer-links">
                    <p>
                        Herzel 18, Rmat Gan &nbsp&nbsp
                        <img src="images/phone.png" alt="link" title="phone">&nbsp03-3652145
                    </p>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="col-lg-12 col-md-12">&copy; Tamer Masri 2019</div>
            </div>
        </div>
    </footer>
    <script src="js/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
</body>

</html>