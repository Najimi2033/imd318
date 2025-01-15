<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thinkify</title>
  <link rel="stylesheet" href="studypack.css">
</head>
<header>
    <div class="navbar">
            <img src="images/logo.png" alt="Your Logo" />
            <div>
                <a href="index.php">Home</a>
                <div class="dropdown">
                    <a href="our_programs.php">Our Programs</a>
                    <div class="dropdown-content">
                        <a href="mathematics.php">Mathematics</a>
                        <a href="science.php">Science</a>
                    </div>
                </div>
                <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                    <a href="studypack.php">StudyPack</a>
                    <a href="branch.php">Branch</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="list_subject.php">Subject Registration</a>
                    <a href="table_list_kid.php">Register Kid here!</a>
                    <a href="update.php">
                        <img src="/images/profile.jpg" class="profile">
                    </a>
                    <?php else: ?>
                    <a href="studypack.php">StudyPack</a>
                    <a href="branch.php">Branch</a>
                    <a href="signup.php">Register Now!</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="sign_in.php">Login</a>
                <?php endif; ?>
            </div>
    </header>
<body>
  
  <!-- Banner Section -->
  <section class="banner"><div class="banner">
    <div class="content">
      <a href="#math-mastery" class="cta-button">Math Mastery Toolkit</a>
      <a href="#science-exploration" class="cta-button">The Science Exploration Kit</a>
      <a href="#stem-power-pack" class="cta-button">The STEM Power Pack</a>
    </div>
  
  </div>
</section>


<p style="background-image: url('mathmastery.png');"></p>


  <!-- NEW-->

<section class="contentgeneral-box">
  <div id="math-mastery" class="content-box">
    <h1>Math Mastery Toolkit</h1>
    <p>The Math Mastery Toolkit makes learning math fun and easy with practice problems and helpful tips. It covers key math skills to help you get better day by day!</p>
  </div>

  <div class="math-card-container">
    <div class="card role">
      <div class="list-container">
        <h4>7-9 Years</h4>
        <h5>Subjects</h5>
        <ul>
          <li>Addition & Subtraction</li>
          <li>Multiplication & Division</li>
          <li>Measurements</li>
        </ul>
      </div>
      <h5>Fee</h5>
      <p>RM75 Per Month</p>
      <p2>*including education materials</p2>
      <a href="register.html"><button class="register-btn">Register Now</button></a>
    </div>
  


      <div class="card role">
        <div class="list-container">
          <h2>10-12 Years</h2>
          <h5>Subjects</h5>
          <ul>
            <li>Fractions</li>
            <li>Geometry</li>
            <li>Problem Solving</li>
          </ul>
        </div>
        <h5>Fee</h5>
        <p>RM95 Per Month</p>
        <p2>*including education materials</p2>
        <a href="register.html"><button class="register-btn">Register Now</button></a>
      </div>
    </div>
</section>

  <!-- NEW SCIENCE-->
  <section class="contentgeneral-box">
 <div id="science-exploration" class="content-box">
     <h1>The Science Exploration Kit</h1>
    <p>The Science Exploration Kit lets you discover exciting science topics with fun activities and experiments. Learn about the world around you in a hands-on way!</p>
  </div>
  
    <div class="math-card-container">
      <div class="card role">
        <div class="list-container">
          <h2>7-9 Years</h2>
          <h5>Subjects</h5>
          <ul>
            <li>Plants & Animals</li>
            <li>Weather & Climate</li>
            <li>Earth & Space</li>
          </div>
          <h5>Fee</h5>
          <p>RM75 Per Month</p>
          <p2>*including education materials</p2>
          <a href="register.html"><button class="register-btn">Register Now</button></a>
        </div>
  
        <div class="card role">
          <div class="list-container">
            <h2>10-12 Years</h2>
            <h5>Subjects</h5>
            <ul>
              <li>Materials & Properties</li>
              <li>Energy & Conservation</li>
              <li>Physical Science</li>
            </ul>
          </div>
          <h5>Fee</h5>
          <p>RM95 Per Month</p>
          <p2>*including education materials</p2>
          <a href="register.html"><button class="register-btn">Register Now</button></a>
        </div>
      </div>
  </section>


<!-- STEM Power Pack Section -->
<section class="contentgeneral-box">
<div id="stem-power-pack" class="content-box">
  <h1>The STEM Power Pack</h1>
  <p>The STEM Power Pack combines math and science for fun learning. It helps you solve problems and explore cool ideas in both subjects!</p>
</div>
<div class="science-card-container">
  <div class="card role">
    <div class="list-container">
      <h2>7-9 Years</h2>
      <h5>Subjects</h5>
      <ul>
        <li>Addition & Subtraction</li>
        <li>Multiplication & Division</li>
        <li>Measurements</li>
        <li>Plants & Animals</li>
        <li>Weather & Climate</li>
        <li>Earth & Space</li>
      </ul>
    </div>
    <h5>Fee</h5>
    <p>RM135 Per Month</p>
    <p2>*including education materials</p2>
    <a href="register.html"><button class="register-btn">Register Now</button></a>
  </div>

  <div class="card role">
    <div class="list-container">
      <h4>10-12 Years</h4>
      <h5>Subjects</h5>
      <ul>
        <li>Fractions</li>
        <li>Geometry</li>
        <li>Problem Solving</li>
        <li>Materials & Properties</li>
        <li>Energy & Conservation</li>
        <li>Physical Science</li>
      </ul>
    </div>
    <h5>Fee</h5>
    <p>RM175 Per Month</p>
    <p2>*including education materials</p2>
    <a href="register.html"><button class="register-btn">Register Now</button></a>
  </div>
</div>
   </section>




<!-- Footer -->
  <div class="footer">
    <p1>&copy; 2024 Thinkify. For assignment purpose only.</p1>
  </div>

  

</body>
</html>