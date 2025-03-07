<?php
include('confige.php');

session_start(); 

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$user_id = $_POST['user_id'];


    $name = mysqli_real_escape_string($con, $name);
    $email = mysqli_real_escape_string($con, $email);
    $mobile = mysqli_real_escape_string($con, $mobile);
    $user_id = mysqli_real_escape_string($con, $user_id);

    $query = "SELECT password FROM users WHERE id='$user_id'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

            // Update the user profile
            $updateQuery = "UPDATE users SET name='$name', email='$email', mobile='$mobile' WHERE id='$user_id'";

            // Execute query
            if (mysqli_query($con, $updateQuery)) {
                // Update session data
                $_SESSION['user_name'] = $name; // Update name
                $_SESSION['user_email'] = $email; // Update email
                $_SESSION['user_mobile'] = $mobile; // Update mobile

                echo "<script>
                        alert('Profile updated successfully for " . $_SESSION['user_email'] . "');
                        window.location.href = 'https://zettagame.com/user-profile';
                      </script>";
            } else {
                echo "<script>
                        alert('Error updating profile');
                        window.location.href = 'https://zettagame.com/user-profile';
                      </script>";
            }
        
    } else {
        echo "<script>
                alert('User not found');
                window.location.href = 'https://zettagame.com/user-profile';
              </script>";
    }

?>
