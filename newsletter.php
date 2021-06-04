<html>
   <body>
      <head>
		<link rel="stylesheet" href="stylesheet.css">
		<title>Petite Treats - Menu</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="javascript.js" type="text/javascript"></script>
         <title>Petite Treats - Newsletter</title>
      </head>
      <body>
        <body onload= "myFunction()">
	<img src="images/logo2.png" style="max-width:100%;height:auto;">
	<div class="navbar" id="myTopnav">
    <a href="index.html">Home</a>
    <a href="menu.html" class="active">Menu</a>
    <a href="specials.html">Current Specials</a>
    <a href="about.html">About Us</a>
	<a href="javascript:void(0);" class="icon" onclick="myFunction()">
		<i class="fa fa-bars"></i>
	</a>
  </div>
         <div class="centeredimages">
            
            Thank you for signing up <?php echo $_POST["name"]; ?><br>
            The email address you used to sign up: <?php echo $_POST["email"]; ?><br>
			Your date of birth: <?php echo $_POST["birthday"]; ?>
            <br>
            <?php   	  $str = " ";
               if ((isset($_POST["products1"])) || (isset($_POST["products2"])) || (isset($_POST["products3"])) || (isset($_POST["products4"])))
                          $str.= "Your selected products: ";
               $spacing = ", ";
               if (isset($_POST["products1"]))
               $str.= $_POST["products1"].= " ";
                      if (isset($_POST["products2"]))
                          $str.= $_POST["products2"];
               if (isset($_POST["products3"]))
                          $str.= $_POST["products3"];
               if (isset($_POST["products4"]))
                          $str.= $_POST["products4"];
                      echo $str;    ?>
					  <br>
					  <img src="images/congratulations.png">
            
         </div>
         <div class="footer">
            <p class="footer-text-left">
               <a href="index.html">Home</a>
               <a href="menu.html">Menu</a>
               <a href="specials.html">Current-Specials</a>
               <a href="about.html">About-Us</a>
            </p>
            <div class="footer-text-right">
               <p><strong>Contacts:</strong> 0455 5555 555 <strong>Catering:</strong> 0433 3333 333</p>
               <p><strong>Address:</strong>123 Prize Lane, Kirwan, QLD</p>
            </div>
         </div>
   </body>
</html>