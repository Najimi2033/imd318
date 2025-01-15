<?php
session_start();
include("database.php");

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: sign_in.php");
    exit();
}

if (isset($_POST["update"])) {
    $gmail = $_POST['gmail'];
    $username = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];

    // Use prepared statements for better security
    $sql = "UPDATE parents SET gmail = ?, username = ?, phonenumber = ?, password = ? WHERE gmail = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param('sssss', $gmail, $username, $phonenumber, $password, $gmail);

    if ($stmt->execute()) {
        echo "<script>alert('Berjaya kemaskini');</script>";
    } else {
        echo "<script>alert('Tidak berjaya kemaskini');</script>";
    }
    echo "<script>window.location='index.php';</script>";
    $stmt->close();
}

$parents = [];
if (isset($_POST["gmail"])) {
    $gmail = $_POST['gmail'];

    // Use prepared statements for fetching data
    $sql = "SELECT * FROM parents WHERE gmail = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param('s', $gmail);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $parents = $result->fetch_assoc();
    }
    $stmt->close();
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="update.css">
        <title>Update Page</title>
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
            <div class="bigbox">
            <form action="update.php" method="post">
            <h1>Update User</h1>
                <div class="box">
                    <div class="container">
                        <h3>Gmail:</h3>
                        <input type="email" name="gmail" placeholder="<?php echo isset($parents['gmail']) ? htmlspecialchars($parents['gmail']) : ''; ?>">
                    </div>
                    <div class="container">
                        <h3>Username:</h3>
                        <input type="text" name="username" placeholder="<?php echo isset($parents['username']) ? htmlspecialchars($parents['username']) : ''; ?>">
                    </div>
                    <div class="container">
                        <h3>Phone number:</h3>
                        <input type="text" name="phonenumber" placeholder="<?php echo isset($parents['phonenumber']) ? htmlspecialchars($parents['phonenumber']) : ''; ?>">
                    </div>
                    <div class="container">
                        <h3>Password:</h3>
                        <input type="password" id="password" name="password" placeholder="<?php echo isset($parents['password']) ? htmlspecialchars($parents['password']) : ''; ?>">
                    </div><br>
                </div> 
                <button type="submit" name="update">Update</button>
                <button type="button" onclick="window.location.href='logout.php'">Log out</button> 
            </div>
        </form>
    </body>
    <div class="footer">
        &copy; 2024 Thinkify. For assignment purpose only.
    </div>
</html>