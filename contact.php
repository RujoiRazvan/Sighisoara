<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sighisoara o fereastră spre viața medievală, un loc romantic, cu străzi înguste și case fermecătoare.">
  <meta name="keywords" content="Sighisoara, casa lui dracula, turnul cu ceas,vlad dracul,obiective turistice in sighisoara,activitati in sighisoara">
  
  <title>Sighisoara</title>
  <link rel="icon" type="image/jpg" href="images/logo sighisoara.png"/>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
        <a class="navbar-brand" href="index.html"><span>Sighisoara</span></a>
      </div>
      <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="index.html">Acasa</a></li>
            <li role="presentation"><a href="ourstory.html">Scurt istoric</a></li>
            <li role="presentation"><a href="events.html">Evenimente</a></li>
            <li role="presentation"><a href="gallery.html">Galerie</a></li>
            <li role="presentation" class="active"><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <div class="breadcrumb">
    <h2>Contact</h2>
  </div>

  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44165.908520979036!2d24.758687753874106!3d46.22300055387835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474b74f2e6637e5b%3A0x7b12e0094163247f!2sSighi%C8%99oara!5e0!3m2!1sen!2sro!4v1541178833313" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="recent">
          <h3>Trimite-ne un mesaj</h3>
        </div>
        <div id="sendmessage">Mesajul tau a fost trimis. Multumim !</div>
        <div id="errormessage"></div>
        <form action="contact.php" method="post" role="form" class="contactForm">
          <div class="form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Numele tau" />
            <div class="validation"></div>
          </div>
          
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Emailul tau" />
            <div class="validation"></div>
          </div>
          
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subiect" />
            <div class="validation"></div>
          </div>
          
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="" placeholder="Mesaj"></textarea>
            <div class="validation"></div>
          </div>

          <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg">Trimite</button></div>
        </form>
        
        <?php
        	$name = $_POST['name'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'].' '.$name.' '.$email;
			
			if(isset($_POST['submit'])){
				if($name != '' && $message != '' && $email != ''){
					if(strlen($name)>3){
						mail('razvanrujoi@yahoo.com', $subject, $message);
						echo 'Mesajul a fost trimis cu succes !';
					}
					else{
						echo 'Numele este prea scurt';
					}
				}
				else{
					echo 'Trebuie sa completati toate campurile.';
				}
			}
        ?>
        
      </div>

      <div class="col-lg-6">
        <div class="recent">
          <h3>Contacteaza-ne</h3>
        </div>
        <div class="">
          <p>Vrei sa vizitezi Sighisoara dar ai intrebari ? Ne poti gasi folosind formularul de contact din partea stanga sau la numarul de telefon afisat mai jos. </p>

          <h4>Adresa:</h4>Sighisoara, Romania<br>
          <h4>Telefon:</h4>345 578 59 45 416</br>
          <h4>Email:</h4><a href="mailto:razvanrujoi@yahoo.com">razvanrujoi@yahoo.com</a>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="inner-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 1-posts">
           	<h3 class="widgetheading">Activitati</h3>
            <a href="http://www.wanderlust-tour.ro/tours/biking-tours/?lang=ro"><p class="activitati">Cu bicicleta prin Colinele Transilvaniei</p></a>
            <a href="https://www.facebook.com/escapesighisoara/" target="_blank"><p class="activitati">Escape Room</p></a>
            <a href="https://dracul.ro/echitatie/" target="_blank"><p class="activitati">Echitatie la Domeniul Dracula</p></a>
            <a href="http://www.wanderlust-tour.ro/?lang=ro" target="_blank"><p class="activitati">Vizitarea satelor sasesti din imprejurul Sighisoarei</p></a>
          </div>
          <div class="col-md-4 l-posts">
            <h3 class="widgetheading">Informatii utile</h3>
            <ul>
              	<li><a href="intrebari frecvente.html">Intrebari frecvente</a></li>
              	<li><a href="stiri.html">Stiri</a></li>
                <li><a href="#">Camere web</a></li>
            </ul>
          </div>
          <div class="col-md-4 f-contact">
            <h3 class="widgetheading">Contact</h3>
            <a href="mailto:razvanrujoi@yahoo.com">
              <p><i class="fa fa-envelope"></i> razvanrujoi@yahoo.com</p>
            </a>
            <p><i class="fa fa-phone"></i> +345 578 59 45 416</p>
            <p><i class="fa fa-home"></i> Sighisoara, Romania</p>
          </div>
        </div>
      </div>
    </div>

    <div class="last-div">
      <div class="container">
        <div class="row">
          <div class="copyright">
             &copy; 2018 Sighisoara 
            <br>
            Toate drepturile rezervate  
          </div>
          <ul class="social-network">
            <li><a href="https://www.facebook.com/LOVESIGHISOARA/" data-placement="top" title="Facebook"><i class="fab fa-facebook fa-2x"></i></a></li>
            <li><a href="https://www.instagram.com/sighisoara_medievala/" data-placement="top" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UC4UEP1ffbIMAVLbyPGnDJMQ?view_as=subscriber" data-placement="top" title="YouTube"><i class="fab fa-youtube fa-2x"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
     <div style="z-index: 21; position:fixed; bottom:30px; right: 30px;">
       	<img src="images/up.png" onClick="topFunction()" id="myBtn" style="display:none; height:40px; width:40px"/>
	</div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/functions.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>
  <script src="contactform/contactform.js"></script>
  <script>
  	window.onscroll = function() {scrollFunction()};
		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 30) {
				document.getElementById("myBtn").style.display = "block";
			} else {
				document.getElementById("myBtn").style.display = "none";
			}
		}
		
		function topFunction() {
			document.body.scrollTop = 0; // For Safari
			document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
		}
  </script>

</body>

</html>
