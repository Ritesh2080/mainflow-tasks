<?php
session_start();
include('connect.php');
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/homepage.css" />
    <title>Homepage</title>
</head>
<body>
    <div class="bg-image"></div>
    <!-- Main Card -->
    <div class="welcome-container">
      <div class="card">
        <h1>Welcome,  <?php
            if(isset($_SESSION['email'])){
                $email = $_SESSION['email'];
                $query = mysqli_query($conn, "SELECT users.* from `users` where users.email='$email'");
            }
            while($row = mysqli_fetch_array($query)){
                echo $row['username'];
            }
            ?>!</h1>
        <p>We're glad to have you back.</p>
        <a href="logout.php"> 
            <button class="btn">
                <span>LogOut</span>
                <svg
                    width="20"
                    height="20"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M16 13v-2H7V8l-5 4 5 4v-3h9zM20 3h-8v2h8v14h-8v2h8c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"
                    />
                </svg>
            </button>
        </a>  
      </div>
    </div>
  </body>
</html>