<?php
include("database.php");
session_start(); // Start the session

if (isset($_POST["gmail"])) {
    $gmail = $_POST['gmail'];
    $username = $_POST["username"]; // Unused here but can be part of future logic
    $phonenumber = $_POST["phonenumber"]; // Unused here
    $password = $_POST["password"];

    $sql = "SELECT * FROM parents WHERE gmail = '$gmail' AND password = '$password'";
    $result = mysqli_query($connect, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $pengguna = mysqli_fetch_array($result);

        $_SESSION['logged_in'] = true;

        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Kesalahan pada username atau password')</script>";
    }
}
?>
<html>
<link rel="stylesheet" href="sign_in.css">
<link rel="stylesheet" href="footer.css">
    <head>
        <title>Sign in Page</title>
    </head>
    <body>
        <form action="sign_in.php" method="post">
            <div class="box">
            <h1>Sign in</h1>
            <div class="rest">
                <div class="container">
                    <input type="text" id="gmail" name="gmail" placeholder="Gmail" class="custom-input"><br>
                </div>
                <div class="container">
                    <input type="password" id="password" name="password" placeholder="Password" class="custom-input"><br>
                </div>
            </div>
            <button type="submit">Login</button><br><br>
            <p>Don't have an account? <a href="signup.php">Sign up</a></p>
            </div>
        </form>
    </body>
    <footer>
        &copy; 2024 Thinkify. For assignment purpose only.
    </footer>
</html>