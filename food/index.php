<?php include 'connection.php' ?>
<?php
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $telephoneNumber = $_POST['telephoneNumber'];
    $starters = $_POST['starters'];
    $mains = $_POST['mains'];
    $sides = $_POST['sides'];
    $dessert = $_POST['dessert'];
    $beverages = isset($_POST['beverages']) ? implode(",", $_POST['beverages']) : '';
    $extraFoods = $_POST['extraFoods'];
    $time = $_POST['time'];
    $roomNumber = $_POST['roomNumber'];


    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $sql = "UPDATE submissions SET name='$name', telephoneNumber='$telephoneNumber', starters='$starters', mains='$mains', sides='$sides', 
    dessert='$dessert', beverages='$beverages', extraFoods='$extraFoods', time='$time', roomNumber='$roomNumber' WHERE id=$id";
    } else {
        $sql = "INSERT INTO submissions (name, telephoneNumber, starters, mains, sides, dessert, beverages, extraFoods, time, roomNumber)
                VALUES ('$name', '$telephoneNumber', '$starters', '$mains', '$sides', '$dessert', '$beverages', '$extraFoods', '$time', '$roomNumber')";
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

    $delete_sql = "DELETE FROM submissions WHERE id = $id";

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
$sql_select = "SELECT * FROM submissions";
$select_result = mysqli_query($conn, $sql_select);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="food.css">

</head>

<body>

    
        <header>
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

            <div class="background">
                <div class="sidebar">
                    <div class="logo-details">
                        <i class='bx bx-spa icon'></i>
                        <div class="logo_name">LotusLagoon</div>
                        <i class='bx bx-menu' id="btn"></i>
                    </div>
                    <ul class="nav-list">
                        <li>
                            <i class='bx bx-search'></i>
                            <input type="text" placeholder="Search...">
                            <span class="tooltip">Search</span>
                        </li>
                        <li>
                            <a href="http://localhost/LotusLagoon/home/home.php">
                                <i class='bx bxs-home'></i>
                                <span class="links_name">Home</span>
                            </a>
                            <span class="tooltip">Home</span>
                        </li>
                        <li>
                            <a href="http://localhost/LotusLagoon/food/index.php">
                                <i class='bx bx-bowl-hot'></i>
                                <span class="links_name">Food</span>
                            </a>
                            <span class="tooltip">Food</span>
                        </li>
                        <li>
                            <a href="http://localhost/LotusLagoon/room/slide.php#">
                                <i class='bx bx-hotel'></i>
                                <span class="links_name">Room</span>
                            </a>
                            <span class="tooltip">Room</span>
                        </li>
                        <li>
                            <a href="http://localhost/LotusLagoon/wedding/wedding.php">
                                <i class='bx bxs-balloon'></i>
                                <span class="links_name">Weeding/Party</span>
                            </a>
                            <span class="tooltip">Wedding/Party</span>
                        </li>
                        <li>
                            <a href="http://localhost/LotusLagoon/bar/bar.php">
                                <i class='bx bx-wine'></i>
                                <span class="links_name">Bar</span>
                            </a>
                            <span class="tooltip">Bar</span>
                        </li>
                        <li>
                            <a href="http://localhost/LotusLagoon/about/abo.php">
                                <i class='bx bxs-user-pin'></i>
                                <span class="links_name">About us</span>
                            </a>
                            <span class="tooltip">About Us</span>
                        </li>
                        <li>
                            <a href="http://localhost/LotusLagoon/feedback/feedback.php">
                                <i class='bx bx-comment-detail'></i>
                                <span class="links_name">FeedBack</span>
                            </a>
                            <span class="tooltip">FeedBack</span>
                        </li>
                        <li class="profile">

                            <i class='bx bx-log-out' id="log_out"></i>
                        </li>
                    </ul>
                </div>
                <h1>MENU</h1>
                <nav>
                    <ul>
                        <li>
                            <h3><a href="#Starters">Starters</a></h3>
                        </li>
                        <li>
                            <h3><a href="#Mains">Mains</a></h3>
                        </li>
                        <li>
                            <h3><a href="#Sides">Sides</a></h3>
                        </li>
                        <li>
                            <h3><a href="#Desserts">Desserts</a></h3>
                        </li>
                        <li>
                            <h3><a href="#Beverages">Beverages</a></h3>
                        </li>
                        <li>
                            <h3><a href="#order">order</a></h3>
                        </li>
                    </ul>
                </nav>
        </header>

        <section id="welcome">
            <p>
            <h3>Welcome to , your destination for exceptional dining. Our chefs are committed to bringing you the best
                flavors from around the world, right to your table. Enjoy a perfect blend of taste and hospitality in a cozy
                ambiance.</h3>
            </p>
        </section>

        <section id="menu">
            <div id="Starters" class="menu-section">
                <h2><u>Starters</u></h2>
                <div class="food-grid">
                    <div class="food-item">
                        <h3>Stuffed Mushrooms</h3>
                        <img src="https://i.pinimg.com/originals/c2/13/89/c213894de6867ce4d7bb8e19c75477c9.png" alt="Stuffed Mushrooms">
                        <p>Mushrooms filled with herbed cream cheese, topped with breadcrumbs and baked to perfection.</p>
                        <p class="price"><u>Rs 850.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Sprign Roll</h3>
                        <img src="https://becs-table.com.au/wp-content/uploads/2022/11/spring-rolls.jpg" alt="Sprign Roll">
                        <p>Crispy 6 rolls filled with vegetables and sometimes shrimp or chicken, served with sweet chili
                            dipping sauce.</p>
                        <p class="price"><u>Rs 500.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Tomato Basil Soup</h3>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi9WVS74XfoQ5PmlO1u8BUDBD-5hBRMBGZtLakgy-Seh8tHNgZdc0k81-cx2gg6FRypnM&usqp=CAU" alt="Tomato Basil Soup">
                        <p>Creamy tomato soup infused with fresh basil, served with garlic bread..</p>
                        <p class="price"><u>Rs 840.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Mozzarella Sticks</h3>
                        <img src="https://www.dinneratthezoo.com/wp-content/uploads/2019/12/mozzarella-sticks-4.jpg" alt="Mozzarella Sticks">
                        <p>Crispy breaded mozzarella sticks served with marinara sauce for dipping.</p>
                        <p class="price"><u></u>Rs 700.00</p>
                    </div>

                    <div class="food-item">
                        <h3>Caprese Salad</h3>
                        <img src="https://www.wholesomeyum.com/wp-content/uploads/2022/05/wholesomeyum-Caprese-Salad-5.jpg" alt="<h3>Caprese Salad</h3>">
                        <p>Fresh mozzarella, tomatoes, and basil, drizzled with balsamic glaze.</p>
                        <p class="price"><u>Rs 700.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Chicken Satay</h3>
                        <img src="https://www.spoonforkbacon.com/wp-content/uploads/2021/05/chicken_satay_recipe.jpg" alt="<h3>Chicken Satay</h3>">
                        <p>Grilled chicken skewers marinated in a blend of spices, served with peanut sauce.</p>
                        <p class="price"><u>Rs 600.00</u></p>
                    </div>
                </div>
            </div>

            <div id="Mains" class="menu-section">
                <h2><u>Mains</u></h2>
                <div class="food-grid">
                    <div class="food-item">
                        <h3>Lamprais</h3>
                        <img src="https://images.squarespace-cdn.com/content/v1/5f2c70d87a50aa40b14e5c9a/d7d2944e-2839-4713-b55b-cd64aac36354/Walawwa+-+1.png" alt="Lamprais">
                        <p>A Dutch-Burgher influenced dish with rice cooked in stock, accompanied by meat (often chicken or
                            beef) curry, frikkadels (Dutch-style meatballs), and seeni sambol (caramelized onions with
                            spices).</p>
                        <p class="price"><u>Rs 1200.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Vegetarian Lasagna</h3>
                        <img src="https://www.prouditaliancook.com/wp-content/uploads/2020/01/open-slice.jpg" alt="Vegetarian Lasagna">
                        <p>Layers of pasta sheets with a rich tomato sauce, spinach, mushrooms, and creamy béchamel sauce,
                            baked to perfection.</p>
                        <p class="price"><u>Rs 1600.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Butter Chicken (Murgh Makhani)</h3>
                        <img src="data:image/jpeg;base64,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" alt="Butter Chicken (Murgh Makhani)">
                        <p>Tandoori chicken cooked in a creamy tomato-based sauce with butter, cream, and aromatic spices,
                            served with naan bread and fragrant basmati rice.</p>
                        <p class="price"><u>Rs 1400.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Beef Tenderloin</h3>
                        <img src="https://www.midwestbestbeef.com/wp-content/uploads/2022/04/tenderloin-steak.jpg" alt="Beef Tenderloin">
                        <p>Succulent beef tenderloin steak cooked to your preference, accompanied by mashed potatoes and red
                            wine reduction sauce.</p>
                        <p class="price"><u>Rs 2600.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Rice and Curry</h3>
                        <img src="https://www.holidify.com/images/cmsuploads/compressed/480px-Sri_Lankan_Rice_and_Curry_20230214135546.jpg" alt="Rice and Curry">
                        <p>A selection of curries such as fish, chicken, or mutton, served with rice, accompanied by dhal
                            (lentil curry), sambol (spicy coconut relish), and papadam.</p>
                        <p class="price"><u>Rs 1000.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Kottu Roti</h3>
                        <img src="https://thumbs.dreamstime.com/b/sri-lankan-kottu-chopped-roti-stir-fried-vegetables-chicken-served-metal-plate-flavorful-traditional-dish-lanka-317795326.jpg" alt="Kottu Roti">
                        <p>Chopped roti stir-fried with vegetables, eggs, and a choice of chicken, beef, or seafood,
                            seasoned with spices and served with a side of curry sauce.</p>
                        <p class="price"><u>Rs 1750.00</u></p>
                    </div>

                </div>
            </div>

            <div id="Sides" class="menu-section">
                <h2><u>Sides</u></h2>
                <div class="food-grid">
                    <div class="food-item">
                        <h3>Spinach and Feta Stuffed Mushrooms</h3>
                        <img src="https://www.thegeneticchef.com/wp-content/uploads/2022/10/Spinach-and-Feta-Stuffed-Portobello-Mushrooms-7-681x1024.jpg" alt="Spinach and Feta Stuffed Mushrooms">
                        <p>Button mushrooms filled with a mixture of spinach, feta cheese, and breadcrumbs, then baked until
                            golden.</p>
                        <p class="price"><u>Rs 750.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Cucumber Salad</h3>
                        <img src="https://spoonsofflavor.com/wp-content/uploads/2021/08/Asian-cucumber-salad-with-sesame-dressing-2.jpg" alt="Cucumber Salad">
                        <p>Sliced cucumbers tossed with red onions, dill, and a light vinaigrette dressing.</p>
                        <p class="price"><u>Rs 650.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Honey Glazed Carrots</h3>
                        <img src="https://edeneats.com/cdn/shop/articles/Screen-Shot-2020-04-27-at-10.39.53-AM-2.png?v=1692143779" alt="Honey Glazed Carrots">
                        <p>Carrots cooked until tender and glazed with a sweet honey-butter sauce.</p>
                        <p class="price"><u>Rs 950.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Broccoli Almondine</h3>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR822nA68L6OJSga1oVfMfavG3PTBLcRZ4GK-q8-1mQa_58luCnDCiKCSxCkk0TmF1Kscg&usqp=CAU" alt="Broccoli Almondine">
                        <p>Tender broccoli florets sautéed with butter and topped with toasted almonds.</p>
                        <p class="price"><u>Rs 1000.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Asian Slaw</h3>
                        <img src="https://www.dinneratthezoo.com/wp-content/uploads/2019/12/asian-slaw-5.jpg" alt="Asian Slaw">
                        <p>Shredded cabbage and carrots tossed with a sesame-ginger dressing and topped with toasted sesame
                            seeds.</p>
                        <p class="price"><u>Rs 1150.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Grilled Asparagus</h3>
                        <img src="https://i.pinimg.com/736x/48/43/03/484303bd85559b2257a0e36c69fcec7c.jpg" alt="Grilled Asparagus">
                        <p>Fresh asparagus spears grilled with olive oil, garlic, and a squeeze of lemon juice.</p>
                        <p class="price"><u>Rs 1050.00</u></p>
                    </div>

                </div>
            </div>

            <div id="Desserts" class="menu-section">
                <h2><u>Desserts</u></h2>
                <div class="food-grid">
                    <div class="food-item">
                        <h3>Watalappan</h3>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMP3mLndq_Vy7Ky4Ja6065heb_lvwVB1S5Jjgc6zykQopzt0fCefJSEsHtLNW3bQ_9PRY&usqp=CAU" alt="Watalappan">
                        <p>A traditional Sri Lankan coconut custard pudding flavored with jaggery, cardamom, and nutmeg.</p>
                        <p class="price"><u>Rs 450.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Curd and Treacle</h3>
                        <img src="https://srilankatravelnews.files.wordpress.com/2023/09/image-13.png" alt="Curd and Treacle">
                        <p>Fresh buffalo curd served with kithul treacle (palm syrup), a classic Sri Lankan dessert
                            combination.</p>
                        <p class="price"><u>Rs 350.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Cashew Nut Fudge</h3>
                        <img src="https://therecipecritic.com/wp-content/uploads/2015/12/caramelcashewchocolatefudge.jpg" alt="Cashew Nut Fudge">
                        <p>A rich and creamy fudge made with cashew nuts, condensed milk, and butter, cut into squares.</p>
                        <p class="price"><u>Rs 550.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Orange Mousse</h3>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcST-j_eRVLze9-As2fAfhiDnCifKUlDhmc73xy_SZqVjWIed183O65J4139nzTToIvn13k&usqp=CAU" alt="Orange Mousse">
                        <p>Light and airy mousse made with fresh orange juice, cream, and gelatin, served chilled.</p>
                        <p class="price"><u>Rs 1000.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Sago Pudding</h3>
                        <img src="https://teakandthyme.com/wp-content/uploads/2022/09/mango-sago-DSC_0128-1600.jpg" alt="Sago Pudding">
                        <p>A creamy pudding made with sago pearls, mango,coconut milk, and palm sugar, flavored with
                            cardamom.</p>
                        <p class="price"><u>Rs 750.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Love Cake</h3>
                        <img src="https://dbakers.us/cdn/shop/files/70439917561__668B300D-8BEF-4A08-8797-619F34771C4B_2-removebg_grande.png?v=1683216266" alt="Love Cake">
                        <p> made with cake, cashew nuts, candied peel, and spices, typically served during festive
                            occasions.</p>
                        <p class="price"><u>Rs 650.00</u></p>
                    </div>
                </div>
            </div>

            <div id="Beverages" class="menu-section">
                <h2><u>Beverages</u></h2>
                <div class="food-grid">
                    <div class="food-item">

                        <h3>Faluda</h3>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9ntKRDCwbzj8wMnlMyYAKAuZ86cl_n7gObop0VaEg4kZ3utWic3NupMfkYKm0-gVtRhs&usqp=CAU" alt="Faluda">
                        <p>A popular drink made with rose syrup, vermicelli, basil seeds, milk, and topped with a scoop of
                            ice cream.</p>
                        <p class="price"><u>Rs 450.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Wood Apple Juice</h3>
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/05/37/c2/ce/sushine.jpg" alt="Wood Apple Juice">
                        <p>Juice made from wood apple pulp, known for its tangy and slightly sweet flavor, often served
                            chilled.</p>
                        <p class="price"><u>Rs 200.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Mint Lemonade</h3>
                        <img src="https://www.theendlessmeal.com/wp-content/uploads/2022/04/mint-lemonade.jpg" alt="Mint Lemonade">
                        <p>Refreshing lemonade infused with fresh mint leaves and sweetened with sugar syrup, served
                            chilled.</p>
                        <p class="price"><u>Rs 500.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Watermelon Juice</h3>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKVF_r7sWyVFkd_rZC0rrG-xCELL4tNY6wH3oheRQLdXJzeRCu6O9Qb5F8TO1kKPmgiyE&usqp=CAU" alt="Watermelon Juice">
                        <p>Freshly squeezed juice made from sweet and juicy watermelon, served cold.</p>
                        <p class="price"><u>Rs 350.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Lemon Ginger Tea</h3>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ5DsrPXMRFJYtXpvrsXx_xNjQ7w6e86odVTGZHudUohGoy0b8F8grYgDSVzJ-Ti3y-Zo&usqp=CAU" alt="Lemon Ginger Tea">
                        <p>Herbal tea made with fresh ginger slices, lemon juice, and honey, known for its invigorating and
                            soothing qualities.</p>
                        <p class="price"><u>Rs 400.00</u></p>
                    </div>
                    <div class="food-item">
                        <h3>Hot Chocolate</h3>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZU5GJpFpLM--0dU1d5jcB3Pf5CLhJLsD5Cs7SvNlu1s4SVTUnJoRoax31Bm3X1nK-Ba8&usqp=CAU" alt="Hot Chocolate">
                        <p>Rich hot chocolate flavored topped with whipped cream and a sprinkle of cocoa powder.</p>
                        <p class="price"><u>Rs 650.00</u></p>
                    </div>
                </div>
            </div>
        </section>
        </section>

        <section id="gallery" class="menu-section">
            <h2>Gallery</h2>
            <div class="gallery">
                <img src="https://media.timeout.com/images/105299515/image.jpg" alt="Hot Chocolate">
                <img src="https://b.zmtcdn.com/data/pictures/4/19674784/c1d4d7d8a0703f89f0a55383e4895dd9.jpg" alt="Restaurant Interior">
                <img src="https://bynaturedesign.ca/wp-content/uploads/2018/03/DSC6305-1024x683.jpg" alt="Restaurant Ambiance">
            </div>
            <div class="details">
                <p>Opening times:<b> 24 hours open.</b></p>
                <p>* Contact Number: <b>044-2233455</b> * E-mail - <b>lotuslagoon @gmail.com </b> </p>
            </div>
        </section>



        <section id="order" class="menu-section">
            <h2 style="font-size: 30px; text-align: center; text-decoration: underline; color: white;">Orders</h2>
        </section>

        <table>

            <tr>
                <td>
                    <form action="index.php" method="post" autocomplete="off" onsubmit="return validateForm()">
                        <input type="hidden" id="id" name="id">
                        <div>
                            <label for="name">
                                <h3><u>Name:</h3></u>
                            </label>
                            <input type="text" id="name" name="name" required style="font-size: 16px;">
                        </div>
                        <div>
                            <label for="telephoneNumber">
                                <h3><u>Telephone Number:</h3></u>
                            </label>
                            <input type="number" id="telephoneNumber" name="telephoneNumber" required style="font-size: 16px;">
                        </div>
                        <div>
                            <label for="starters">
                                <h3><u>Starters:</h3></u>
                            </label>
                            <select id="starters" name="starters" required style="font-size: 16px;">
                                <option value="Stuffed Mushrooms">Stuffed Mushrooms</option>
                                <option value="Spring Roll">Spring Roll</option>
                                <option value="Tomato Basil Soup">Tomato Basil Soup</option>
                                <option value="Mozzarella Sticks">Mozzarella Sticks</option>
                                <option value="Caprese Salad">Caprese Salad</option>
                                <option value="Chicken Satay">Chicken Satay</option>
                            </select>
                        </div>



                        <div>
                            <label for="mains">
                                <h3><u>Mains:</h3></u>
                            </label>
                            <select id="mains" name="mains" required style="font-size: 16px;">
                                <option value="Lamprice">Lamprice</option>
                                <option value="Vegetarian Lasagna">Vegetarian Lasagna</option>
                                <option value="Butter Chicken (Murgh Makhani)">Butter Chicken (Murgh Makhani)</option>
                                <option value="Beef Tenderloin">Beef Tenderloin</option>
                                <option value="Rice and Curry">Rice and Curry</option>
                                <option value="Kottu Roti">Kottu Roti</option>
                            </select>
                        </div>
                        <div>
                            <label for="sides">
                                <h3><u>Sides:</h3></u>
                            </label>
                            <select id="sides" name="sides" required style="font-size: 16px;">
                                <option value="Spinach and Feta Stuffed Mushrooms">Spinach and Feta Stuffed Mushrooms
                                </option>
                                <option value="Cucumber Salad">Cucumber Salad</option>
                                <option value="Honey Glazed Carrots">Honey Glazed Carrots</option>
                                <option value="Broccoli Almondine">Broccoli Almondine</option>
                                <option value="Asian Slaw">Asian Slaw</option>
                                <option value="Grilled Asparagus">Grilled Asparagus</option>
                            </select>
                        </div>
                        <div>
                            <label for="dessert">
                                <h3><u>Dessert:</h3></u>
                            </label>
                            <select id="dessert" name="dessert" required style="font-size: 16px;">
                                <option value="Watalappan">Watalappan</option>
                                <option value="Curd and Treacle">Curd and Treacle</option>
                                <option value="Cashew Nut Fudge">Cashew Nut Fudge</option>
                                <option value="Orange Mousse">Orange Mousse</option>
                                <option value="Sago Pudding">Sago Pudding</option>
                                <option value="Love Cake">Love Cake</option>
                            </select>
                        </div>
                        <div>
                            <label>
                                <h3><u>Beverages:</h3></u>
                            </label>
                            <input type="checkbox" id="beverages" name="beverages[]" value="Faluda">
                            <label for="Faluda">Faluda</label>
                            <input type="checkbox" id="beverages" name="beverages[]" value="Wood Apple Juice">
                            <label for="Wood Apple Juice">Wood Apple Juice</label>
                            <input type="checkbox" id="beverages" name="beverages[]" value="Mint Lemonade">
                            <label for="Mint Lemonade">Mint Lemonade</label>
                            <input type="checkbox" id="beverages" name="beverages[]" value="Watermelon Juice">
                            <label for="Watermelon Juice">Watermelon Juice</label>
                            <input type="checkbox" id="beverages" name="beverages[]" value="Lemon Ginger Tea">
                            <label for="Lemon Ginger Tea">Lemon Ginger Tea</label>
                            <input type="checkbox" id="beverages" name="beverages[]" value="Hot Chocolate">
                            <label for="Hot Chocolate">Hot Chocolate</label>
                        </div>
                        <div>
                            <label for="extraFoods">
                                <h3><u>Extra Foods:</h3></u>
                            </label>
                            <textarea id="extraFoods" name="extraFoods" rows="4" cols="50" style="font-size: 16px;"></textarea>
                        </div>
                        <div>
                            <label>
                                <h3><u>Time:</u></h3>
                            </label>
                            <input type="radio" id="time1" name="time" value="Breakfast">
                            <label for="Breakfast">Breakfast</label>
                            <input type="radio" id="time2" name="time" value="Lunch">
                            <label for="Lunch">Lunch</label>
                            <input type="radio" id="time3" name="time" value="Dinner">
                            <label for="Dinner">Dinner</label>
                        </div>
                        <div>
                            <label for="roomNumber">
                                <h3><u>Room Number:</h3></u>
                            </label>
                            <input type="number" id="roomNumber" name="roomNumber" required style="font-size: 16px;">
                        </div>


                        <div class="form_action--button">
                            <input type="submit" value="Submit" name="submit">
                            <input type="reset" value="Reset">
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
                            <th>Telephone Number</th>
                            <th>Starters</th>
                            <th>Mains</th>
                            <th>Sides</th>
                            <th>Dessert</th>
                            <th>Beverages</th>
                            <th>Extra Foods</th>
                            <th>Time</th>
                            <th>Room Number</th>
                            <th>Actions</th>
                        </tr>
                        <tbody>

                            <?php if ($select_result->num_rows > 0) : ?>
                                <?php while ($row = $select_result->fetch_assoc()) : ?>
                                    <tr id="<?php echo $row['id'] ?>">
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['telephoneNumber']; ?></td>
                                        <td><?php echo $row['starters']; ?></td>
                                        <td><?php echo $row['mains']; ?></td>
                                        <td><?php echo $row['sides']; ?></td>
                                        <td><?php echo $row['dessert']; ?></td>
                                        <td><?php echo $row['beverages']; ?></td>
                                        <td><?php echo $row['extraFoods']; ?></td>
                                        <td><?php echo $row['time']; ?></td>
                                        <td><?php echo $row['roomNumber']; ?></td>
                                        <td>
                                            <a href="#" onclick="onEdit(<?php echo $row['id'] ?>)">Edit</a>
                                            <a href="index.php?action=delete&deleteId=<?php echo $row['id'] ?>">Delete</a>
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
            formData["telephoneNumber"] = document.getElementById("telephoneNumber").value;
            formData["starters"] = document.getElementById("starters").value;
            formData["mains"] = document.getElementById("mains").value;
            formData["sides"] = document.getElementById("sides").value;
            formData["dessert"] = document.getElementById("dessert").value;
            formData["beverages"] = getBeveragesValue();
            formData["extraFoods"] = document.getElementById("extraFoods").value;
            formData["time"] = getTimeValue();
            formData["roomNumber"] = document.getElementById("roomNumber").value;
            return formData;
        }

        function validateForm() {

            const formData = readFormData();

            if (!formData.name || !formData.telephoneNumber || !formData.starters || !formData.mains || !formData.sides || !formData.dessert || !formData.time || !formData.roomNumber) {
                alert("Please fill out all required fields.");
                return false;
            }
            if (!formData.beverages) {
                alert("Please select at least one beverage.");
                return false;
            }
            if (formData.telephoneNumber.length < 10) {
                alert("Please enter a valid telephone number.");
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
            cell2.innerHTML = data.telephoneNumber;
            var cell3 = newRow.insertCell(2);
            cell3.innerHTML = data.starters;
            var cell4 = newRow.insertCell(3);
            cell4.innerHTML = data.mains;
            var cell5 = newRow.insertCell(4);
            cell5.innerHTML = data.sides;
            var cell6 = newRow.insertCell(5);
            cell6.innerHTML = data.dessert;
            var cell7 = newRow.insertCell(6);
            cell7.innerHTML = data.beverages;
            var cell8 = newRow.insertCell(7);
            cell8.innerHTML = data.extraFoods;
            var cell9 = newRow.insertCell(8);
            cell9.innerHTML = data.time;
            var cel20 = newRow.insertCell(9);
            cel20.innerHTML = data.roomNumber;
            var cel21 = newRow.insertCell(10);
            cel21.innerHTML = `<button onClick='onEdit(this)'>Edit</button> <button onClick='onDelete(this)'>Delete</button>`
        }

        function getTimeValue() {
            let element = document.getElementsByName("time")
            let value = '';
            for (i = 0; i < element.length; i++) {
                if (element[i].checked) {
                    value = element[i].value
                }
            }
            return value;
        }

        function getBeveragesValue() {
            let element = document.getElementsByName("beverages[]");
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

        function setRadioButtonValue(value, name) {
            let element = document.getElementsByName(name);
            for (i = 0; i < element.length; i++) {
                if (element[i].value === value) {
                    element[i].checked = true;
                } else {
                    element[i].checked = false;
                }
            }
        }


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
            document.getElementById('telephoneNumber').value = selectedRow.cells[1].innerHTML;
            document.getElementById('starters').value = selectedRow.cells[2].innerHTML;
            document.getElementById('mains').value = selectedRow.cells[3].innerHTML;
            document.getElementById('sides').value = selectedRow.cells[4].innerHTML;
            document.getElementById('dessert').value = selectedRow.cells[5].innerHTML;
            setCheckboxValue(selectedRow.cells[6].innerHTML, "beverages[]")
            document.getElementById('extraFoods').value = selectedRow.cells[7].innerHTML;
            setRadioButtonValue(selectedRow.cells[8].innerHTML, "time")
            document.getElementById('roomNumber').value = selectedRow.cells[9].innerHTML;
        }

        function updateRecord(formData) {
        
            selectedRow.cells[0].innerHTML = formData.name;
            selectedRow.cells[1].innerHTML = formData.telephoneNumber;
            selectedRow.cells[2].innerHTML = formData.starters;
            selectedRow.cells[3].innerHTML = formData.mains;
            selectedRow.cells[4].innerHTML = formData.sides;
            selectedRow.cells[5].innerHTML = formData.dessert;
            selectedRow.cells[6].innerHTML = formData.beverages;
            selectedRow.cells[7].innerHTML = formData.extraFoods;
            selectedRow.cells[8].innerHTML = formData.time;
            selectedRow.cells[9].innerHTML = formData.roomNumber;
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
            document.getElementById('telephoneNumber').value = '';
            document.getElementById('starters').value = '';
            document.getElementById('mains').value = '';
            document.getElementById('sides').value = '';
            document.getElementById('dessert').value = '';
            setCheckboxValue('', "beverages")
            document.getElementById('extraFoods').value = '';
            setRadioButtonValue('', "time")
            document.getElementById('roomNumber').value = '';
        }

        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
    </script>
</body>

</html>



<?php
$conn->close();
?>