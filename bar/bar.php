<?php include 'connectionn.php' ?>
<?php
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $spirits = $_POST['spirits'];
    $nonAlcoholic = $_POST['nonAlcoholic'];
    $wineChampagne = isset($_POST['wineChampagne']) ? implode(",", $_POST['wineChampagne']) : '';
    
    $bites = $_POST['bites'];



    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $sql = "UPDATE bar SET name='$name', email='$email', spirits='$spirits', nonAlcoholic='$nonAlcoholic', wineChampagne='$wineChampagne', bites='$bites' WHERE id=$id";
    } else {
        $sql = "INSERT INTO bar (name, email, spirits, nonAlcoholic, wineChampagne, bites)
                VALUES ('$name', '$email', '$spirits', '$nonAlcoholic', '$wineChampagne', '$bites')";
    }


    $inset_result = mysqli_query($conn, $sql);

    if ($inset_result) {
        $added_success = true;
        $added_fail = false;
    } else {
        $added_success = false;
        $added_fail = true;
    }
}


if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = $_GET['deleteId'];

    $delete_sql = "DELETE FROM bar WHERE id = $id";

    $delete_result = mysqli_query($conn, $delete_sql);

    if ($delete_result) {
        $deleted_success = true;
        $deleted_fail = false;
    } else {
        $deleted_success = false;
        $deleted_fail = true;
    }
}

?>

<?php
$sql_select = "SELECT * FROM bar";
$select_result = mysqli_query($conn, $sql_select);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bar.css">
    <title>Lotus Loogn - Bar </title>




</head>

<body>
    <header>



        <h1>Welcome to Lotus Loogn</h1>

        <nav>
            <ul>
                <li><a href="http://localhost/LotusLagoon/home/home.php" style="color: rgb(208, 208, 49); font-size: 26px;"><u>Home</u></a></li>
                <li><a href="http://localhost/LotusLagoon/food/index.php" style="color: rgb(208, 208, 49); font-size: 26px;"><u>Food</u></a></li>
                <li><a href="http://localhost/LotusLagoon/room/slide.php" style="color: rgb(208, 208, 49); font-size: 26px;"><u>Room</u></a></li>
                <li><a href="http://localhost/LotusLagoon/wedding/wedding.php" style="color: rgb(208, 208, 49); font-size: 26px;"><u>Wedding & Party</u></a></li>
                <li><a href="http://localhost/LotusLagoon/bar/bar.php" style="color: rgb(208, 208, 49); font-size: 26px;"><u>Bar</u></a></li>
                <li><a href="http://localhost/LotusLagoon/about/abo.php" style="color: rgb(208, 208, 49); font-size: 26px;"><u>About Us</u></a></li>
                <li><a href="http://localhost/LotusLagoon/feedback/feedback.php" style="color: rgb(208, 208, 49); font-size: 26px;"><u>Feedback</u></a></li>
            </ul>
        </nav>

    </header>

    <section id="gallery">

        <div class="gallery-container">
            <img src="https://hips.hearstapps.com/hmg-prod/images/home-bar-ideas-hbx070121phoebehoward-006-1640209599.jpg?crop=1.00xw:0.670xh;0,0.150xh&resize=1120:*" alt="1" class="gallery-item">
            <img src="https://static.toiimg.com/photo/45144471.cms" alt="2" class="gallery-item">
            <img src="https://i.pinimg.com/736x/42/1d/96/421d96c41b7bb934b70050d5b030147f.jpg" alt="3" class="gallery-item">


        </div>
    </section>

    <section id="bar">
        <h2>Bar of Lotus Lagoon Hotel</h2>

        <p class="highlight">Indulge in a refined selection of handcrafted cocktails and premium spirits at the Lotus Lounge bar.<br> Whether you're unwinding after a long day or toasting to a special occasion, our inviting atmosphere is the perfect setting for memorable moments.</p>
        <button style="font-size: 22px; margin-left: 100px; " onclick="showMenu('bar-menu')">....View Bar Menu....</button>
        <div id="bar-menu" class="menu" style="display:none;">
            <h3>Bar Menu</h3>
            <ul class="grid-menu">




                <li>
                    <img src="https://minuman.com/cdn/shop/articles/061022---Get-Familiar-with-Different-Types-of-Whisky_600x600_crop_center.jpg?v=1667363014 height:300px width:150px" height:300px; width:150px; alt="Whisky">
                    <span>Whisky - RS5000 upward</span>
                </li>
                <li>
                    <img src="https://ginfling.nl/pub/media/catalog/product/cache/8981f8e3f39dfdcfb5ae82d173e66caa/a/b/absolut_vodka_trio_pack.jpg" height:300px width:150px alt="Vodka">
                    <span>vodka - RS4000 upward</span>
                </li>
                <li>
                    <img src="https://vinepair.com/wp-content/uploads/2024/04/worlds-10-best-gin-selling-v2-google-1000x1000.jpg" alt="Gin">
                    <span>Gin- Rs5000 upward</span>
                </li>
                <li>
                    <img src="https://www.twelvegreenbottleswine.co.uk/cdn/shop/files/AlcoholFreeBeerSelection6x500mlGlassBottlesWGBDRINBUNDBEERALCOFREE6_600x.jpg?v=1705571063" alt="Beer">
                    <span>Beer - Rs800</span>
                </li>
                <li>
                    <img src="https://alchetron.com/cdn/arrack-eecda7c0-3bc0-4d2e-bcda-fcdee45f0d0-resize-750.jpeg" alt="Arrack">
                    <span>Arrack - RS3000 upward</span>
                </li>
                <li>
                    <img src="https://prestigehaus.com/media/magefan_blog/best-budget-brandy-for-cooking-sipping-mixing-and-gifting.jpg" alt="Brandy">
                    <span>Brandy - RS7000 upward</span>
                </li>

            </ul>


            <ul>
                <li>
                    <img src="data:image/jpeg;base64,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" alt="Mojito">
                    <span>Mojito - RS500</span>
                </li>
                <li>
                    <img src="https://www.acouplecooks.com/wp-content/uploads/2020/04/Martini-003.jpg" alt="Martini">
                    <span>Martini - RS400</span>
                </li>
                <li>
                    <img src="data:image/jpeg;base64,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" alt="Bloody Mary">
                    <span>Bloody Mary - RS600</span>
                </li>
                <li>
                    <img src="https://www.vindulge.com/wp-content/uploads/2024/02/Smoked-Old-Fashioned-cocktail-with-smoked-ice.jpg" alt="Old Fashioned">
                    <span>Old Fashioned - RS800</span>
                </li>
                <li>
                    <img src="https://thesuburbansoapbox.com/wp-content/uploads/2022/07/Spicy-Jalapeno-Margarita.jpg" alt="Margarita">
                    <span>Margarita - RS700</span>
                </li>
                <li>
                    <img src="https://www.willcookforsmiles.com/wp-content/uploads/2022/06/Strawberry-Daiquiri-3.jpg" alt="daiquiri">
                    <span>daiquiri - RS700</span>
                </li>
            </ul>


            <ul>

                <li>
                    <img src="https://www.culinaryhill.com/wp-content/uploads/2023/03/A-Guide-to-Red-Wine-Culinary-Hill-LR-05.jpg" alt="Red Wine">
                    <span>Red Wine- RS4000</span>

                </li>
                <li>
                    <img src="https://lacaveborabora.com/wp-content/uploads/2023/01/champagne-magnum-rose-bollinger-special-cuvee.webp" alt="Bolligner Special Wine">
                    <span>Bolligner Special Wine - RS5000</span>
                </li>
                <li>
                    <img src="https://www.kapruka.com/shops/specialGifts/productImages/1664213481586_dsc_8130_m.jpg" alt="White Wine">
                    <span>White Wine - RS6000</span>
                </li>
                <li>
                    <img src="https://gustidipuglia.it/9077/dom-perignon-brut-vintage-2013-75cl.jpg" alt="Dom Perignon">
                    <span>Dom Perignon - RS7000</span>
                </li>
                <li>
                    <img src="https://thechampagnecompany.com/media/catalog/product/cache/17f574cd16527d997e61f97175df04ad/e/d/edited_single_gift_box_ruinart_blanc_de_blanc.jpg" alt="Ruinart balanc de balancs">
                    <span>Ruinart balanc de balancs - RS9000</span>
                </li>
                <li>
                    <img src="https://target.scene7.com/is/image/Target/GUEST_1d6756a2-602b-49ff-a44d-d32bf3066a01?wid=488&hei=488&fmt=pjpeg" alt="Rose Wine">
                    <span>Rose Wine - RS8000</span>
                </li>
            </ul>


            <ul>



                <li>
                    <img src="https://orsimages.unileversolutions.com/ORS_Images/Knorr_en-LK/Devilled_43_1.1.296_326X580.Jpeg" alt="Chicken Deviled">
                    <span>Chiken Deviled- RS1500</span>

                </li>
                <li>
                    <img src="https://www.kitchensanctuary.com/wp-content/uploads/2018/10/Sticky-Spicy-Pork-Belly-square-FS.jpg" alt="Pork Fry">
                    <span>Pork Fry - RS1500</span>
                </li>
                <li>
                    <img src="https://i.pinimg.com/736x/14/15/38/141538672ea53ef30edc3ab22dcba547.jpg" alt="Chicken Fry">
                    <span>Chicken Fry- RS1000</span>
                </li>
                <li>
                    <img src="https://i.redd.it/2fy3xp1wz9rb1.jpg" alt="Pottato Chips">
                    <span>Pottato Chips - RS1000</span>
                </li>
                <li>
                    <img src="https://static.toiimg.com/thumb/66635052.cms?width=1200&height=900" alt="Prown Fry">
                    <span>Prown Fry - RS2000</span>
                </li>
                <li>
                    <img src="https://shop.gsffish.com/wp-content/uploads/2020/04/hot-butter-cuttlefish.png" alt="Hot Butter Cuttle Fish">
                    <span>Hot Butter Cuttle Fish - RS2500</span>
                </li>
            </ul>
        </div>

    </section>
    <section id="special-offers">
        <h3>Special Offers</h3>
        <div class="offer-container">
            <img src="https://as1.ftcdn.net/v2/jpg/02/14/94/14/1000_F_214941426_GFIYoiFItOIUMa98v2kI7MrvkCf1Aj1G.jpg" alt="Special Offer Image" class="offer-image">
            <img src="https://static1.bigstockphoto.com/0/1/3/large1500/310592359.jpg" alt="Special Offer Image" class="offer-image">
            <img src="https://images.squarespace-cdn.com/content/v1/5689f82ea12f44306f910213/e44165ed-6af2-4f4e-9b3a-b801da5fd836/Barbites-poster.jpg" alt="Special Offer Image" class="offer-image">
            <div class="offer-details">
                <h3>|.....Exclusive Happy Hour....|</h3>
                <p style="font-size: 25px;">Join us for our exclusive Happy Hour from 6 PM to 8 PM every day! </p>
                <p style="font-size: 22px;"><strong>Offer Duration:</strong> Valid through the end of the month.</p>

            </div>
        </div>
    </section>



    <section id="order" class="menu-section">
        <h2 style="font-size: 30px; text-align: center; text-decoration: underline; color: white;">Orders</h2>
    </section>
    <div id="v">
        <table>
            <tr>
                <td>
                    <form action="bar.php" method="post" autocomplete="off" onsubmit="return validateForm()">
                        <input type="hidden" id="id" name="id">
                        <div>
                            <label for="name">
                                <h3><u>Name:</h3></u>
                            </label>
                            <input type="text" id="name" name="name" required style="font-size: 16px;">
                        </div>
                        <div>
                            <label for="email">
                                <h3><u>E-mail Addres:</h3></u>
                            </label>
                            <input type="text" id="email" name="email" required
                                style="font-size: 16px;">
                        </div>
                        <div>
                            <label for="spirits">
                                <h3><u>Spirits:</h3></u>
                            </label>
                            <select id="spirits" name="spirits" required style="font-size: 16px;">
                                <option value="Whiskey">Whiskey</option>
                                <option value="Vodka">Vodka</option>
                                <option value="Gin">Gin</option>
                                <option value="Beer">Beer</option>
                                <option value="Rum">Arrack</option>
                                <option value="Mezcal">Brandy</option>
                            </select>
                        </div>



                        <div>
                            <label for="nonAlcoholic">
                                <h3><u>Non-Alcoholic Beverages:</h3></u>
                            </label>
                            <select id="nonAlcoholic" name="nonAlcoholic" required style="font-size: 16px;">
                                <option value="Virgin Mojito">Virgin Mojito</option>
                                <option value="Bloody Mary">Bloody Mary</option>
                                <option value="Margarita">Margarita</option>
                                <option value="Lemonade">Lemonade</option>
                                <option value="Iced Tea">Iced Tea</option>
                                <option value="Blue Mojito">Blue Mojito</option>
                            </select>
                        </div>

                        <label>
                            <h3><u>Wine & Champagne:</h3></u>
                        </label>
                        <input type="checkbox" id="wineChampagne" name="wineChampagne[]" value="Red Wine">
                        <label for="Red Wine">Red Wine</label>
                        <input type="checkbox" id="wineChampagne" name="wineChampagne[]" value="Bollinger Special Cuvee">
                        <label for="Bollinger Special Cuvee">Bollinger Special Cuvee</label>
                        <input type="checkbox" id="wineChampagne" name="wineChampagne[]" value="White Wine">
                        <label for="White Wine">White Wine</label>
                        <input type="checkbox" id="wineChampagne" name="wineChampagne[]" value="Dom Perignon">
                        <label for="Dom Perignon">Dom Perignon</label>
                        <input type="checkbox" id="wineChampagne" name="wineChampagne[]" value="Ruinart Blanc de Blancs">
                        <label for="Ruinart Blanc de Blancs">Ruinart Blanc de Blancs</label>
                        <input type="checkbox" id="wineChampagne" name="wineChampagne[]" value="Rose Wine">
                        <label for="Hot Chocolate">Rose Wine</label>
    </div>
    <div>
        <label for="bites">
            <h3><u>Bites:</h3></u>
        </label>
        <textarea id="bites" name="bites" rows="4" cols="50"
            style="font-size: 16px;"></textarea>
    </div>
    <div>
        <!-- <label>
                                <h3><u>Payment Method:</u></h3>
                            </label>
                            <input type="radio" id="paymentmethod1" name="paymentmethod" value="chargetoRoom">
                            <label for="chargetoRoom">Charge to Room</label>
                            <input type="radio" id="paymentmethod2" name="paymentmethod" value="creditCard">
                            <label for="creditCard">Credit Card</label>
                            <input type="radio" id="paymentmethod3" name="paymentmethod" value="Cash">
                            <label for="Cash">Cash</label>
                        </div> -->


        <div class="form_action--button">
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Reset">
        </div>
    </div>
    </form>

    <td>

        <?php if ((isset($added_success)) && $added_success) ?>
        <!-- <p>Record added successfully!</p> -->
        <?php if (isset($_GET['deleted'])) : ?>
            <!-- <p>Record deleted successfully!</p> -->
        <?php endif; ?>
        <table class="list" id="storeList">
            <!-- <table border="1"> -->
            <tr>
                <th>Name</th>
                <th>E-mail Addres</th>
                <th>spirits</th>
                <th>Non-Alcoholic Beverages</th>
                <th>wine & Champagne</th>
                <th>Bites</th>
                <!-- <th>Payment Method</th> -->
                <th>option</th>
            </tr>
            <tbody>

                <?php if ($select_result->num_rows > 0) : ?>
                    <?php while ($row = $select_result->fetch_assoc()) : ?>
                        <tr id="<?php echo $row['id'] ?>">
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['spirits']; ?></td>
                            <td><?php echo $row['nonAlcoholic']; ?></td>
                            <td><?php echo $row['wineChampagne']; ?></td>
                            <td><?php echo $row['bites']; ?></td>

                            <td>
                                <a href="#" onclick="onEdit(<?php echo $row['id'] ?>)">Edit</a>
                                <a href="bar.php?action=delete&deleteId=<?php echo $row['id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="10">No records found</td>
                    </tr>
                <?php endif; ?>
            </tbody>

        </table>
</body>
<br><br><br><br><br><br><br><br><br>
<footer>
    <p>&copy; 2024 Lotus Lagoon Hotel . All rights reserved.</p>
</footer>
<script>
    function showMenu(menuId) {
        const menu = document.getElementById(menuId);
        if (menu.style.display === "none") {
            menu.style.display = "block";
        } else {
            menu.style.display = "none";
        }
    }
    var selectedRow = null;

    function onFormSubmit(e) {
        event.preventDefault();

        var formData = readFormData();

        if (selectedRow === null) {
            insertNewRecord(formData);
        } else {
            updateRecord(formData);
        }
        console.log("Clicked")
        resetForm();
    }

    //Retrieve the data
    function readFormData() {
        var formData = {};
        formData["name"] = document.getElementById("name").value;
        formData["email"] = document.getElementById("email").value;
        formData["spirits"] = document.getElementById("spirits").value;
        formData["nonAlcoholic"] = document.getElementById("nonAlcoholic").value;
        formData["wineChampagne"] = getwineChampagneValue();
        formData["bites"] = document.getElementById("bites").value;
        // formData["paymentmethod"] = getpaymentMethodValue();

        console.log(getwineChampagneValue());

        return formData;
    }

    function validateForm(formData) {
        if (!formData.name || !formData.email || !formData.spirits || !formData.nonAlcoholic) {
            alert("Please fill out all required fields.");
            return false;
        }
        if (!formData.wineChampagne) {
            alert("Please select at least one wine or Champagne.");
            return false;
        }

        return true;
    }

    //Insert the data
    function insertNewRecord(data) {
        var table = document.getElementById("storeList").getElementsByTagName('tbody')[0];
        var newRow = table.insertRow(table.length);
        var cell1 = newRow.insertCell(0);
        cell1.innerHTML = data.name;
        var cell2 = newRow.insertCell(1);
        cell2.innerHTML = data.email;
        var cell3 = newRow.insertCell(2);
        cell3.innerHTML = data.spirits;
        var cell4 = newRow.insertCell(3);
        cell4.innerHTML = data.nonAlcoholic;
        var cell5 = newRow.insertCell(4);
        cell5.innerHTML = data.wineChampagne;
        var cell6 = newRow.insertCell(5);
        cell6.innerHTML = data.bites;
        // var cell7 = newRow.insertCell(6);
        // cell7.innerHTML = data.paymentmethod;
        var cel17 = newRow.insertCell(6);
        cel17.innerHTML = `<button onClick='onEdit(this)'>Edit</button> <button onClick='onDelete(this)'>Delete</button>`
    }

   
    function getwineChampagneValue() {
        let element = document.getElementsByName("wineChampagne[]")
        let value = '';
            for (i = 0; i < element.length; i++) {
                if (element[i].checked) {
                    value = value + element[i].value + ","
                }
            }
            if (value.charAt(value.length - 1) === ",") {
                value = value.substring(0, value.length - 1);
            }
            return value;
        }

    // function setRadioButtonValue(value, name) {
    //     let element = document.getElementsByName(name);
    //     for (i = 0; i < element.length; i++) {
    //         if (element[i].value === value) {
    //             element[i].checked = true;
    //         } else {
    //             element[i].checked = false;
    //         }
    //     }
    // }


    function setCheckboxValue(value, name) {
        let element = document.getElementsByName(name);
        let valueArray = value.split(",");
        for (i = 0; i < element.length; i++) {
            if (valueArray.includes(element[i].value)) {
                element[i].checked = true;
            } else {
                element[i].checked = false;
            }
        }
    }


    function onEdit(id) {
        selectedRow = document.getElementById(id);
        document.getElementById('id').value = id;
        document.getElementById('name').value = selectedRow.cells[0].innerHTML;
        document.getElementById('email').value = selectedRow.cells[1].innerHTML;
        document.getElementById('spirits').value = selectedRow.cells[2].innerHTML;
        document.getElementById('nonAlcoholic').value = selectedRow.cells[3].innerHTML;
        setCheckboxValue(selectedRow.cells[4].innerHTML, "wineChampagne[]")
        document.getElementById('bites').value = selectedRow.cells[5].innerHTML;
        // setRadioButtonValue(selectedRow.cells[6].innerHTML, "paymentmethod")
    }

    function updateRecord(formData) {
        selectedRow.cells[0].innerHTML = formData.name;
        selectedRow.cells[1].innerHTML = formData.email;
        selectedRow.cells[2].innerHTML = formData.spirits;
        selectedRow.cells[3].innerHTML = formData.nonAlcoholic;
        selectedRow.cells[4].innerHTML = formData.wineChampagne;
        selectedRow.cells[5].innerHTML = formData.bites;
        // selectedRow.cells[6].innerHTML = formData.paymentmethod;
    }

    //Delete the data
    function onDelete(td) {
        if (confirm('Do you want to delete this record?')) {
            row = td.parentElement.parentElement;
            document.getElementById('storeList').deleteRow(row.rowIndex);
        }
        resetForm();
    }

    //Reset the data
    function resetForm() {
        document.getElementById('name').value = '';
        document.getElementById('email').value = '';
        document.getElementById('spirits').value = '';
        document.getElementById('nonAlcoholic').value = '';
        setCheckboxValue('', "wineChampagne")
        document.getElementById('bites').value = '';
        // setRadioButtonValue('', "paymentmethod")
    }
</script>
</body>

</html>



<?php
$conn->close();
?>