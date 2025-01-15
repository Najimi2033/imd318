<?php
session_start();
include("database.php");

if (isset($_POST["update"])) {
    $idcourse = $_POST['idcourse']; // Retrieve idcourse from the hidden field
    $course = $_POST['course'];
    $student = $_POST['student'];
    $gmail = $_POST['gmail'];
    $age = $_POST['age'];
    $totalfee = $_POST['totalfee'];
    $payment = $_POST['payment'];

    if (!empty($idcourse)) {
        $sql = "UPDATE subject SET course = ?, student = ?, gmail = ?, age = ?, totalfee = ?, payment = '0' WHERE idcourse = ?";
        $stmt = $connect->prepare($sql);
        $stmt->bind_param('ssssds', $course, $student, $gmail, $age, $totalfee, $idcourse);

        if ($stmt->execute()) {
            echo "<script>alert('Berjaya kemaskini');</script>";
        } else {
            echo "<script>alert('Tidak berjaya kemaskini');</script>";
        }
        $stmt->close();
    } else {
        echo "<script>alert('ID Course is missing!');</script>";
    }
}

$idcourse = '';
$course = '';
$student = '';
$gmail = '';
$age = '';
$totalfee = '';

if (isset($_GET['idcourse'])) {
    $idcourse = $_GET['idcourse'];
    $sql = "SELECT * FROM subject WHERE idcourse = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param('s', $idcourse);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $record = $result->fetch_assoc();
        $course = $record['course'];
        $student = $record['student'];
        $gmail = $record['gmail'];
        $age = $record['age'];
        $totalfee = $record['totalfee'];
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
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
    </div>
</header>
<body>
    <div class="bigbox">
        <form action="update_subject.php" method="post">
            <h1>Update User</h1>
            <div class="box">
                <div class="container">
                    <label for="course">Choose a course</label>
                    <select id="course" name="course">
                        <option value="one_subject_math" <?php echo $course == 'one_subject_math' ? 'selected' : ''; ?>>Math</option>
                        <option value="one_subject_sains" <?php echo $course == 'one_subject_sains' ? 'selected' : ''; ?>>Sains</option>
                        <option value="math_and_sains" <?php echo $course == 'math_and_sains' ? 'selected' : ''; ?>>Math and Sains</option>
                    </select>
                </div>
                <div class="container">
                    <h3>Course ID:</h3>
                    <input type="text" name="idcourse_display" value="<?php echo htmlspecialchars($idcourse); ?>" readonly>
                    <input type="hidden" name="idcourse" value="<?php echo htmlspecialchars($idcourse); ?>">
                </div>
                <div class="container">
                    <h3>Student name:</h3>
                    <input type="text" name="student" value="<?php echo htmlspecialchars($student); ?>" required>
                </div>
                <div class="container">
                    <h3>Gmail:</h3>
                    <select name="gmail" id="gmail" required>
                        <option value="" disabled selected>Select Guardian Email</option>
                        <?php
                        $sql = "SELECT gmail FROM parents";
                        $data = mysqli_query($connect, $sql);
                        while ($parent = mysqli_fetch_array($data)) {
                            echo "<option value='" . $parent['gmail'] . "' " . ($gmail == $parent['gmail'] ? 'selected' : '') . ">" . $parent['gmail'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="container">
                    <label for="age">Age</label>
                    <select id="age" name="age">
                        <option value="7-9" <?php echo $age == '7-9' ? 'selected' : ''; ?>>7-9</option>
                        <option value="10-12" <?php echo $age == '10-12' ? 'selected' : ''; ?>>10-12</option>
                    </select>
                </div>
                <div class="container">
                    <label for="totalfee">Total Fee</label>
                    <input type="text" name="totalfee" value="<?php echo htmlspecialchars($totalfee); ?>" required>
                </div>
            </div>
            <button type="submit" name="update">Update</button>
            <button type="button" onclick="window.location.href='logout.php'">Log out</button>
        </form>
    </div>
</body>
<div class="footer">
    &copy; 2024 Thinkify. For assignment purpose only.
</div>
</html>
