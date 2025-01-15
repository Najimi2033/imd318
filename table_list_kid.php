<?php
include('database.php');

if (isset($_POST['student'])) {
    $student = $_POST['student'];
    $sql = "SELECT * FROM kids WHERE student = '$student'";
    $result = mysqli_query($connect, $sql);

    if (!$data) {
        die("Query failed: " . mysqli_error($connect));
    } else {
        $data = []; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="table-register-kid.css">
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
    <h1>Student Registration</h1>
    <form action="table_register_kid.php" method="post">
        <table>
            <tr>
                <th>Student Name</th>
                <th>Age</th>
                <th>IC</th>
                <th>Gmail</th>
            </tr>
            <?php
            if (isset($data) && mysqli_num_rows($data) > 0) {
                while ($result = mysqli_fetch_array($data)) {
            ?>
                    <tr> 
                        <td><?php echo $result['student']; ?></td>
                        <td><?php echo $result['age']; ?></td>
                        <td><?php echo $result['ic']; ?></td>
                        <td><?php echo $result['gmail']; ?></td>
                        <td>
                            <a href="update_kid.php?gmail=<?php echo $result['gmail']; ?>">
                                <button>Update</button>
                            </a>
                            <a href="deletekid.php?gmail=<?php echo $result['gmail']; ?>">
                                <button>Delete</button>
                            </a>
                            <a href="table_register_kid.php">
                                <button>Register Your Kids Here!</button>
                            </a>
                        </td>
                    </tr>
            <?php 
                }
            } else {
                echo "<tr><td colspan='4'>No subjects found</td></tr>";
            }
            ?>
        </table>
</body>
<footer>
    &copy; 2024 Thinkify. For assignment purpose only.
</footer>
</html>
