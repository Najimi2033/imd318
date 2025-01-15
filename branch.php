<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="branch.css">
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
    <main>
        <section class="search-section">
            <h1>Discover Your Nearest Learning Hub!</h1>
            <p>Empowering education, one student at a time.</p>
            <div class="search-bar">
                <input type="text" placeholder="Enter your location">
                <button>Search</button>
            </div>
        </section>

        <div class="content">
            <!-- Sidebar with branch details -->
            <aside class="details">
            
                <h2>Our Branches</h2>
                <div class="tab">
                    <button class="branch" onmouseover="openCity(event, 'kedah')">
                        <h3>Kedah</h3>
                        <p>Alor Setar, 05000 Kedah</p>
                        <p>Email: kedah@thinkify.com</p>
                        <p>Phone: 04-1234567</p>
                    </button>
                    <button class="branch" onmouseover="openCity(event, 'melaka')">
                        <h3>Melaka</h3>
                        <p>Melaka Tengah, 75000 Melaka</p>
                        <p>Email: melaka@thinkify.com</p>
                        <p>Phone: 06-2345678</p>
                    </button>
                    <button class="branch" onmouseover="openCity(event, 'perak')">
                        <h3>Perak</h3>
                        <p>Ipoh, 30000 Perak</p>
                        <p>Email: perak@thinkify.com</p>
                        <p>Phone: 05-3456789</p>
                    </button>
                    <button class="branch" onmouseover="openCity(event, 'kuala lumpur')">
                        <h3>Kuala Lumpur</h3>
                        <p>Setiawangsa, 54200 KL</p>
                        <p>Email: kl@thinkify.com</p>
                        <p>Phone: 03-4567890</p>
                    </button>
                    <button class="branch" onmouseover="openCity(event, 'johor')">
                        <h3>Johor</h3>
                        <p>Johor Bahru, 80000 Johor</p>
                        <p>Email: johor@thinkify.com</p>
                        <p>Phone: 07-5678901</p>
                    </button>
                </div>
            
            </aside>

            <!-- Map Section -->
            <div class="map">
                <div class="tabcontent" id="kedah">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127093.38787091763!2d100.32982035140918!3d6.121928121706993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31b6b7008bf84a3f%3A0x51e9df7cd4b564c8!2sAlor%20Setar%2C%20Kedah!5e0!3m2!1sen!2smy!4v1700000000000" 
                        width="100%" 
                        height="400" 
                        style="border:0; border-radius: 10px;" 
                        allowfullscreen="" 
                        loading="lazy"
                        title="Kedah Map">
                    </iframe>
                </div>
                <div class="tabcontent" id="melaka">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.736037865236!2d102.24550731492782!3d2.1896515072648687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdcf5b2aefb7af%3A0x40f311bfe7c20cbd!2sMelaka%20Tengah%2C%20Malacca!5e0!3m2!1sen!2smy!4v1700000000001" 
                    width="100%" 
                    height="400" 
                    style="border:0; border-radius: 10px;" 
                    allowfullscreen="" 
                    loading="lazy"
                    title="Melaka Map">
                </iframe>
                </div>
                <div class="tabcontent" id="perak">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31873.281048033373!2d101.06417331894755!3d4.597474212531585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31caec35d26f1fd9%3A0xb4f1cb810d2d2576!2sIpoh%2C%20Perak!5e0!3m2!1sen!2smy!4v1700000000002" 
                    width="100%" 
                    height="400" 
                    style="border:0; border-radius: 10px;" 
                    allowfullscreen="" 
                    loading="lazy"
                    title="Perak Map">
                </iframe>
                </div>
                <div class="tabcontent" id="kuala lumpur">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31873.281048033373!2d101.73534676242478!3d3.2077693530124133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d4c51be765%3A0x8c0c8ed9b9aa83f6!2sSetiawangsa%2C%20Kuala%20Lumpur!5e0!3m2!1sen!2smy!4v1700000000003" 
                    width="100%" 
                    height="400" 
                    style="border:0; border-radius: 10px;" 
                    allowfullscreen="" 
                    loading="lazy"
                    title="Kuala Lumpur Map">
                </iframe>
                </div>
                <div class="tabcontent" id="johor">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254978.22437524986!2d103.63784428728166!3d1.4880526477118305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da13bc3ec85e63%3A0x2126713d2df6d1b5!2sJohor%20Bahru%2C%20Johor!5e0!3m2!1sen!2smy!4v1700000000004" 
                    width="100%" 
                    height="400" 
                    style="border:0; border-radius: 10px;" 
                    allowfullscreen="" 
                    loading="lazy"
                    title="Johor Map">
                </iframe>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </main>

  <!-- Footer Section -->
  <div class="footer">
    <p>&copy; 2024 Thinkify. For assignment purpose only.</p>
  </div>
  <script src="branch.js"></script>
</body>
</html>