<?php
include './src/databases/db.php';

session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email-login'];
    $password = $_POST['password-login'];

    // check email on database
    $checkEmail = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($checkEmail);

    // prevent of sql injection
    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            // verification password
            if (password_verify($password, $user['password'])) {
                // add session
                $_SESSION['user'] = array(
                    'user_id' => $user['user_id'],
                    'name' => $user['name'],
                    'email' => $user['email']
                );
                
                // direct on page with success params
                header("Location: ./index.php?success=login");
                exit();
            } else {
                // direct on page with error params
                header("Location: ./index.php?error=invalid_login");
                exit();
            }
        } else {
            header("Location: ./index.php?error=invalid_login");
            exit();
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}
$conn->close();
?>
