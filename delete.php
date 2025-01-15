<?php
session_start();
include('database.php');

if (isset($_SESSION['gmail'])) {
    $gmail = $_SESSION['gmail']; 
    $sql = "SELECT * FROM parents WHERE gmail = '$gmail'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
        $sql_delete = "DELETE FROM parents WHERE gmail = '$gmail'";

        if (mysqli_query($connect, $sql_delete)) {
            echo "<script>alert('Your account has been deleted successfully.');</script>";
            session_destroy();
            echo "<script>window.location='index.php';</script>";
        } else {
            echo "<script>alert('Failed to delete your account.');</script>";
        }
    } else {
        echo "<script>alert('Account not found.');</script>";
    }
} else {
    echo "<script>alert('You are not logged in.');</script>";
    echo "<script>window.location='sign_in.php';</script>";
}
?>
