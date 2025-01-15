<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="style.css">
<head>
  <title>Thinkify</title>
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
                    <a href="table_list_kid.php">Register Subject here!</a>
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

  <div class="slideshow-container">
    <div class="slideshow-wrapper">
      <img class="slides" src="images/slide1.png" alt="Image 1">
      <img class="slides" src="images/slide2.jpg" alt="Image 2">
      <img class="slides" src="images/slide3.png" alt="Image 3">
    </div>

    <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
    <button class="next" onclick="plusSlides(1)">&#10095;</button>
  </div>

  <div class="footer">
    <p>&copy; 2024 Thinkify. For assignment purpose only.</p>
  </div>
  <script src="script.js"></script>
</body>
</html>
