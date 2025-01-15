<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Science Program-Thinkify</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="science.css">
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

  <!-- Science Section -->
  <div class="science-section">
    <img src="images/science.jpg" alt="science Banner">
    <h1>A lifetime of benefits<br>Can be built in just thirty minutes each day</h1>
    <p>Your child's scientific knowledge and problem-solving skills will improve and grow with participation in the Thinkify Science Program,<br>
      giving them a competitive edge in school and beyond.</p>
    <p>The daily Thinkify science worksheets will take  <span class="highlight-text">30 minutes</span> to do in two sessions per week at Thinkify, followed by five more assignments to finish at home. Your youngster will progress at their own speed, learning each new idea before going on to the next.<br>
      Another five assignments to be completed at home. Your child will work at their own pace,<br>
      mastering each new concept before moving on.</p>
    <pWith each experiment, you'll find that your child is able to master important scientific concepts progressively.<br>
      Many Thinkify parents ultimately find their children mastering concepts<br>
      that put them grade levels ahead of their peers.</p>
<img src="images/science2.jpg" alt="science Banner">

<!-- Science Topics Section -->
<div class="science-section">
  <h2>Topics We Teach in Science</h2>
  <p>Explore the core topics designed to build a strong foundation in Science for primary school students.</p>

  <div class="topics-grid">
    <!-- Topic 1 -->
    <div class="topic-card topic-1">
      <h3>Plants & Animals</h3>
      <p>Learn about the life cycle, growth, and characteristics of plants and animals.</p>
    </div>
    <!-- Topic 2 -->
    <div class="topic-card topic-2">
      <h3>Physical Science</h3>
      <p>Explore the fundamental concepts of force, motion, and energy.</p>
    </div>
    <!-- Topic 3 -->
    <div class="topic-card topic-3">
      <h3>Weather & Climate</h3>
      <p>Understand weather patterns, climate, and the Earth's atmosphere.</p>
    </div>
    <!-- Topic 4 -->
    <div class="topic-card topic-4">
      <h3>Earth & Space</h3>
      <p>Discover the Earth, the solar system, and the universe beyond.</p>
    </div>
    <!-- Topic 5 -->
    <div class="topic-card topic-5">
      <h3>Materials & Properties</h3>
      <p>Explore the properties of different materials and their uses in everyday life.</p>
    </div>
    <!-- Topic 6 -->
    <div class="topic-card topic-6">
      <h3>Energy & Conservation</h3>
      <p>Learn about energy sources and the importance of conservation.</p>
    </div>
  </div>
</div>
  </div>

  <!-- Footer Section -->
  <div class="footer">
    <p>&copy; 2024 Thinkify. For assignment purpose only.</p>
  </div>

</body>
</html>
