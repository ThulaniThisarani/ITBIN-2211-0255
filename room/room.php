<?php include 'dbconnection.php'; ?>

<?php
$success_message = '';
$update_message = '';

if (isset($_POST['submit'])) {
    $id = $_POST['id'] ?? null;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $roomType = $_POST['roomType'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $extras = $_POST['extras'];
    $facilities = isset($_POST['facilities']) ? implode(",", $_POST['facilities']) : '';
    $payment = $_POST['payment'];

    if ($id) {
        // Update record
        $sql = "UPDATE room SET name=?, email=?, roomType=?, checkin=?, checkout=?, extras=?, facilities=?, payment=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssssssi', $name, $email, $roomType, $checkin, $checkout, $extras, $facilities, $payment, $id);
        if ($stmt->execute()) {
            $update_message = "Record updated successfully!";
        } else {
            $update_message = "Failed to update record.";
        }
    } else {
        // Insert record
        $sql = "INSERT INTO room (name, email, roomType, checkin, checkout, extras, facilities, payment) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssssss', $name, $email, $roomType, $checkin, $checkout, $extras, $facilities, $payment);
        if ($stmt->execute()) {
            $success_message = "Record added successfully!";
        } else {
            $success_message = "Failed to add record.";
        }
    }
}

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = $_GET['deleteId'];
    $sql = "DELETE FROM room WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        $success_message = "Record deleted successfully!";
    } else {
        $success_message = "Failed to delete record.";
    }
}

$sql_select = "SELECT * FROM room";
$select_result = $conn->query($sql_select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Room Booking</title>
    <link rel="stylesheet" href="form.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <nav>
        <ul>
            <li><a href="http://localhost/LotusLagoon/home/home.php">Home</a></li>
            <li><a href="http://localhost/LotusLagoon/food/index.php">Food</a></li>
            <li><a href="http://localhost/LotusLagoon/room/slide.php">Room</a></li>
            <li><a href="http://localhost/LotusLagoon/wedding/wedding.php">Wedding/Party</a></li>
            <li><a href="http://localhost/LotusLagoon/bar/bar.php">Bar</a></li>
            <li><a href="http://localhost/LotusLagoon/about/abo.php">About Us</a></li>
            <li><a href="http://localhost/LotusLagoon/feedback/feedback.php">Feedback</a></li>
        </ul>
    </nav>
    <div class="background">
        <div class="sidebar">
            <div class="logo-details">
                <i class='bx bx-spa icon'></i>
                <div class="logo_name">LotusLagoon</div>
                <i class='bx bx-menu' id="btn"></i>
            </div>
            <ul class="nav-list">
                <li><i class='bx bx-search'></i><input type="text" placeholder="Search..."><span class="tooltip">Search</span></li>
                <li><a href="#"><i class='bx bxs-home'></i><span class="links_name">Home</span></a><span class="tooltip">Home</span></li>
                <li><a href="http://localhost/LotusLagoon/food/index.php"><i class='bx bx-bowl-hot'></i><span class="links_name">Food</span></a><span class="tooltip">Food</span></li>
                <li><a href="slide.php"><i class='bx bx-hotel'></i><span class="links_name">Room</span></a><span class="tooltip">Room</span></li>
                <li><a href="#"><i class='bx bxs-balloon'></i><span class="links_name">Wedding/Party</span></a><span class="tooltip">Wedding/Party</span></li>
                <li><a href="http://localhost/LotusLagoon/bar/bar.php"><i class='bx bx-wine'></i><span class="links_name">Bar</span></a><span class="tooltip">Bar</span></li>
                <li><a href="http://localhost/LotusLagoon/about/abo.php"><i class='bx bxs-user-pin'></i><span class="links_name">About us</span></a><span class="tooltip">About Us</span></li>
                <li><a href="http://localhost/LotusLagoon/feedback/feedback.php"><i class='bx bx-comment-detail'></i><span class="links_name">Feedback</span></a><span class="tooltip">Feedback</span></li>
                <li class="profile"><i class='bx bx-log-out' id="log_out"></i></li>
            </ul>
        </div>
        <div class="form-container">
            <form action="room.php" method="post" autocomplete="off">
                <input type="hidden" id="id" name="id">
                <h1>Room Booking</h1>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="roomType">Room Type:</label>
                <select id="roomType" name="roomType" required>
                    <option value="superiorroom">Superior Room</option>
                    <option value="deluxeroom">Deluxe Room</option>
                    <option value="executiveroom">Executive Room</option>
                    <option value="familyroom">Family Room</option>
                    <option value="suite">Suite</option>
                    <option value="presidentialsuite">Presidential Suite</option>
                </select>

                <label for="checkin">Check-in Date:</label>
                <input type="date" id="checkin" name="checkin" required>

                <label for="checkout">Check-out Date:</label>
                <input type="date" id="checkout" name="checkout" required>

                <label for="extras">Extras:</label>
                <textarea id="extras" name="extras" rows="4" cols="50"></textarea>

                <div class="checkbox-group">
                    <label>Facilities:</label>
                    <label><input type="checkbox" name="facilities[]" value="wifi"> WiFi</label>
                    <label><input type="checkbox" name="facilities[]" value="breakfast"> Breakfast</label>
                    <label><input type="checkbox" name="facilities[]" value="parking"> Parking</label>
                </div>

                <div class="radio-group">
                    <label>Payment Method:</label>
                    <label><input type="radio" name="payment" value="credit"> Credit Card</label>
                    <label><input type="radio" name="payment" value="paypal"> PayPal</label>
                </div>

                <div class="crud-buttons">
                    <button type="submit" name="submit">Submit</button>
                    <button type="reset">Reset</button>
                </div>
            </form>
        </div>

        <div>
            <?php if ($success_message): ?>
                <p><?php echo $success_message; ?></p>
            <?php endif; ?>
            <?php if ($update_message): ?>
                <p><?php echo $update_message; ?></p>
            <?php endif; ?>

            <table class="list" id="storeList">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Room Type</th>
                        <th>Check-in Date</th>
                        <th>Check-out Date</th>
                        <th>Extras</th>
                        <th>Facilities</th>
                        <th>Payment Method</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($select_result->num_rows > 0): ?>
                        <?php while ($row = $select_result->fetch_assoc()): ?>
                            <tr id="<?php echo $row['id'] ?>">
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['roomType']; ?></td>
                                <td><?php echo $row['checkin']; ?></td>
                                <td><?php echo $row['checkout']; ?></td>
                                <td><?php echo $row['extras']; ?></td>
                                <td><?php echo implode(', ', explode(',', $row['facilities'])); ?></td>
                                <td><?php echo $row['payment']; ?></td>
                                <td>
                                    <a href="#" class="edit-btn" onclick="onEdit(<?php echo $row['id'] ?>)">Edit</a>
                                    <a href="room.php?action=delete&deleteId=<?php echo $row['id'] ?>" class="delete-btn">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9">No records found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Lotus Lagoon Resort. All rights reserved.</p>
        </div>
    </footer>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange();
        });

        searchBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange();
        });

        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            }
        }

        function onEdit(id) {
            const row = document.getElementById(id);
            document.getElementById('name').value = row.cells[0].innerText;
            document.getElementById('email').value = row.cells[1].innerText;
            document.getElementById('roomType').value = row.cells[2].innerText;
            document.getElementById('checkin').value = row.cells[3].innerText;
            document.getElementById('checkout').value = row.cells[4].innerText;
            document.getElementById('extras').value = row.cells[5].innerText;
            setCheckboxValues(row.cells[6].innerText);
            setRadioButtonValue(row.cells[7].innerText);
            document.getElementById('id').value = id;
        }

        function setCheckboxValues(value) {
            const checkboxes = document.querySelectorAll('input[name="facilities[]"]');
            const values = value.split(', ');
            checkboxes.forEach(checkbox => {
                checkbox.checked = values.includes(checkbox.value);
            });
        }

        function setRadioButtonValue(value) {
            const radios = document.querySelectorAll('input[name="payment"]');
            radios.forEach(radio => {
                radio.checked = (radio.value === value);
            });
        }
    </script>
</body>
</html>

<?php
$conn->close();
?>
