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
$sql = "SELECT * FROM bar WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit bar</title>
</head>
<body>
    <h2>Edit bar</h2>
    <form action="form_handller.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>
        </div>
        <div>
            <label for="email">E-mail Addres:</label>
            <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>" required>
        </div>
        <div>
            <label for="spirits">Spirits:</label>
            <input type="text" id="spirits" name="spirits" value="<?php echo $row['spirits']; ?>" required>
        </div>
        <div>
            <label for="nonAlcoholic">Non-Alciholic drinks:</label>
            <input type="text" id="nonAlcoholic" name="nonAlcoholic" value="<?php echo $row['nonAlcoholic']; ?>" required>
        </div>
        <div>
            <label for="wineChampagne">wine & Champagne:</label>
            <input type="text" id="wineChampagne" name="wineChampagne" value="<?php echo $row['wineChampagne']; ?>" required>
        </div>
        <div>
            <label for="bites">Bites:</label>
            <input type="text" id="bites" name="bites" value="<?php echo $row['bites']; ?>" required>
        </div>
       
        <button type="submit">Save</button>
    </form>
</body>
</html>