<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Thinkify</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="contact.css">
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
  <!-- Contact Us Section -->
  <div class="contact-section"> 
    <h1>Contact Us</h1>
    <p>Get in touch with us through these platforms!</p>

    <div class="contact-container">
      <!-- Contact -->
      <div class="contact-box">
        <h3>&#128383;Contact</h3>
        <p>Reach out to us anytime via call.</p>
        <p><a href="tel:+601169476205">+6011-6947-6205</a></p>
      </div>

      <!-- Email -->
      <div class="contact-box">
        <h3>&#x1F4E7;Email</h3>
        <p>Drop an email for any inquiries.</p>
        <p><a href="mailto:thinkifyhq@yahoo.com">thinkifyhq@gmail.com</a></p>
      </div>

      <!-- Instagram -->
      <div class="contact-box">
        <h3>&#x1F4F1;Instagram</h3>
        <p>Follow us on Instagram to stay updated.</p>
        <p><a href="https://instagram.com/" target="_blank">@thinki.fy</a></p>
      </div>

      <!-- Location -->
      <div class="contact-box">
      <h3>&#128383; Location</h3>
      <p>Reach out to us anytime via call or visit us at our location.</p>
      <p><a href="https://www.google.com/maps?q=YOUR_LOCATION" target="_blank">View on Google Maps</a></p>
      </div>
    </div>

    <!-- Forms Section -->
    <div class="form-section">
      <div class="form-container">
        <h2>Drop Us A Line</h2>
        <form>
          <input type="text" name="email" placeholder="Email" required>
          <input type="text" name="phone" placeholder="Phone" required>
          <input type="text" name="name" placeholder="Name" required>
          <textarea name="message" rows="5" placeholder="Message" required></textarea>
          <button type="submit">Submit</button>
        </form>
      </div>
      
    </div>
  </div>

  <!-- Footer Section -->
  <div class="footer">
    <p>&copy; 2024 Thinkify. For assignment purpose only.</p>
  </div>

</body>
</html>