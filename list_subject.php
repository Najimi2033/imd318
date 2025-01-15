<?php
include('database.php');

if (isset($_POST['idcourse'])) {
    $idcourse = $_POST['idcourse'];
    $sql = "SELECT * FROM subject WHERE idcourse = '$idcourse'";
    $data = mysqli_query($connect, $sql);

    if (!$data) {
        die("Query failed: " . mysqli_error($connect));
    }
} else {
    $data = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register_subject.css">
    <title>Course Registration</title>
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
    <h1>Subject Registration</h1>
    <table>
        <caption>SENARAI SUBJECT</caption>
        <tr>
            <th>IdCourse</th>
            <th>Course</th>
            <th>Student Name</th>
            <th>Gmail</th>
            <th>Age</th>
            <th>Total Fee</th>
        </tr>
        <?php
        if (isset($data) && mysqli_num_rows($data) > 0) {
            while ($result = mysqli_fetch_array($data)) {
        ?>
                <tr> 
                    <td><?php echo $result['idcourse']; ?></td>
                    <td><?php echo $result['course']; ?></td>
                    <td><?php echo $result['student']; ?></td>
                    <td><?php echo $result['gmail']; ?></td>
                    <td><?php echo $result['age']; ?></td>
                    <td><?php echo $result['totalfee']; ?></td>
                    <td>
                        <a href="update_subject.php?idcourse=<?php echo $result['idcourse']; ?>">
                            <button>Update</button>
                        </a>
                        <a href="delete_subject.php?idcourse=<?php echo $result['idcourse']; ?>">
                            <button>Delete</button>

                        <a href="register_subject.php">
                            <button>Register Subject here!</button>
                        </a>
                        </a>
                    </td>
                </tr>
        <?php 
            }
        } else {
            echo "<tr><td colspan='6'>No subjects found</td></tr>";
        }
        ?>
    </table>
</body>
<footer>
    &copy; 2024 Thinkify. For assignment purpose only.
</footer>
</html>
