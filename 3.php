<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/docs/examples/starter-template/starter-template.css" rel="stylesheet">

    <!-- My CSS -->
    <link href="style.css" rel="stylesheet">

    <!-- Slick CSS -->
    <link href="slick/slick/slick.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="bootstrap/docs/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div id="main"<?php /* class="container" */ ?>>

      <header>
        <div class="container">
          <h1>Trad Academy</h1>
          <h2>Folk Music and Dance School</h2>
        </div>
      </header>

      <section class="mission-statement">
        <div class="container">
          <h2>Trad Academy Mission Statement</h2>
          <div class="statement col-sm-12 col-md-9">The Trad Academy believes that it is possible for everyone to enjoy taking part in making music, singing and dancing. Through teaching people participatory folk music, song and dance the Trad Academy want to empower people to self­-organise, make their own entertainment and change the world.</div>
        </div>
      </section>

      <section class="whats-coming-up">
        <div class="container squidge col-xs-11"> <!-- this is weird -->
          <h2>What's coming up</h2>
          <div class="carousel">

          <?php for ($i=0; $i < 5; $i++) { ?>

            <div class="carousel-item">
              <h3>The name of a Course</h3>
              <div class="image" style="background-image: url(/img/<?php echo rand(0,4); ?>.jpg)"></div>
              <div class="date">7.00 pm, Monday 8th November</div>
              <div class="location">Buckingham Palace</div> 
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            
          <?php } ?>

          </div>

          <div class="button col-md-4 col-sm-6 col-xs-12">View all upcoming courses</div>

        </div>
      </section>

      <section class="regular-courses">
        <div class="container squidge col-xs-11"> <!-- this is weird -->
          <h2>Regular courses</h2>
          <ul class="carousel">

          <?php for ($i=0; $i < 4; $i++) { ?>

            <div class="carousel-item">
              <h3>One of the courses</h3>
              <div class="image" style="background-image: url(/img/<?php echo rand(0,4); ?>.jpg)"></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            
          <?php } ?>

          </ul>

          <div class="button col-md-4 col-sm-6 col-xs-12">View all our regular courses</div>

        </div>
      </section>


      <section class="tutors">
        <div class="container squidge col-xs-11"> <!-- this is weird -->
          <h2>Our tutors</h2>
          <div class="carousel">

          <?php for ($i=0; $i < 4; $i++) { ?>

            <div class="carousel-item">
              <h3>Name of a tutor</h3>
              <div class="image" style="background-image: url(/img/tutors/<?php echo $i; ?>.jpg)"></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            
          <?php } ?>

          </div>

          <div class="button col-md-4 col-sm-6 col-xs-12">View all our tutors</div>

        </div>
      </section>

      <footer>
        <div class="container">
          &copy; Trad Academy 2016
        </div>
      </footer>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="js/google-jquery-min.js"></script>
    <script>window.jQuery || document.write('<script src="bootstrap/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="slick/slick/slick.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
