<?php
session_start();
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Responsive Layout</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">

</head>

<body>
  <header class="main-header clearfix">
    <div>
      <h1 class="name">
        <a href="index.html">Student Name</a>
      </h1>
          <ul class="main-nav clearfix">
             <li><a href="index.html" class="">Home</a></li>
             <li><a href="#portfolio">Portfolio</a></li>
             <li><a href="#skills">Skills</a></li>
             <li><a href="#contact">Contact</a></li>
          </ul>
     </div>
	<style>
	.auto{
		text-align:center;
		width:60%;
		margin:0 auto;
		}
	
	
	</style>
    
    
  </header>

<div class="container clearfix">
  <div class="primary col clearfix">
    <img src="images/responsive-layout-profile2.png" alt="profile pic"/>
  </div>

  <div class="secondary col clearfix">
  <p class="secondary">
    Hello! I'm a media professional who loves design and photography.
    I recently began the front-end web development techdegree at Treehouse
    and I'm thrilled to be learning so much about code.
  </p>
  </div>
</div>

<div class="auto">
  <div class="flex-item ">
    <a href="Reg_basic/login.php">
    <img src="images/portfolio-1.png" alt="portfolio 11"></a>
    <h3>LOGIN</h3>
    <p>
      Press on this image to log in
    </p>
  </div>
  
  
    <div class="flex-item ">
    <a href="Reg_basic/registration.php">
    <img src="images/portfolio-2.png" alt="portfolio 13"/>
    </a>
    <h3>REGISTRATION</h3>
    <p>
     Press on this image to registrate
    </p>
  </div>
  
  	 <div class="flex-item ">
     <a href="logout.php">
    <img src="images/portfolio-4.png" alt="portfolio 12"/>
    </a>
    <h3>LOGOUT</h3>
    <p>
     Press on this image to LOGOUT
    </p>
  </div>
</div>




<div class="flex-container clearfix" style="clear:both;">

<div class="container clearfix">
  <h1 class="h1" id="portfolio">Portfolio</h1>
</div>



  <div class="flex-item ">
    <img src="images/portfolio-1.png" alt="portfolio 1"/>
    <h3>Marketing Page</h3>
    <p>
      This project shows the front page of a marketing website meant for a specific business I'm interested in.
    </p>
  </div>


<div class="flex-item ">
    <img src="images/portfolio-2.png" alt="portfolio 1"/>
    <h3>Search Page</h3>
    <p>
      This project searches through a specific database to find information that the user is trying to look up.
    </p>
</div>

<div class="flex-item ">
    <img src="images/portfolio-3.png" alt="portfolio 1"/>
    <h3>Travel App</h3>
    <p>
      This project compares travel times based on different transportation methods and tells you the best one.
    </p>
</div>

<div class="flex-item">
    <img src="images/portfolio-4.png" alt="portfolio 1"/>
    <h3>Calculator</h3>
    <p>
      Someone can enter in the numbers they want, and press the big blue button and get the result.
    </p>
</div>

<div class="flex-item">
    <img src="images/portfolio-5.png" alt="portfolio 1"/>
    <h3>Photo Gallery</h3>
    <p>
      This project shows pictures from a recent trip to the viewer and allows them to easily navigate through photos.
    </p>
</div>

<div class="flex-item">
    <img src="images/portfolio-6.png" alt="portfolio 1"/>
    <h3>Map of Favorite Spots</h3>
    <p>
      This project uses mapping apis to plot points for my favorite spots in the city for a do-it-yourself walking tour.
    </p>
</div>

<div class="flex-item">
    <img src="images/portfolio-7.png" alt="portfolio 1"/>
    <h3>Media Player</h3>
    <p>
      This project shows how dynamic media players can make your site more interactive.
    </p>
</div>

<div class="flex-item">
    <img src="images/portfolio-8.png" alt="portfolio 1"/>
    <h3>Video on Demand</h3>
    <p>
      This project shows how a video on demand specific site can be used in distant education.
    </p>
</div>

<div class="flex-item">
    <img src="images/portfolio-9.png" alt="portfolio 1"/>
    <h3>Registration</h3>
    <p>
      This project uses a online registration form that allows users to sign up for a site's newsletter.
    </p>
</div>

<div class="flex-item">
    <img src="images/portfolio-10.png" alt="portfolio 1"/>
    <h3>Landing Page</h3>
    <p>
      This project shows the intial page users will see or land on before navigating to the rest of site.
    </p>
</div>

<div class="flex-item">
    <img src="images/portfolio-11.png" alt="portfolio 1"/>
    <h3>Blog</h3>
    <p>
      This project shows a basic layout for a entertainment blog site.
    </p>
</div>

<div class="flex-item">
    <img src="images/portfolio-12.png" alt="portfolio 1"/>
    <h3>Contact Form</h3>
    <p>
      This project uses an interactive contact form that users can use to contact the site's handlers.
    </p>
</div>
</div>

<div class="skill clearfix">
  <h1 class="h2" id="skills">SKILL LEVEL</h1>
</div>

<div class="contentContainer ">
  <div class="progressBar">
    <h4>Video</h4>
    <div class="progressBarContainer">
      <div class="progressBarValue value-90"></div>
    </div>
  </div>
  <div class="progressBar">
    <h4>Design</h4>
    <div class="progressBarContainer">
      <div class="progressBarValue value-90"></div>
    </div>
  </div>
  <div class="progressBar">
    <h4>HTML5</h4>
    <div class="progressBarContainer">
      <div class="progressBarValue value-30"></div>
    </div>
  </div>
  <div class="progressBar">
    <h4>CSS</h4>
    <div class="progressBarContainer">
      <div class="progressBarValue value-40"></div>
    </div>
  </div>
</div>



<div class="contact  clearfix">
  <h2 id="contact">Contact</h2>

  <p>
    If you're interested in chatting or want more information about
    what I've been working on, get in touch!
  </p>
  <p>
    Phone <span style="font-weight: 600">+1(111)555-1234</span>
  </p>
  <p>
    Email <span style="font-weight: 600">email@yoursite.com</span>
  </p>
</div>

<footer class="main-footer clearfix">
  <div>
    <div id="name">
      <a href="index.html">Student Name</a>
    </div>

    <div class="clearfix" id="main-nav">
      <ul id="hidden">
         <li><a href="index.html" class="">Home</a></li>
         <li><a href="#portfolio">Portfolio</a></li>
         <li><a href="#skills">Skills</a></li>
         <li><a href="#contact">Contact</a></li>
      </ul>
      <ul class="hidden">
         <li><a href="#top">Back to top</a></li>
      </ul>
    </div>

   </div>
</footer>
</body>
</html>
