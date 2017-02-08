<!--For explanations about framework that is used here go to http://www.w3schools.com/w3css/default.asp
I will try to explain most of this code. If you have any questions please contact me on marko.arthofer@yahoo.com. -->

<?php
  include_once 'Captcha/contact_form.php';

  if (!$_SESSION["login"]){
	  header('location: index.php');//check if user is logged in
	  } 

?>
<?php
include_once 'registration/db_config.php';
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">  <!-- check Index_notlogin for explanation, I'm too lazy to do it twice :( -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/w3css.css" rel="stylesheet" type="text/css">
<link href="css/main_after_login.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--<script language="JavaScript" src="JS/gen_validatorv31.js" type="text/javascript"></script>-->
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-brown.css">


<title>Project Exelion</title>

</head>

<body>

   <div class="w3-row  nav w3-brown" style="width:100%; "> <!-- navigation bar, its fixed and it follows text, fixed part is disabled in mobile page-->
      <ul class="w3-navbar remove w3-top w3-border-0 w3-brown w3-center">
         <li class="w3-col" style="width: 20%;" ><a href="" class="w3-hover-grey">Home</a></li> <!-- reset page, if u want to go to start of page -->
         <li class="w3-col" style="width: 20%;" ><a href="#Project" class="w3-hover-grey">Projects</a></li> <!-- anchors, go to spec part of page, uses smoothscrool.js-->
         <li class="w3-col" style="width: 20%;" ><a href="#AboutUs" class="w3-hover-grey">About Us</a></li>
         <li class="w3-col" style="width: 20%;" ><a href="#Contact" class="w3-hover-grey">Contact Us!</a></li>
         <li class="w3-col" style="width: 20%;" ><a href="#Social" class="w3-hover-grey">Socials</a></li>
      </ul>

      <p class="w3-centar name w3-xlarge w3-padding-16">Hello <?php echo $_SESSION["username"];  ?></p> <!-- displays users username on page -->    
      <ul class="w3-navbar w3-border-0 w3-center ">
         <a class="w3-ripple w3-brown w3-btn-block w3-padding-12 w3-hover-grey" href="registration/logout.php">LOGOUT</a> <!-- logout button -->
      </ul>
      <?php
	  	$sql = "SELECT admin FROM users WHERE username='".$_SESSION['username']."'";
		$result = mysqli_query($db, $sql);
		$row = mysqli_fetch_assoc($result);
		if ($row['admin']==1) {
		    echo " <a class='w3-ripple w3-brown w3-btn-block w3-padding-12 w3-hover-grey' href='CRUD/CRUD.php'>ADMIN PAGE</a> ";
		}
	  ?>
 

         
   
   </div>

<div class="w3-row header w3-display-container"  style="max-width:100%;">
		  <img class="slideshow" src="Pics/header1.jpg" alt="naslovna" style="width:100%; height:580px;">
        <img class="slideshow" src="Pics/header2.jpg" alt="naslovna" style="width:100%; height:580px;">
        <img class="slideshow" src="Pics/header3.jpg" alt="naslovna" style="width:100%; height:580px;">
        <img class="slideshow" src="Pics/header4.jpg" alt="naslovna" style="width:100%; height:580px;">
        <img class="slideshow" src="Pics/header5.jpg" alt="naslovna" style="width:100%; height:580px;">
        <img class="slideshow" src="Pics/header6.jpg" alt="naslovna" style="width:100%; height:580px;">
        
        
        <!-- Slideshow uses simple Js code (slideshow.js), 
        parent div is set to "w3-row" to enable responsive design 
        upper part is for pictures, down part for dots that shows what picture is displayed
        -->

   <div class="w3-center w3-section w3-large w3-text-white w3-display-bottomleft" style="width:100%">
       <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
       <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
       <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
       <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
       <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
       <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(6)"></span>
   </div>
       
        
        
 </div>
     <div id="Project"></div> <!-- anchor point -->
  <br/>
  <br/>
  <br/>

  <!-- every parent div contains 3 embbeded divs, which are used for showing project part. -->

   <div class="w3-row w3-content aside" style="max-width:100%;"> 
    	<div class="w3-third w3-display-container">  
       	<a  href="Project Templates/1. Template/template_one/index.php">
       	<img src="Pics/project1.jpg" style="width:100%;  height: 325px;" alt="Project1"> <!-- put picture to full width in % to enable responsive design -->
        </a>
      </div>
    
      <div class="w3-third w3-display-container">
       	<a href="Project Templates/2. Template/site/index.html">
       	<img src="Pics/project2.jpg" style="width:100%;  height: 325px;" alt="Project2">
        </a>
      </div>
    
      <div class="w3-third w3-display-container"> 
       	<a href="Project Templates/3. Template/index.html">
       	<img  src="Pics/project3.jpg" style="width:100%;  height: 325px;" alt="Project3">
        </a>
      </div>
   
  
    	<div class="w3-third w3-display-container">
       	<a href="Project Templates/4. Template/responsive_layout/index.php">
       	<img src="Pics/project4.jpg" style="width:100%;  height: 325px;" alt="Project4">
        </a>
      </div>
     
      <div class="w3-third w3-display-container">
    	   <a href="Project Templates/5. Template/index.php">
    	   <img  src="Pics/project5.jpg" style="width:100%;  height: 325px;" alt="Project5">
         </a>
      </div>
    
      <div class="w3-third w3-display-container">
    	   <a href="Project Templates/6. Template/index.html">
    	   <img class="w3-hover-grayscale" src="Pics/project6.jpg" style="width:100%;  height: 325px;" alt="Project6">
         </a>
       </div>
    
   
   
 	
   <div class="w3-half w3-display-container">
    	 <a href="Project Templates/7. Template/index.html">
    	 <img src="Pics/project7.jpg" style="width:100%;  height: 325px;" alt="Project7">
       </a>
   </div>
    
    
   <div class="w3-half w3-display-container">
    	 <a href="Project Templates/8. Template/index.html">
    	 <img src="Pics/project8.jpg" style="width:100%;  height: 325px;" alt="Project8">
       </a>
   </div>
  
   </div>
    
   <div class="w3-row w3-padding-48 w3-content" id="AboutUs" style="max-width: 95%;"> <!-- about us part, nothing special -->
      <div class="w3-half"><img src="Pics/aboutus.jpg" style="width: 100%"></div>
      <div class="w3-half">
          <h3>About us</h3>
          <p>Lorem ipsum dolor sit amet, quo meis audire placerat eu, te eos porro veniam. An everti maiorum detracto mea. Eu eos dicam voluptaria, erant bonorum albucius et per, ei sapientem accommodare est. Saepe dolorum constituam ei vel. Te sit malorum ceteros repudiandae, ne tritani adipisci vis.</p>
        
          <h3>Why choose us?</h3>
          <p>Lorem ipsum dolor sit amet, quo meis audire placerat eu, te eos porro veniam. An everti maiorum detracto mea. Eu eos dicam voluptaria, erant bonorum albucius et per, ei sapientem accommodare est. Saepe dolorum constituam ei vel.</p>
      </div>

   </div>



   <div class="w3-row w3-padding-48 w3-content w3-center" id="Contact" style="max-width:85%;" > <!-- contact form, uses validator, and a lot of other parts. I will 
                                                                                                explain it later -->
   
         <h2 class="w3-label">Contact Us!</h2>
         <form  method="POST" name="contact_form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" target="captcha"> <!-- make form sends itself to page, so it doesnt go to other page -->

		    <div class="w3-half form1" style="margin-top: 10px;"> <!-- left part of form -->

		          <label class="w3-label" for="name">Name: </label> <!--label and input fields - php code checks for spec cars to disable xss -->
              <br/>
		          <input class="w3-input w3-border w3-round-large shadow" type="text" name="name" value="<?php echo htmlentities($name) ?>"> 
		    
              <label class="w3-label " for="email">Email: </label>
              <br/>
		          <input class="w3-input w3-border w3-round-large shadow" type="text" name="email" value="<?php echo htmlentities($visitor_email) ?>">
		
		          <label class="w3-label " for="message">Message:</label> 
              <br/>
		          <textarea name="message" style="width:100%; margin:0 auto;"><?php echo htmlentities($user_message)?></textarea>
		    </div>

          <div class="w3-half" style="margin-top: 20px;">

		       <img style="width:90%; margin:0 auto;" src="Captcha/captcha_code_file.php?rand=<?php echo rand();?>" id="captchaimg" > <!-- captcha image part. uses captpha_code_file -->
             <br/>

		       <label class="w3-label" for="message">Enter the code above here :</label>
             <br/>
               <input class="w3-input w3-border w3-round-large shadow" style="width:90%; margin:0 auto;" id="6_letters_code" name="6_letters_code" type="text">
             <br/>
		
             <p class="w3-label">Can't read the image? click <a href="javascript: refreshCaptcha();" style="color:#3d6219;">here</a> to refresh</p>
		          <!-- refresh captcha, js code that enables reload of content -->
		 
          </div>

             <input type="submit" value="Submit" class="w3-btn send w3-margin-top w3-brown w3-centar w3-hover-grey w3-round-large w3-hover-shadow" 
             name='submit'>
             
              <?php
					if(!empty($errors)){
						echo "<p>".nl2br($errors)."</p>";
						}  // display errors.. explained in contact_form.php and validator.js file
    				?>
	 </form>
		    	
                
				
         
   </div>

      <div class="w3-row w3-content w3-card" style="max-width: 95%;padding-bottom: 150px; border:0;">
      <iframe class="w3-hover-border-brown" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.7678537010434!2d15.964562415213116!3d45.79587837910628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x54e2a03adf42446f!2sTehni%C4%8Dko+veleu%C4%8Dili%C5%A1te+u+Zagrebu!5e0!3m2!1shr!2slt!4v1478448134293" width="100%" height="450" frameborder="0"  allowfullscreen></iframe>
      
      <div class="w3-row w3-container w3-center w3-theme"> 
          <h3 class="w3-center">Where can You find us?</h3>
          <div class="w3-half">
            <div class="w3-container w3-large"><i class="fa fa-address-card w3-xlarge" style="padding: 5px;"></i>Addres: Vrbik VIII, 10000 Zagreb, Croatia</div>
            <div class="w3-container w3-large"><i class="fa fa-mobile w3-xlarge" style="padding: 5px;""></i> 1<sup>st</sup> Phone number: 01/556-889</div>
          </div>

           <div class="w3-half">
            <div class="w3-container w3-large"><i class="fa fa-envelope w3-xlarge" style="padding: 5px;"></i>E-mail: marko.arthofer@yahoo.com</div>
            <div class="w3-container w3-large"><i class="fa fa-mobile w3-xlarge" style="padding: 5px;""></i> 2<sup>nd</sup> Phone number: 01/226-229</div>
          </div>
      </div>

   </div>

 

<!-- footer -->
  <div class="w3-display-container footer w3-brown" > <!-- part with icons and serch bar -->
	
         <div class="w3-content w3-row footer" style="width:100%;">   
	

            <div class="w3-third  w3-panel w3-centar w3-content" style="max-width:100%;">
                  <ul class="w3-ul w3-border-0 w3-center middle w3-content" style="width:90%;" >
                     <li class="w3-padding-2 w3-hover-shadow"><a class=" w3-round-medium "  href="https://www.youtube.com/channel/UCwF4Ucz5OlAxEZRCa98qkyw">
                     <i class="fa fa-youtube-play w3-xxlarge"></i></a></li>
             
                     <li class="w3-padding-2 w3-hover-shadow"><a class=" w3-round-medium"  href="https://www.facebook.com/Marko.Arty">
                     <i class="fa fa-facebook w3-xxlarge"></i></a></li>
             
                     <li class="w3-padding-2 w3-hover-shadow"><a class=" w3-round-medium"  href="www.twitter.com">
                     <i class="fa fa-twitter w3-xxlarge"></i></a></li>
                     <h4>Find US on Socials!</h4>
                  </ul>
            </div>
            
            <div class="w3-third w3-panel w3-center w3-content" style="max-width:100%:" >
            	<form action="uploader/upload.php" method="post" enctype="multipart/form-data" style="margin-top:54px;" target="myIframe">
   					 Select image to upload: <br/>
    				<input type="file" name="fileToUpload" id="fileToUpload" class="w3-center" >
   					<input type="submit" value="Upload Image" name="submit_image" class="w3-btn send w3-brown w3-hover-grey w3-round-large w3-hover-shadow">
				</form>
                <iframe class="upload" name="myIframe" frameborder="0" border="0" cellspacing="0"></iframe>
            </div>
    
    
    <!-- div made for footer search, uses fontawsome icon pack (added in header) and takes 1/3 of footer-->
            <div class="w3-third search">
             	 <form class="w3-container w3-content" style="margin-top:54px; max-width:100%;" >
                     <label class="w3-label" style="color: white;"><i class="fa fa-search w3-xlarge" style="padding-right:6px; color: white;"></i>Search</label>
                        <input class="w3-input w3-border-0 w3-round-large shadow" type="search" placeholder="Search...">
                </form>
                
                
            </div>
                 
          
            <p class="w3-centar w3-display-bottommiddle" style="margin-left:15px;"> &copy  2016 Arti'Co ALL RIGHTS RESERVED</p>
       </div>

      </div>
   

<script type="text/javascript" src="JS/contact_form.js"></script> <!-- always include js at end of page, it is faster and some code need to load compleatly to work -->
<script type="text/javascript" src="JS/slideshow.js"></script>
<script type="text/javascript" src="JS/smoothscroll.js"></script>
<script type="text/javascript" src="JS/main.js" ></script>

</body>
</html>
