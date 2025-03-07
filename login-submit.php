<?php
session_start();
include('confige.php');

$email = mysqli_real_escape_string($con, trim($_POST['email']));
$password = trim($_POST['password']);

if (empty($email) || empty($password)) {
    echo "<script>
        alert('Please enter both email and password.');
        window.location.href = 'https://zettagame.com/login';
    </script>";
    exit;
}

$query = "SELECT * FROM users WHERE email = '$email'";
$res = mysqli_query($con, $query);
$user = mysqli_fetch_assoc($res);

if ($user) {
    // Verify password
    if (password_verify($password, $user['password'])) {
        // Start session and save user info
        
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_mobile'] = $user['mobile'];
        
        
        echo "<script>
        alert('Login successful! " . $_SESSION['user_email'] . "');
        window.location.href = 'https://zettagame.com/';
      </script>";

    } else {
        echo "<script>
            alert('Incorrect password.');
            window.location.href = 'https://zettagame.com/login';
        </script>";
    }
} else {
    echo "<script>
        alert('User not found.');
        window.location.href = 'https://zettagame.com/login';
    </script>";
}

mysqli_close($con);
?>
