<?php
include('confige.php');

session_start(); 

$user_id = $_POST['user_id'];
$currentPassword = $_POST['profile-Password']; // Old password
$newPassword = $_POST['profile-newPassword']; // New password
$confirmPassword = $_POST['profile-confirmPassword']; // Confirm password

// Validate password confirmation
if ($newPassword === $confirmPassword) {
    $user_id = mysqli_real_escape_string($con, $user_id);
    $query = "SELECT password FROM users WHERE id='$user_id'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verify current password
        if (password_verify($currentPassword, $user['password'])) {
            
            // If password needs to be updated
            if (!empty($newPassword)) {
                $newPasswordHash = password_hash($newPassword, PASSWORD_BCRYPT);
                $updateQuery = "UPDATE users SET password='$newPasswordHash' WHERE id='$user_id'";
            }

        } else {
            echo "<script>
                    alert('Current password is incorrect');
                     window.location.href = 'https://zettagame.com/user-profile';
                  </script>";
        }
    } else {
        echo "<script>
                alert('User not found');
                 window.location.href = 'https://zettagame.com/user-profile';
              </script>";
    }
} else {
    echo "<script>
            alert('Passwords do not match!');
             window.location.href = 'https://zettagame.com/user-profile';
          </script>";
}
?>
