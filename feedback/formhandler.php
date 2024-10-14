<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit_feedback'])) {
        // Insert feedback
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['update_feedback'])) {
        // Update feedback
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "UPDATE feedback SET name='$name', email='$email', message='$message' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['delete_feedback'])) {
        // Delete feedback
        $id = $_POST['id'];

        $sql = "DELETE FROM feedback WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
}
?>
