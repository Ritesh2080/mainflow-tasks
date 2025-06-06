<?php
include 'connect.php';

if (isset($_POST['SignUp'])) {
    $username = $_POST['username'];
    $email = $_POST['signup-email'];
    $password = $_POST['signup-password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $checkStmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $checkResult = $checkStmt->get_result();

    if ($checkResult->num_rows > 0) {
        echo "<script>alert('Email address already exists!'); window.location.href = 'index.php';</script>";
    } else {
        $insertStmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $insertStmt->bind_param("sss", $username, $email, $hashedPassword);

        if ($insertStmt->execute()) {
            session_start();
            $_SESSION['email'] = $email;
            header("Location: homepage.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST['login'])) {
    $email = $_POST['signin-email'];
    $password = $_POST['signin-password'];

  
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['email'] = $row['email'];
            header("Location: homepage.php");
            exit();
        } else {
            echo "<script>alert('Incorrect password'); window.location.href = 'index.php';</script>";
        }
    } else {
        echo "<script>alert('Email not found'); window.location.href = 'index.php';</script>";
    }
}
?>
