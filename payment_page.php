<?php
include('database.php');

// Get student_id from the URL or session (for example, using 'student_id' as identifier)
$student_id = isset($_GET['student_id']) ? $_GET['student_id'] : null;

if ($student_id) {
    // Query to fetch the student name and total fee from the database
    $query = "SELECT student_name, total_fee FROM students WHERE student_id = '$student_id'";
    $result = mysqli_query($connect, $query);

    // Check if the student exists in the database
    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch student data
        $student_data = mysqli_fetch_assoc($result);
        $student = $student_data['student_name'];
        $totalfee = $student_data['total_fee'];
    } else {
        $student = 'Unknown';
        $totalfee = '0';
    }
} else {
    $student = 'Unknown';
    $totalfee = '0';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="payment_page.css">
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
    <div class="payment-container">
        <div class="payment-header">
            <h1>Payment Information</h1>
        </div>
        
        <div class="payment-details">
            <p><strong>Student:</strong> <?php echo htmlspecialchars($student); ?></p>
            <p><strong>Total Fee:</strong> RM <?php echo htmlspecialchars($totalfee); ?></p>
        </div>

        <!-- Payment Form -->
        <form action="process_payment.php" method="POST" class="payment-form">
            <label for="card_number">Card Number:</label>
            <input type="text" id="card_number" name="card_number" required placeholder="Enter your card number" class="input-field">

            <label for="expiry_date">Expiry Date:</label>
            <input type="text" id="expiry_date" name="expiry_date" required placeholder="MM/YY" class="input-field">

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required placeholder="Enter CVV" class="input-field">

            <button type="submit" class="submit-button">Submit Payment</button>
        </form>
    </div>

    <div class="footer">
        &copy; 2024 Thinkify. For assignment purposes only.
    </div>
</body>
</html>
