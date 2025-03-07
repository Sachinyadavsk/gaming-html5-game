<?php
include('confige.php');

// Fetch and sanitize form inputs
$name = mysqli_real_escape_string($con, trim($_POST['name']));
$email = mysqli_real_escape_string($con, trim($_POST['email']));
$mobile = mysqli_real_escape_string($con, trim($_POST['mobile']));
$password = trim($_POST['password']);
$confirmPassword = trim($_POST['passwordCon']);

$device = mysqli_real_escape_string($con, trim($_SERVER['HTTP_USER_AGENT']));
$ip = mysqli_real_escape_string($con, $_SERVER['REMOTE_ADDR']);

// Validate inputs
if (empty($name) || empty($email) || empty($mobile) || empty($password) || empty($confirmPassword)) {
    echo "<script>
        alert('All fields are required!');
        window.location.href = 'https://zettagame.com/register-submit';
    </script>";
    exit;
}

if ($password !== $confirmPassword) {
    echo "<script>
        alert('Passwords do not match!');
        window.location.href = 'https://zettagame.com/register-submit';
    </script>";
    exit;
}

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

// Insert data into the database
$query = "INSERT INTO users (name, email, mobile, password, ip, device) VALUES ('$name', '$email', '$mobile', '$hashedPassword', '$ip', '$device')";
$res = mysqli_query($con, $query);

if ($res) {
    echo "<script>
        alert('Account created successfully!');
        window.location.href = 'https://zettagame.com/login';
    </script>";
} else {
    echo "<script>
        alert('Error creating account: " . mysqli_error($con) . "');
        window.location.href = 'https://zettagame.com/register-submit';
    </script>";
}
?>
