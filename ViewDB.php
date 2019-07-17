<!DOCTYPE html>
<html class="not-ie no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View Data Base</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.css" type="text/css" rel="stylesheet" media="screen">
    <script src="js/modernizr.js"></script>
    <script src="js/respond.js"></script>
</head>

<body>
    <?php
        require_once("perpage.php");	
        require_once("dbcontroller.php");
        $db_handle = new DBController();
        
        
        $orderby = " ORDER BY FirstName "; 
        $sql = "SELECT * FROM  tb_user_224 ";
        $href = 'DB.php';					
            
        $perPage = 7; 
        $page = 1;
        if(isset($_POST['page'])){
            $page = $_POST['page'];
        }
        $start = ($page-1)*$perPage;
        if($start < 0) $start = 0;
            
        $query =  $sql . $orderby .  " limit " . $start . "," . $perPage; 
        $result = $db_handle->runQuery($query);
        
        if(!empty($result)) {
            $result["perpage"] = showperpage($sql, $perPage, $href);
        }
    ?>
    <div class="container">
        <header>
            <a href="index.html" class="logo">
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
                        <li><a href="register.php">register</a></li>
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
        <section id="content" class="col-lg-20  col-lg-20">
            <div class="cloud">
                <h1>View Informatio</h1>
            </div>
            <div class="content-bg">
                <h1 class="entry-title post-title">View All Information for Register</h1>
              <br>
			<form name="frmSearch" method="post" action="DB.php">
		<table cellpadding="10"  cellspacing="1" class="table  table-hover well" >
        <thead >
        <div >
			<tr >
            <th><strong>ID</strong></th>
            <th><strong>First Name</strong></th>          
           <th><strong>Last Name</strong></th>
			<th><strong>Fater Name</strong></th>
			<th><strong>Mother Name</strong></th>
			<th><strong>Address</strong></th>
			<th><strong>City</strong></th>
			<th><strong>Code Zip</strong></th>
			<th><strong>Brith Date</strong></th>
			<th><strong>Gender</strong></th>
			<th><strong>Phone</strong></th>
            <th><strong>Status</strong></th>	
					</tr>
				</thead>
				<tbody>
					<?php
					if(!empty($result)) {
						foreach($result as $k=>$v) {
						  if(is_numeric($k)) {
					?>
          <tr>
					<td><?php echo $result[$k]["Id"]; ?></td>
          			<td><?php echo $result[$k]["FirstName"]; ?></td>
					<td><?php echo $result[$k]["LastName"]; ?></td>
					<td><?php echo $result[$k]["FatherName"]; ?></td>
					<td><?php echo $result[$k]["MothrName"]; ?></td> 
					<td><?php echo $result[$k]["Address"]; ?></td> 
					<td><?php echo $result[$k]["City"]; ?></td> 
					<td><?php echo $result[$k]["CodeZip"]; ?></td> 
					<td><?php echo $result[$k]["Brithdate"]; ?></td> 
					<td><?php echo $result[$k]["Gender"]; ?></td> 
					<td><?php echo $result[$k]["PhoneNumber"]; ?></td> 
					<td>
                    <a class="btnEditAction" href="edit.php?Id=<?php echo $result[$k]["Id"]; ?>">Edit</a> / 
                    <a class="btnDeleteAction" href="delete.php?action=delete&Id=<?php echo $result[$k]["Id"]; ?>">Delete</a>
					</td>
					</tr>
					<?php
						  }
					   }
                    }
					if(isset($result["perpage"])) {
					?>
					<tr>
					<td colspan="6" align=right> <?php echo $result["perpage"]; ?></td>
					</tr>
					<?php } ?>
				<tbody>
            </table>
            <a id="btnAddAction" class=" btn btn-lg btn-info" href="add.php">Add New</a>
            <input class="btn  btn-danger btn-lg" type="button" style="float: right" name="cancel" value="LogOut" onClick="window.location='index.html';" />

			</form>	
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