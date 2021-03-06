<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pokémon.net &middot;</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }
      .container-narrow {
    background color: #003A70; repeat 0 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
        background-color: #3D73DA;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
        color: #EAEBED;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }

      /* Display User Info */
        .login_things{
          text-align: right;
          padding: 10px;
          color: #FFCB05;
        }
        .audio{
          width:100%;
        }
        .audio audio{
          margin: 0 auto;
          display: table;
        }

    </style>


    <link href="bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../bootstrap/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../bootstrap/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../bootstrap/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../bootstrap/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../bootstrap/ico/favicon.png">
  </head>

  <body>
	<div class = "container">
     <?php 
    include 'loginHeader.php'
    ?>
  <br>
	</div>

    <div class="container">

      <div class="masthead">
        <h3 class="muted">Pokémon.net</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="listprod.php">Start Shopping</a></li>
                <li><a href="aboutus.php">About Us</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1><img src="https://i.imgur.com/Pqa1zkt.png" border="0"></h1>
        <a class="btn btn-large btn-success" href="listprod.php">Get started today</a>
      </div>

      <hr>
      <div class = "audio">
      <audio controls autoplay loop>
         <!--<source src="horse.ogg" type="audio/ogg">-->
        <source src="pokerap.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>
    </div>
      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span6">
          <h2>What do we do?</h2>
          <p>Pokémon.net is a web-based e-commerce site that allows trainers to complete their pokédex with ease at the click of a button. Unlike the troublesome endeavor the traditional hunting of pokémon is becoming with the surplus of trainers. Pokémon.net allows you to outshine those traditionalist and truly “catch ‘em all”™ for only a small fee, no walking necessary.
 </p>
          <p><a class="btn" href="aboutus.php">View details &raquo;</a></p>
        </div>
        <div class="span6">
          <h2>Pokémons For the Discerning Collectors</h2>
          <p>Our site features rare and exotic pokémon such as Mimikyu and Chaizard (a previously unseen Pokémon. Our site is the only place you will find such desirable pokémon while at ease in your home or office. </p>
          <p><a class="btn" href="aboutus.php">View details &raquo;</a></p>
       </div>

      <hr>


    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


  </body>
</html>
