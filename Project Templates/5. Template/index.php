<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Welcome ! HTML5 Blog</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="Reg_no_db/formcss.css" rel="stylesheet" type="text/css">
        
        
        <!-- Include JQuery -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>

        <!-- Include Modernizr -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        
        <!-- Main Javascript -->
        <script src="js/main.js"></script>
        
       
    </head>
    <body>
        <header id="main-header">
            <div class="container">
                <div id="branding">
                    <img src="img/logo.png" alt="The TechEdge" height="80px" >
                    <h1>The TechEdge</h1>
                    </div> <!--branding -->
                <nav id="main-nav">
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="single-post.html">SINGLE POST</a></li>                       
                        <li><a href="add-post.html">ADD POST</a></li>            
                    </ul> 
                </nav>
            </div> <!--container -->
        </header>
        
        <div class="container">
            <aside id="sidebar">
                <div class="search">
                    <form>
                        <input type="search" placeholder="Search Our Blog..."><input type="image" src="img/search.png" alt="Search">
                    </form>                
                </div> <!--search -->
                <div class="clearfix"></div>
                <nav id="sub-nav">
                    <ul>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Cloud & Hosting</a></li>
                        <li><a href="#">Gadgets</a></li>
                        <li><a href="#">Software</a></li>
                        <li><a href="#">SEO & Marketing</a></li>
                    </ul>
                </nav>
                <div class="ad">
                    <img src="img/ad.jpg">
                </div>
            </aside>
            
            <section>
                    <article>
                        <header>
                            <h2>Facebook launches friend-tracking feature</h2>
                            <div class="meta">
                                Posted By <strong>Brad Traversy 1 Day Ago</strong> <span>(2 Comments)</span>
                            </div>
                
                        </header>
                        <img src="img/blog1.jpg" alt="post1">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor finibus est, sed tristique arcu ullamcorper et. Nunc vel enim                                  porttitor,tincidunt erat vel, feugiat libero. Etiam faucibus justo quis nisl finibus dapibus. Aenean erat orci, volutpat quis volutpat                                quis, semper aclacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut lobortis velit, quis dignissim lectus. Duis in velit                            vestibulum, commodotortor sit amet, ultrices sem. Suspendisse eu faucibus ex. Donec id nunc non neque feugiat efficitur et ut est.</p>
                        <footer>
                            <a class="readMore" href="single-post.html">Read More...</a>
                        </footer>    
                    </article>
            
                    <article>
                        <header>
                            <h2>Fundamentals every web designer needs to understand</h2>
                            <div class="meta">
                                Posted By <strong>Brad Traversy 5 Days Ago</strong> <span>(2 Comments)</span>
                            </div>
                
                        </header>
                        <img src="img/blog2.jpg" alt="post1">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis dictum consequat. Nulla in erat tempus nulla imperdiet elementum                                imperdieteu massa. Aenean posuere scelerisque mi, id rhoncus mi aliquam in. Donec rhoncus enim arcu, at cursus nibh efficitur id. Maecenas                            fringillaultrices diam, quis posuere leo rutrum et. Curabitur scelerisque suscipit odio ut pretium. Aliquam fringilla a diam ut hendrerit.                            Phasellus turpisnisi, imperdiet id suscipit porttitor, venenatis nec leo. Nam eget lacus ultrices, pulvinar ipsum ac, mollis lorem.</p>
                        <footer>
                            <a class="readMore" href="post-2.html">Read More...</a>
                        </footer>    
                    </article>            
            </section> 
            <div class="clearfix"></div>
            
            <div class="logreg">
           <form class="left" action="Reg_no_db/login.php" method="post">
				<label>Username: </label>
				<input type="text" name="username">
				<br/><br/>
				<label>Password: </label>
				<input type="password" name="password">
				<br/><br/>
				<input class="posalji" type="submit" name="submit" value="Log In!">
			</form>
            <form class="right" action="Reg_no_db/register.php" method="post">
				<label>Username: </label>
				<input type="text" name="username">
				<br/><br/>
				<label>Password: </label>
				<input type="password" name="password">
				<br/><br/>
				<label>Confirm Password: </label>
				<input type="password" name="password2">
				<br/><br/>
				<input class="posalji" type="submit" name="submit" value="Register">
			</form>
			 <div class="clearfix"></div>
            
            </div>
        </div><!--container -->
        
        <footer id="main-footer">
            <div id="footer-right">
                <nav class="footer-nav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>                
                </nav>
                <nav class="footer-nav">
                    <ul>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Cloud & Hosting</a></li>
                        <li><a href="#">Gadgets</a></li>
                        <li><a href="#">Software</a></li>
                        <li><a href="#">SEO & Marketing</a></li>
                    </ul>                
                </nav>
                <nav class="footer-nav">
                    <ul>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Cloud & Hosting</a></li>
                        <li><a href="#">Gadgets</a></li>
                        <li><a href="#">Software</a></li>
                        <li><a href="#">SEO & Marketing</a></li>
                    </ul>                
                </nav>
            
            </div><!--footer right -->
            <br>
            <div id="footer-left">
                <p class="copy">Copyright &copy;2015, The TechEdge</p>            
            </div>        
        </footer>
        
    </body>
</html>
