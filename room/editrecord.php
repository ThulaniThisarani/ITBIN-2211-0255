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
$sql = "SELECT * FROM room WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
</head>
<body>
    <h2>Edit Booking</h2>
    <form action="formHandle.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>" required>
        </div>
        <div>
            <label for="roomType">Room Type:</label>
            <input type="text" id="roomType" name="roomType" value="<?php echo $row['sroomType']; ?>" required>
        </div>
        <div>
            <label for="checkin">Check-in Date:</label>
            <input type="date" id="checkin" name="checkin" value="<?php echo $row['checkin']; ?>" required>
        </div>
        <div>
            <label for="checkout">Check-out Date:</label>
            <input type="date" id="checkout" name="checkout" value="<?php echo $row['checkout']; ?>" required>
        </div>
        <div>
            <label for="extras">Extras:</label>
            <input type="text" id="extras" name="extras" value="<?php echo $row['extras']; ?>" required>
        </div>
        <div>
            <label for="facilities[]">Facilities:</label>
            <input type="text" id="facilities[]" name="facilities[]" value="<?php echo $row['facilities[]']; ?>" required>
        </div>
        <div>
            <label for="payment">Payment Method:</label>
            <input type="text" id="payment" name="payment" value="<?php echo $row['payment']; ?>">
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>