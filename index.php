<?php 
    session_start();
    include 'db.php';
    include 'vendor/autoload.php';

    use phpseclib\Crypt\AES;
    use phpseclib\Crypt\Random;
    $cipher = new AES(); 
    $cipher->setIV('kE4m4N4n-1nF012m4s1');

    

    if(!isset($_SESSION['id_user'])) {
         header('location:sign-in/');
          exit();
    }
    else {
        $id_user = $_SESSION['id_user'];
        $pass = $_SESSION['pass'];  
    
        $cipher->setKey($pass);
    
    }

?>


<!DOCTYPE HTML>

 <html>

    <head>

    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <meta charset="utf-8">

        <!-- Description, Keywords and Author -->

        <meta name="description" content="">

        <meta name="author" content="">

        

        <title> MyMemo </title>

		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">



        <!-- style -->

        <link href="css/style.css" rel="stylesheet" type="text/css">

        <!-- style -->

        <!-- bootstrap -->

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- responsive -->

        <link href="css/responsive.css" rel="stylesheet" type="text/css">

        <!-- font-awesome -->

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- font-awesome -->

        <link href="css/effects/set2.css" rel="stylesheet" type="text/css">

        <link href="css/effects/normalize.css" rel="stylesheet" type="text/css">

        <link href="css/effects/component.css"  rel="stylesheet" type="text/css" >

	</head>



    <body>

    

    	<!-- header -->

        	<header role="header">

            	<div class="container">

                	<!-- logo -->

                    	<h1>

                        	<a href="index.php" title="avana LLC"><img src="images/logo.png" title="avana LLC" alt="avana LLC"/></a>

                        </h1>

                    <!-- logo -->

                    <!-- nav -->

                    <nav role="header-nav" class="navy">

                        <ul>

                            <li class="nav-active"><a href="index.php" title="Work">Home</a></li>

                            <li><a href="about.php" title="About">About</a></li>

                            <li><a href="logout.php" title="Contact">Log Out</a></li>

                        </ul>

                    </nav>

                    <!-- nav -->

                </div>

            </header>

        <!-- header -->

        <!-- main -->

        <main role="main-home-wrapper" class="container">

        	

            <div class="row">

            

            	<section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">

                	<article role="pge-title-content">

                    	<header>

                        	<h2><span>MyMemo</span></h2><h3> Making Your Own Memo</h3>

                        </header>

						<h1><a href="write.php"> >> Create New Memo! <<</a></h1>

                    </article>

                </section>

                
            <?php   

            
                    $sql = "SELECT * FROM post WHERE id_user = '$id_user'";
                    $result = $link->query($sql);
                    $i =0;
                    if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $i = $i%5;   
                            $i++;
                            $src = "images/home-images/image-".$i.".jpg";
                            
                            $judul = $row['judul'];
                            $judul = $cipher->decrypt($judul);
                            
                            $isi_post = $row['isi_post'];
                            $isi_post = $cipher->decrypt($isi_post);
                        
                            

                    
            ?>
                <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">

                	<figure class="effect-oscar">

                    	<img src="<?php echo $src;?>" alt="" class="img-responsive"/>

                        <figcaption>

                        	<h2><span> <?php echo $judul;?> </span></h2>

							<p> <?php echo $isi_post;?> </p>

							<!-- <a href="works-details.php">View more</a> -->

                        </figcaption>

                    </figure>

                </section>
                
            <?php
                        }
                    }
            ?>
                

                
                <div class="clearfix"></div>

            </div>

        </main>

    	<!-- main -->

        <!-- footer -->

        <footer role="footer">

            <!-- logo -->

                <h1>

                    <a href="index.php" title="avana LLC"><img src="images/logo.png" title="avana LLC" alt="avana LLC"/></a>

                </h1>

            <!-- logo -->

            <!-- nav -->

            <nav role="footer-nav">

            	<ul>

                	<li><a href="index.php" title="Work">Work</a></li>

                    <li><a href="about.php" title="About">About</a></li>

                </ul>

            </nav>

            <!-- nav -->

            <ul role="social-icons">

            	<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>

            </ul>

            <p class="copy-right">&copy; 2015  avana LLC.. All rights Resved</p>

        </footer>

        <!-- footer -->

    

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <script src="js/jquery.min.js" type="text/javascript"></script>

        <!-- custom -->

		<script src="js/nav.js" type="text/javascript"></script>

        <script src="js/custom.js" type="text/javascript"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <script src="js/bootstrap.min.js" type="text/javascript"></script>

        <script src="js/effects/masonry.pkgd.min.js"  type="text/javascript"></script>

		<script src="js/effects/imagesloaded.js"  type="text/javascript"></script>

		<script src="js/effects/classie.js"  type="text/javascript"></script>

		<script src="js/effects/AnimOnScroll.js"  type="text/javascript"></script>

        <script src="js/effects/modernizr.custom.js"></script>

        <!-- jquery.countdown -->

        <script src="js/html5shiv.js" type="text/javascript"></script>

    </body>

</html>