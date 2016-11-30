<?php
/**
 * PraviinM
 */

?>

<div id="sidebar">
  <h1>Blog Title</h1>
  <form action="index.php" class="searchform">
    <p>
      <input name="search_query" class="textbox" type="text" />
      <input name="search" class="button" value="Search" type="submit" />
    </p>
  </form>
  <h1>Sidebar Menu</h1>
  <ul class="sidemenu">
    <li><a href="#">Home</a></li>
    <?php if(isUserLoggedIn()) { ?>
      <li><a href="logout.php">Logout</a></li>
   <?php }else{?>
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php">Register</a></li>
    <?php
     
    } ?>
    <li><a href="#">Gallery</a></li>
    <li><a href="#">About Me</a></li>
    <li><a href="#">Contact Me</a></li>
  </ul>
  <h1>Category</h1>
  <ul class="sidemenu">
    <li><a href="#">Java</a></li>
    <li><a href="#">PHP</a></li>
    <li><a href="#">Oracle</a></li>
    <li><a href="#">Node.js</a></li>
    <li><a href="#">Angular.js</a></li>
  </ul>
  <h1>Wise Words</h1>
  <p>&quot;No man becomes rich unless he enriches others.&quot;</p>
  <p class="align-right">- Andrew Carnegie</p>
  <h1>Support Styleshout</h1>
  
  
  <p> Hi there! I’m a RASIKA Full Stack Developer. I am a Web Application developer.
    You can visit my portfolio at<a href="http://webpage.pace.edu/rg81115n/RKG/">Portfolio</a>
    </p>
</div>
</div>
</div>
<div id="footer">
  <div id="footer-content">
    <div class="col float-left space-sep">
      <h2>Where to find me?</h2>
      <ul class="columns">
        <li class="top"><a href="#"><strong>251 S Olds Blvd</strong> Fairless Hills</a></li>
        <li><a href="#"> </a></li>
       
      </ul>
    </div>
    <div class="col float-left">
      <h2>Connect</h2>
      <ul class="columns">
        <li class="top"><a target="blank" href="http://webpage.pace.edu/rg81115n/RKG/"><strong>Portfolio</strong></a></li>
        <li><a href="" target="blank"><strong>GitHub</strong></a></li>
        <li><a href="" target="blank"><strong>StackOverFlow</strong></a></li>
        <li><a href="" target="blank"><strong>Twitter</strong></a></li>
        <li><a href="" target="blank"><strong>Instagram</strong></a></li>
        <li><a href="" target="blank"><strong>Facebook</strong></a></li>
      </ul>
    </div>
    <div class="col2 float-right">
      <p> &copy; copyright 2016 <strong>Rasika</strong><br />
        Design by: <a href="http://www.styleshout.com/">Rasika Garbhe</a> &nbsp; &nbsp; Valid <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> |
        <a href="http://validator.w3.org/check/referer">XHTML</a> </p>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Sitemap</a></li>
        <li><a href="#">RSS Feed</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
</body>
</html>
