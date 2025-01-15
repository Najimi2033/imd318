<?php
include('database.php');
if (isset($_POST['student'])) {
    $student = $_POST['student'];
    $age = $_POST['age'];
    $ic = $_POST['ic'];
    $gmail = $_POST['gmail'];
    $sql = "INSERT INTO kids (student, age, ic, gmail) VALUES ('$student', '$age', '$ic', '$gmail')";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo "<script>alert('Rekod berjaya di tambah')</script>";
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
            <tr>
                <td>
                    <label for="student">Full Name</label>
                    <input type="text" id="student" name="student" required placeholder="Enter student name">
                </td>
                <td>
                    <label for="age">Age</label>
                    <select id="age" name="age" required>
                        <option value="" disabled selected>Select Age</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </td>
                <td>
                    <label for="ic">IC Number</label>
                    <input type="text" id="ic" name="ic" required placeholder="Enter IC number">
                </td>
                <td>
                    <label for="gmail">Guardian Email</label>
                    <select name="gmail" id="gmail" required>
                        <option value="" disabled selected>Select Guardian Email</option>
                        <?php
                        $sql = "SELECT gmail FROM parents";
                        $data = mysqli_query($connect, $sql);
                        while ($parents = mysqli_fetch_array($data)) {
                            echo "<option value='" . $parents['gmail'] . "'>" . $parents['gmail'] . "</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit">Register</button>
    </form>
</body>
<footer>
    &copy; 2024 Thinkify. For assignment purpose only.
</footer>
</html>