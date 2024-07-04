<?php
include './src/databases/db.php';

if (isset($_POST['contact-form'])) {
    $name = $_POST['name-contact-form'];
    $email = $_POST['email-contact-form'];
    $messages = $_POST['messages-contact-form'];

    // check email on database
    $insertQuery = "INSERT INTO contact_form (name, email, messages) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);

    if ($stmt) {
        $stmt->bind_param("sss", $name, $email, $messages);

        if ($stmt->execute()) {
            // redirect page to contact us with success params
            header("Location: ./contact-us.html?success=contact-form");
            exit();
        } else {
            // error params
            header("Location: ./contact-us.html?error=contact-form");
            exit();
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}

$conn->close();
?>