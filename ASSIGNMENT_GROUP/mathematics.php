<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mathematics Program-Thinkify</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="mathematics.css">
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

  <div class="math-section">
    <img src="images/math.jpg" alt="Mathematics Banner">
    <h1>Just 30 Mins A Day<br>Can Build A Lifetime of Advantages</h1>
    <p>Enrolling in the Thinkify Math Program will help build and advance your child's math skills,<br>
      for an advantage in school and beyond.</p>
    <p>The daily Thinkify maths worksheets will take  <span class="highlight-text">30 minutes</span> to do in two sessions per week at Thinkify, followed by five more assignments to finish at home. Your youngster will progress at their own speed, learning each new idea before going on to the next.<br>
      Another five assignments to be completed at home. Your child will work at their own pace,<br>
      mastering each new concept before moving on.</p>
    <p>With each worksheet, you'll find that your child is able to master important math skills progressively.<br>
      Many Thinkify parents ultimately find their children mastering concepts<br>
      that put them grade levels ahead of their peers.</p>
<img src="images/math2.jpg" alt="Mathematics Banner">

 <!-- Mathematics Topics Section -->
 <div class="math-section">
  <h2 class="section-title">Topics We Teach in Mathematics</h2>
  <p class="section-description">Explore the core topics designed to build a strong foundation in Mathematics for primary school students.</p>

  <div class="topics-grid">
      <!-- Topic 1 -->
      <div class="topic-card topic-addition">
          <h3>Addition & Subtraction</h3>
          <p>Master the basics of adding and subtracting numbers with confidence.</p>
      </div>
      <!-- Topic 2 -->
      <div class="topic-card topic-multiplication">
          <h3>Multiplication & Division</h3>
          <p>Learn how to multiply and divide efficiently to solve everyday problems.</p>
      </div>
      <!-- Topic 3 -->
      <div class="topic-card topic-fractions">
          <h3>Fractions</h3>
          <p>Understand fractions, decimals, and their real-world applications.</p>
      </div>
      <!-- Topic 4 -->
      <div class="topic-card topic-geometry">
          <h3>Geometry</h3>
          <p>Explore shapes, sizes, and the properties of space.</p>
      </div>
      <!-- Topic 5 -->
      <div class="topic-card topic-measurements">
          <h3>Measurements</h3>
          <p>Learn to measure length, weight, time, and more.</p>
      </div>
      <!-- Topic 6 -->
      <div class="topic-card topic-problem-solving">
          <h3>Problem Solving</h3>
          <p>Develop critical thinking skills to tackle challenging problems.</p>
      </div>
  </div>
</div>
  </div>

  <div class="footer">
    <p>&copy; 2024 Thinkify. For assignment purpose only.</p>
  </div>

</body>
</html>
