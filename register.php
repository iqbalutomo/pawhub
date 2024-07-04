<?php
include './src/databases/db.php';

if (isset($_POST['register'])) {
    $name = $_POST['name-register'];
    $email = $_POST['email-register'];
    $password = $_POST['password-register'];
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT); // encrypt password

    // check email on database
    $checkEmail = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($checkEmail);

    // prevent of sql injection
    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // direct page with error params
            header("Location: ./index.html?error=email_exists");
            exit();
        } else {
            $insertQuery = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($insertQuery);
            if ($stmt) {
                $stmt->bind_param("sss", $name, $email, $hashedPassword);

                if ($stmt->execute()) {
                    // direct page with success params
                    header("Location: ./index.html?success=registration");
                } else {
                    echo "Error: " . $conn->error;
                }
            } else {
                echo "Error preparing statement: " . $conn->error;
            }
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}
$conn->close();
?>