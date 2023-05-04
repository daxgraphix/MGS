<?php

// Include database credentials
$host = "localhost";
$user = "root";
$password = "";
$db = "MGS";

// Create a new database connection
$data = mysqli_connect($host, $user, $password, $db);

// Check if the connection was successful
if (!$data) {
    die("Connection error: " . mysqli_connect_error());
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the username and password from the POST request
    $name = $_POST['username'];
    $pass = $_POST['password'];

    // Prepare the SQL query to retrieve the user with the given username and password
    $sql = "select * from user where username= '" . $name . "' AND password='" . $pass . "' ";
    $result = mysqli_query($data, $sql);

    // Check if a user with the given username and password was found
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        if ($row["usertype"] == "hamlet") {
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['usertype'] = $row['usertype'];
            header("location: users/comment_user.php");
            exit;
        } else if ($row["usertype"] == "admin") {
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            header("location: admin/comment_user.php");
            exit;
        } else if ($row["usertype"] == "village") {
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['usertype'] = $row['usertype'];
            header("location: village/comment_user.php");
            exit;
        } else if ($row["usertype"] == "ward") {
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['usertype'] = $row['usertype'];
            header("location: ward/comment_user.php");
            exit;
        } else if ($row["usertype"] == "division") {
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['usertype'] = $row['usertype'];
            header("location: division/comment_user.php");
            exit;
        } else {
            // If no user was found, display an error message
            echo "Username or password do not match";
        }
    } else {
        // If no row was returned from the database, display an error message
        echo "Username or password do not match";
    }
}

// Close the database connection
mysqli_close($data);