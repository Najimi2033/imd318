<?php
include('database.php');

if (isset($_POST['idcourse'])) {
    $idcourse = $_POST['idcourse'];
    $course = $_POST['course'];
    $student = $_POST['student'];
    $gmail = $_POST['gmail'];
    $age = $_POST['age'];
    $totalfee = $_POST['totalfee'];
    $payment = $_POST['payment'];

    $sql = "INSERT INTO subject (course, student, gmail, age, totalfee, payment) VALUES ('$course', '$student', '$gmail', '$age', '$totalfee', '0')";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo "<script>alert('Rekod berjaya di tambah')</script>";
        header("Location: payment_page.php?student=$student&totalfee=$totalfee");
        exit;
    } else {
        echo "<script>alert('Rekod tidak berjaya di tambah')</script>";
    }
    echo "<script>window.location='index.php'</script>";
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
    </div>
</header>
<body>
    <h1>Course Registration</h1>
    <form action="register_subject.php" id="Registration" method="POST">
        <table>
            <tr>
                <th>Course</th>
                <th>Student</th>
                <th>Guardian Email</th>
                <th>Age</th>
                <th>Total Fee</th>
            </tr>
            <tr>
                <td>
                    <label for="course">Choose a course</label>
                    <select id="course" name="course" onchange="updateFee()">
                        <option value="one_subject_math">Math</option>
                        <option value="one_subject_sains">Sains</option>
                        <option value="math_and_sains">Math and Sains</option>
                    </select>
                </td>
                <td>
                    <label for="student">Student Name</label>
                    <input type="text" id="student" name="student" required>
                </td>
                <td>
                    <label for="gmail">Guardian Email</label>
                    <select name="gmail" required>
                        <option value="" disabled selected>Select Guardian Email</option>
                        <?php
                        // Fetch guardian emails from the parents table
                        $sql = "SELECT * FROM parents";
                        $data = mysqli_query($connect, $sql);
                        while ($parents = mysqli_fetch_array($data)) {
                            echo "<option value='" . $parents['gmail'] . "'>" . $parents['gmail'] . "</option>";
                        }
                        ?>
                    </select>
                </td>
                <td>
                    <label for="age">Age</label>
                    <select id="age" name="age" onchange="updateFee()">
                        <option value="7-9">7-9</option>
                        <option value="10-12">10-12</option>
                    </select>
                </td>
                <td>
                    <span id="total_fee">0</span>
                </td>
            </tr>
        </table>
        <button type="submit">Register</button>
    </form>
    <script src="register_subject.js"></script>
</body>
<footer>
    &copy; 2024 Thinkify. For assignment purpose only.
</footer> 
</html>
