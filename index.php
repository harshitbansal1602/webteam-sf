<?php
require 'connect.inc.php';
?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
	<nav>
    <div class="nav-wrapper blue darken-2">
     <a href="#" class="brand-logo center"><i class="material-icons">headset</i>Musicizer</a>
    </div>
  </nav>
	<div class="row">
		<div class="col s12 m1 l2">
		</div>
		<div class="col s12 m10 l8">
		<div class="card-panel purple darken-2">
			<nav>
				<div class="nav-wrapper indigo lighten-1">
					<div class="input-field">
					<input id="search" type="search" class='dropdown-button' data-beloworigin="true" href='#' data-activates='dropdown1'autocomplete="off">
					<label for="search"><i class="material-icons">search</i></label>
					<i class="material-icons">close</i>
					</div>
					
					<ul id='dropdown1' class='dropdown-content'>
						
					</ul>
					
				</div>
			</nav>
			<div id="result"></div>
		</div>
		</div>
	</div>
	<footer class="page-footer blue darken-2"><div class="container">
	<h5 class="white-text">Thanks for using my website</h5></div> 
	<div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
		  </footer>
	
      <!--Import jQuery before materialize.js-->
	  <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/ajax.js"></script>
	</body>
</html>