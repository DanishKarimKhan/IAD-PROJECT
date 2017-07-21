<?php
  session_start();
  require('connection.php'); //required connection file to connect to the data base and other DB functions

  if(empty($_SESSION['user_id'])){ 
      ///if already logged in go to profile page
		header('Location:signin.php');      
  }else{
      $a = RetriveUserDetails($_SESSION['user_id']);
      $name = $_SESSION['user_name'];
      $email = $_SESSION['user_email'];
      $pic = $_SESSION['user_pic'];
  }
?>
<!DOCTYPE HTML>

<html>
    <head>
        <title><?php echo $name; ?> - ArticleYou</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="assets/css/style.css" type="text/css" rel="stylesheet" />
        <link href="assets/css/main.css" type="text/css" rel="stylesheet" />
    </head>
    <body style="background: url(http://subtlepatterns.com/patterns/sativa.png) repeat fixed;">

    <!-- Header -->
        <header id="header">
            <h1><a href="#"><?php echo $name?></a></h1>
            <nav class="links">
                <ul>
                    <li><a href="index.php" class="active">Dashboard</a></li>
                </ul>
            </nav>
            <nav class="main">
                <ul>
                    <li><a href="newarticle.php" class="fa-pencil-square-o">Create New Article</a></li>
                    
                    <li><a href="logout.php" class="fa-sign-out">Logout</a></li>                    
                </ul>
            </nav>
        </header>

    <!-- User Details -->    
        <div class="container">
            <div class="bdrbx">

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <img class="img-responsive" src="Data/Profile Pictures/<?php echo $pic; ?>" />
                </div>
                
                <div class="col-lg-2 col-md-2 col-sm-2">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <!--<img src="images/user.jpg"/>-->
                        <h2><?php echo $name?></h2>
                        <span>Email :</span><?php echo $email?>
                        </hr>
                </div>

            </div>
        </div>
<br />
<br />
<?php if($a == 1){
        $result = $_SESSION['$uaresult'];
        $row = $_SESSION['$uarow'];  
?>
        <!-- User Posts -->
        <?php foreach($result as $row){ ?>
            <div class="container">
              <div class="bdrbx">
                <!-- Post -->
                    <article class="post">
                        <header>
                            <div class="title">
                                <h2><a href="#"><?php echo $row['article_title']; ?></a></h2>
                                <p><?php echo $row['article_tags']; ?></p>
                            </div>
                            <div class="meta">
                                <time class="published" > <?php echo $row['article_date']; ?></time>
                            </div>
                        </header>
                        <a href="#" class="image featured">
                            <img src="Data/Article Images/<?php echo $row['article_image']; ?>" alt="" />
                        </a>
                        <footer>
                        <p> <?php echo $row['article_content']; ?></p>
                        </footer>
                    </article>
                </div>
            </div>
        <?php } ?>
<?php } ?>
<br />
<br />
       <!-- Footer -->
            <div id="wrapper">
                <section id="footer">
                    <ul class="icons">
                        <li><a href="https://twitter.com/MaidahR" class="fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="https://www.facebook.com/maidah.rizvi" class="fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="http://cezy.org/profile/syedamaidahrizvi/2869298565" class="fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="https://www.linkedin.com/in/maidah-rizvi-239b6ab2" class="fa-linkedin"><span class="label">RSS</span></a></li>
                        <li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
                    </ul>
                    <p class="copyright">&copy; Made by Syeda Maidah Rizvi</a>.</p>
                </section>
             </div>
         
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
    </body>
</html>