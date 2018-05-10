<?php 
    session_start();
    
    if(!isset($_SESSION['id_user'])) {
         header('location:sign-in/');
          exit();
      }else {
        $id_user = $_SESSION['id_user'];
        // echo $id_user;
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

        

        <title>:: avana LLC ::</title>

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

                        	<h2><span>avana</span> A Brand new Agency.</h2>

                        </header>

                        <p>This is the story of Avana, a minimal Bootstrap template for creative agency.</p>

						<a href="write.php">Create New Memo!</a>

                    </article>

                </section>

                
            <?php   $sql = "SELECT * FROM post WHERE id_user = '$id_user'";
                    $result = $connect->query($sql);
                    if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {

                    
            ?>
                <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">

                	<figure class="effect-oscar">

                    	<img src="images/home-images/image-1.jpg" alt="" class="img-responsive"/>

                        <figcaption>

                        	<h2><span> <?php echo $row['judul']?> </span></h2>

							<p> <?php echo $row['isi_post']?> </p>

							<!-- <a href="works-details.php">View more</a> -->

                        </figcaption>

                    </figure>

                </section>
                
            <?php
                        }
                    }
            ?>
                

                <div class="clearfix"></div>

                

                <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">

                	<ul class="grid-lod effect-2" id="grid">

                    	<li>

                        	<figure class="effect-oscar">

                            <img src="images/home-images/image-2.jpg".$i alt="" class="img-responsive"/>

                            <figcaption>

                            	

                                    <h2>Studio Thonik <span>Exhibition</span></h2>

                                    <p>Project for Thonik, design studio based in Amsterdam</p>

                                    <!-- <a href="works-details.php">View more</a> -->

                                

                            </figcaption>

                        </figure>

                        </li>

                        

                        <li>

                        	<figure class="effect-oscar">

                            <img src="images/home-images/image-4.jpg" alt="" class="img-responsive"/>

                            <figcaption>

                                <h2>A Brand <span>new Agency</span></h2>

                                <p>Over 40,000 customers use our themes to power their</p>

                                <!-- <a href="works-details.php">View more</a> -->

                            </figcaption>

                        </figure>

                        </li>

                        <li>

                        	<figure class="effect-oscar">

                            <img src="images/home-images/image-2.jpg" alt="" class="img-responsive"/>

                             <figcaption>

                                <h2>Studio Thonik <span>Exhibition</span></h2>

                                    <p>Project for Thonik, design studio based in Amsterdam</p>

                                <!-- <a href="works-details.php">View more</a> -->

                            </figcaption>

                        </figure>

                        </li>

                        <li>

                        	<figure class="effect-oscar">

                            <img src="images/home-images/image-4.jpg" alt="" class="img-responsive"/>

                             <figcaption>

                                <h2>A Brand <span>new Agency</span></h2>

                                <p>Over 40,000 customers use our themes to power their</p>

                                <!-- <a href="works-details.php">View more</a> -->

                            </figcaption>

                        </figure>

                        </li>

                        <li>

                        	<figure class="effect-oscar">

                            <img src="images/home-images/image-2.jpg" alt="" class="img-responsive"/>

                             <figcaption>

                                <h2>Studio Thonik <span>Exhibition</span></h2>

                                    <p>Project for Thonik, design studio based in Amsterdam</p>

                                <!-- <a href="works-details.php">View more</a> -->

                            </figcaption>

                        </figure>

                        </li>

                        <li>

                        	<figure class="effect-oscar">

                            <img src="images/home-images/image-4.jpg" alt="" class="img-responsive"/>

                             <figcaption>

                                <h2>A Brand <span>new Agency</span></h2>

                                <p>Over 40,000 customers use our themes to power their</p>

                                <!-- <a href="works-details.php">View more</a> -->

                            </figcaption>

                        </figure>

                        </li>

                        <li>

                        	<figure class="effect-oscar">

                            <img src="images/home-images/image-2.jpg" alt="" class="img-responsive"/>

                             <figcaption>

                                <h2>Studio Thonik <span>Exhibition</span></h2>

                                    <p>Project for Thonik, design studio based in Amsterdam</p>

                                <!-- <a href="works-details.php">View more</a> -->

                            </figcaption>

                        </figure>

                        </li>

                        <li>

                        	<figure class="effect-oscar">

                            <img src="images/home-images/image-4.jpg" alt="" class="img-responsive"/>

                             <figcaption>

                                <h2>A Brand <span>new Agency</span></h2>

                                <p>Over 40,000 customers use our themes to power their</p>

                                <!-- <a href="works-details.php">View more</a> -->

                            </figcaption>

                        </figure>

                        </li>

                    </ul>

                </section>

                

                <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">

                	<ul class="grid-lod effect-2" id="grid">

                    	<li>

                        	<figure class="effect-oscar">

                            <img src="images/home-images/image-3.jpg" alt="" class="img-responsive"/>

                             <figcaption>

                                <h2>Anatome Milano <span>Galleria</span></h2>

                                <p>Galerie Anatome based in Paris</p>

                                <!-- <a href="works-details.php">View more</a> -->

                            </figcaption>

                        </figure>

                        </li>

                        <li>

                        	<figure class="effect-oscar">

                            <img src="images/home-images/image-5.jpg" alt="" class="img-responsive"/>

                             <figcaption>

                                <h2>A Brand <span>new Agency</span></h2>

                                <p>Over 40,000 customers use our themes to power their</p>

                                <!-- <a href="works-details.php">View more</a> -->

                            </figcaption>

                        </figure>

                        </li>

                        <li>

                        	<figure class="effect-oscar">

                            <img src="images/home-images/image-3.jpg" alt="" class="img-responsive"/>

                             <figcaption>

                                <h2>Anatome Milano <span>Galleria</span></h2>

                                <p>Galerie Anatome based in Paris</p>

                                <!-- <a href="works-details.php">View more</a> -->

                            </figcaption>

                        </figure>

                        </li>

                        <li>

                        	<figure class="effect-oscar">

                            <img src="images/home-images/image-5.jpg" alt="" class="img-responsive"/>

                             <figcaption>

                                <h2>A Brand <span>new Agency</span></h2>

                                <p>Over 40,000 customers use our themes to power their</p>

                                <!-- <a href="works-details.php">View more</a> -->

                            </figcaption>

                        </figure>

                        </li>

                        <li>

                        	<figure class="effect-oscar">

                            <img src="images/home-images/image-3.jpg" alt="" class="img-responsive"/>

                             <figcaption>

                               <h2>Anatome Milano <span>Galleria</span></h2>

                                <p>Galerie Anatome based in Paris</p>

                                <!-- <a href="works-details.php">View more</a> -->

                            </figcaption>

                        </figure>

                        </li>

                        <li>

                             <figure class="effect-oscar">

                                <img src="images/home-images/image-5.jpg" alt="" class="img-responsive"/>

                                 <figcaption>

                                <h2>A Brand <span>new Agency</span></h2>

                                <p>Over 40,000 customers use our themes to power their</p>

                                <!-- <a href="works-details.php">View more</a> -->

                            </figcaption>

                            </figure>

                        </li>

                        <li>

                       	 	<figure class="effect-oscar">

                            <img src="images/home-images/image-3.jpg" alt="" class="img-responsive"/>

                             <figcaption>

                                <h2>Anatome Milano <span>Galleria</span></h2>

                                <p>Galerie Anatome based in Paris</p>

                                <!-- <a href="works-details.php">View more</a> -->

                            </figcaption>

                        </figure>

                        </li>

                        <li>

                        	<figure class="effect-oscar">

                            <img src="images/home-images/image-5.jpg" alt="" class="img-responsive"/>

                             <figcaption>

                                <h2>A Brand <span>new Agency</span></h2>

                                <p>Over 40,000 customers use our themes to power their</p>

                                <!-- <a href="works-details.php">View more</a> -->

                            </figcaption>

                        </figure>

                        </li>

                    </ul>

                </section>

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

                    <li><a href="blog.php" title="Blog">Blog</a></li>

                    <li><a href="contact.php" title="Contact">Contact</a></li>

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