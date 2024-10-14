<?php
include 'config.php';

// Initialize messages
$successMessage = "";
$errorMessage = "";

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit_feedback'])) {
        // Insert feedback
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $rating = $_POST['rating'];
        $opinion = $_POST['opinion'];
        
        $sql = "INSERT INTO feedback (name, email, message, rating, opinion) VALUES ('$name', '$email', '$message', '$rating', '$opinion')";
        if ($conn->query($sql) === TRUE) {
            $successMessage = "👍 New record created successfully";
        } else {
            $errorMessage = "❌ Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['update_feedback'])) {
        // Update feedback
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $rating = $_POST['rating'];
        $opinion = $_POST['opinion'];

        $sql = "UPDATE feedback SET name='$name', email='$email', message='$message', rating='$rating', opinion='$opinion' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            $successMessage = "👍 Record updated successfully";
        } else {
            $errorMessage = "❌ Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['delete_feedback'])) {
        // Delete feedback
        $id = $_POST['id'];

        $sql = "DELETE FROM feedback WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            $successMessage = "✅ Record deleted successfully";
        } else {
            $errorMessage = "❌ Error: " . $sql . "<br>" . $conn->error;
        }
    }
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Retrieve feedback records
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Page</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        function fillForm(id, name, email, message, rating, opinion) {
            document.getElementById('id').value = id;
            document.getElementById('name').value = name;
            document.getElementById('email').value = email;
            document.getElementById('message').value = message;
            document.getElementById('rating').value = rating;
            document.getElementById('ratingValue').textContent = rating;
            document.getElementById('opinion').value = opinion;
            document.getElementById('submit_button').style.display = 'none';
            document.getElementById('update_button').style.display = 'inline';
        }

        function clearForm() {
            document.getElementById('id').value = '';
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('message').value = '';
            document.getElementById('rating').value = '0';
            document.getElementById('ratingValue').textContent = '0';
            document.getElementById('opinion').value = '';
            document.getElementById('submit_button').style.display = 'inline';
            document.getElementById('update_button').style.display = 'none';
        }
    </script>
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="http://localhost/LotusLagoon/home/home.php">Home</a></li>
                <li><a href="http://localhost/LotusLagoon/food/index.php">Food</a></li>
                <li><a href="http://localhost/LotusLagoon/room/slide.php">Rooms</a></li>
                <li><a href="http://localhost/LotusLagoon/wedding/wedding.php">Weddings & Events</a></li>
                <li><a href="http://localhost/LotusLagoon/bar/bar.php">Bar</a></li> 
                <li><a href="http://localhost/LotusLagoon/about/abo.php">About us</a></li>
                <li><a href="http://localhost/LotusLagoon/feedback/feedback.php">Feedback</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <!-- Feedback Form -->
        <div class="feedback-form">
            <h2>Feedback Form</h2>
            <form action="feedback.php" method="POST">
                <input type="hidden" id="id" name="id">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                <label for="rating">Rating:</label>
                <div class="rating-slider">
                    <input type="range" id="rating" name="rating" min="0" max="5" step="1" value="0" oninput="document.getElementById('ratingValue').textContent = this.value" required>
                    <span id="ratingValue">0</span>
                </div>
                <label for="opinion">Opinion:</label>
                <select id="opinion" name="opinion" required>
                    <option value="happy">😀 Happy</option>
                    <option value="neutral">😐 Neutral</option>
                    <option value="sad">😢 Sad</option>
                </select>
                <br><br>
                 <div class="form-buttons">
                <button type="submit" id="submit_button" name="submit_feedback">Submit</button>
                <button type="submit" id="update_button" name="update_feedback" style="display:none;">Update</button>
                <button type="button" onclick="clearForm()">Clear</button>
    </div>
            </form>
        </div>

        <!-- Status Messages -->
        <?php if ($successMessage): ?>
            <div class="alert success">
                <?php echo $successMessage; ?>
            </div>
        <?php endif; ?>
        <?php if ($errorMessage): ?>
            <div class="alert error">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>

        <!-- Feedback Records Table -->
        <div class="feedback-table">
            <h2>Feedback Records</h2>
            <?php
            if ($result->num_rows > 0) {
                echo "<table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Rating</th>
                            <th>Opinion</th>
                            <th>Actions</th>
                        </tr>";
                while($row = $result->fetch_assoc()) {
                    $rating = $row["rating"];
                    $ratingStars = str_repeat('⭐', $rating);
                    $opinionEmoji = $row["opinion"] == 'happy' ? '😀 Happy' : ($row["opinion"] == 'neutral' ? '😐 Neutral' : '😢 Sad');

                    echo "<tr>
                            <td>" . $row["id"]. "</td>
                            <td>" . $row["name"]. "</td>
                            <td>" . $row["email"]. "</td>
                            <td>" . $row["message"]. "</td>
                            <td>" . $ratingStars . "</td>
                            <td>" . $opinionEmoji . "</td>
                            <td>
                                <button onclick=\"fillForm(" . $row["id"]. ", '" . $row["name"]. "', '" . $row["email"]. "', '" . $row["message"]. "', '" . $row["rating"]. "', '" . $row["opinion"]. "')\">Edit</button>
                                <form action='feedback.php' method='POST' style='display:inline;'>
                                    <input type='hidden' name='id' value='" . $row["id"]. "'>
                                    <button type='submit' name='delete_feedback'>Delete</button>
                                </form>
                            </td>
                        </tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No records found.</p>";
            }
            $conn->close();
            ?>
        </div>
        <footer>
        <p>&copy; 2024 Lotus Lagoon Resort. All rights reserved.</p>
    </footer>
    </div>
</body>
</html>
