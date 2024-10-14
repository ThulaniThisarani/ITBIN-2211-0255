<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_service";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM submissions WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Submission</title>
</head>
<body>
    <h2>Edit Submission</h2>
    <form action="form_handler.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>
        </div>
        <div>
            <label for="telephoneNumber">Telephone Number:</label>
            <input type="text" id="telephoneNumber" name="telephoneNumber" value="<?php echo $row['telephoneNumber']; ?>" required>
        </div>
        <div>
            <label for="starters">Starters:</label>
            <input type="text" id="starters" name="starters" value="<?php echo $row['starters']; ?>" required>
        </div>
        <div>
            <label for="mains">Mains:</label>
            <input type="text" id="mains" name="mains" value="<?php echo $row['mains']; ?>" required>
        </div>
        <div>
            <label for="sides">Sides:</label>
            <input type="text" id="sides" name="sides" value="<?php echo $row['sides']; ?>" required>
        </div>
        <div>
            <label for="dessert">Dessert:</label>
            <input type="text" id="dessert" name="dessert" value="<?php echo $row['dessert']; ?>" required>
        </div>
        <div>
            <label for="beverages">Beverages:</label>
            <input type="text" id="beverages" name="beverages" value="<?php echo $row['beverages']; ?>" required>
        </div>
        <div>
            <label for="extraFoods">Extra Foods:</label>
            <input type="text" id="extraFoods" name="extraFoods" value="<?php echo $row['extraFoods']; ?>">
        </div>
        <div>
            <label for="time">Time:</label>
            <input type="text" id="time" name="time" value="<?php echo $row['time']; ?>" required>
        </div>
        <div>
            <label for="roomNumber">Room Number:</label>
            <input type="text" id="roomNumber" name="roomNumber" value="<?php echo $row['roomNumber']; ?>" required>
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>
