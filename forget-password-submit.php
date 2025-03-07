<?php
include('confige.php');

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        // Query to check if the email exists in the users table
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = $con->query($query);

        if ($result->num_rows > 0) {
            // Generate a random reset token
            $reset_token = bin2hex(random_bytes(16));

            // Update the users table with the reset token
            $update_query = "UPDATE users SET reset_token = '$reset_token' WHERE email = '$email'";
            if ($con->query($update_query)) {
                
                // Generate reset link
                 $reset_link = "https://zettagame.com/reset-password/" . urlencode($reset_token);
                // $reset_link = "https://zettagame.com/reset-password.php?token=" . $reset_token;
                
                // Email content
                $subject = "Password Reset Request";
                $message = "To reset your password, please click on the following link:\n" . $reset_link;
                $headers = 'From: game@yourwebsite.com' . "\r\n" . 
                           'Reply-To: game@yourwebsite.com' . "\r\n" . 
                           'X-Mailer: PHP/' . phpversion();
                
                // Send the email
                if (mail($email, $subject, $message, $headers)) {
                    echo "<script>
                            alert('A password reset link has been sent to your email');
                            window.location.href = 'https://zettagame.com/forget-password';
                          </script>";
                } else {
                    echo "<script>
                            alert('Failed to send the email. Please try again');
                            window.location.href = 'https://zettagame.com/forget-password';
                          </script>";
                }
            } else {
                echo "<script>
                        alert('Failed to update reset token. Please try again');
                        window.location.href = 'https://zettagame.com/forget-password';
                      </script>";
            }
        } else {
            echo "<script>
                    alert('Email address not found');
                    window.location.href = 'https://zettagame.com/forget-password';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Invalid email address');
                window.location.href = 'https://zettagame.com/forget-password';
              </script>";
    }
} else {
    echo "<script>
            alert('Email is required');
            window.location.href = 'https://zettagame.com/forget-password';
          </script>";
}
?>
