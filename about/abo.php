<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us & Facilities - Lotus Lagoon Hotel</title>
    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}

.sidebar{
    
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 78px;
  background: #3a3a3b;
  padding: 3px 8px;
  z-index: 39;
  /* transition: all 0.5s ease; */
}
.sidebar.open{
  width: 250px;
}
.sidebar .logo-details{
  height: 60px;
  display: flex;
  align-items: left;
  position: relative;
}
.sidebar .logo-details .icon{
  opacity: 0;
  transition: all 0.5s ease;
}
.sidebar .logo-details .logo_name{
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  opacity: 0;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details .icon,
.sidebar.open .logo-details .logo_name{
  opacity: 1;
}
.sidebar .logo-details #btn{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  font-size: 22px;
  transition: all 0.4s ease;
  font-size: 23px;
  text-align: center;
  cursor: pointer;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details #btn{
  text-align: right;
}
.sidebar i{
  color: #fff;
  height: 60px;
  min-width: 50px;
  font-size: 28px;
  text-align: center;
  line-height: 60px;
}
.sidebar .nav-list{
  margin-top: 20px;
  height: 100%;
}
.sidebar li{
  position: relative;
  margin: 8px 0;
  list-style: none;
}
.sidebar li .tooltip{
  position: absolute;
  top: -20px;
  left: calc(100% + 15px);
  z-index: 3;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  padding: 6px 12px;
  border-radius: 4px;
  font-size: 15px;
  font-weight: 400;
  opacity: 0;
  white-space: nowrap;
  pointer-events: none;
  transition: 0s;
}
.sidebar li:hover .tooltip{
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
  top: 50%;
  transform: translateY(-50%);
}
.sidebar.open li .tooltip{
  display: none;
}
.sidebar input{
  font-size: 15px;
  color: #FFF;
  font-weight: 400;
  outline: none;
  height: 50px;
  width: 100%;
  width: 50px;
  border: none;
  border-radius: 12px;
  transition: all 0.5s ease;
  background: #1d1b31;
}
.sidebar.open input{
  padding: 0 20px 0 50px;
  width: 100%;
}
.sidebar .bx-search{
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  font-size: 22px;
  background: #1d1b31;
  color: #FFF;
}
.sidebar.open .bx-search:hover{
  background: #1d1b31;
  color: #FFF;
}
.sidebar .bx-search:hover{
  background: #FFF;
  color: #11101d;
}
.sidebar li a{
  display: flex;
  height: 100%;
  width: 100%;
  border-radius: 12px;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
  background: #11101D;
}
.sidebar li a:hover{
  background: #FFF;
}
.sidebar li a .links_name{
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
  transition: 0.4s;
}
.sidebar.open li a .links_name{
  opacity: 1;
  pointer-events: auto;
}
.sidebar li a:hover .links_name,
.sidebar li a:hover i{
  transition: all 0.5s ease;
  color: #11101D;
}
.sidebar li i{
  height: 50px;
  line-height: 50px;
  font-size: 18px;
  border-radius: 12px;
}
.sidebar li.profile{
  position: fixed;
  height: 60px;
  width: 78px;
  left: 0;
  bottom: -8px;
  padding: 10px 14px;
  background: #1d1b31;
  transition: all 0.5s ease;
  overflow: hidden;
}
.sidebar.open li.profile{
  width: 250px;
}

.sidebar li img{
  height: 45px;
  width: 45px;
  object-fit: cover;
  border-radius: 6px;
  margin-right: 10px;
}

.sidebar .profile #log_out{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  background: #1d1b31;
  width: 100%;
  height: 60px;
  line-height: 60px;
  border-radius: 0px;
  transition: all 0.5s ease;
}
.sidebar.open .profile #log_out{
  width: 50px;
  background: none;
}
.home-section{
  position: relative;
  background: #E4E9F7;
  min-height: 100vh;
  top: 0;
  left: 78px;
  width: calc(100% - 78px);
  transition: all 0.5s ease;
  z-index: 2;
}
.sidebar.open ~ .home-section{
  left: 250px;
  width: calc(100% - 250px);
}
         body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #4A644F;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .section {
            margin-bottom: 50px;
        }
        h1{
            color: #0C2F5C;
        }
		 h2{
            color: #110D27;
        }
		h3 {
            color: #46813E;
        }
        .about-us {
            text-align: center;
            background-color: #E6E7BD;
            padding: 50px 20px;
            border-radius: 10px;
        }
        .about-us img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .about-us p {
            max-width: 800px;
            margin: 20px auto;
            line-height: 1.6;
        }
        .about-us div {
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
        }
        .facilities {
            background-color: #B5AFC5;
            padding: 50px 20px;
            border-radius: 10px;
        }
        .facility-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        .facility-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .facility-item img {
            width: 100%;
            height: auto;
            border-radius: 10px 10px 0 0;
        }
        .facility-item div {
            padding: 20px;
        }
        .facility-item h3 {
            margin-top: 0;
        }
        .facility-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .slider {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            border-radius: 10px;
            overflow: hidden;
        }
        .slides img {
            width: 100%;
            display: none;
            border-radius: 10px;
        }
        .slides img.active {
            display: block;
        }
        .slider-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        .slider-btn.prev {
            left: 10px;
        }
        .slider-btn.next {
            right: 10px;
        }
		.management-team {
            background-color: #f0f0f0;
            padding: 50px 20px;
            border-radius: 10px;
        }
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 20px;
        }
        .team-member {
            text-align: center;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .team-member img {
            width: 100%;
            height: auto;
            border-radius: 10px 10px 0 0;
        }
        .team-member div {
            padding: 20px;
        }
        .team-member h3 {
            margin: 10px 0 5px;
        }
        .team-member p {
            margin: 0;
            color: #777;
        }
        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        footer {
          background-color: #333;
          color: white;
          text-align: center;
          padding: 0.2rem 0;
          position: fixed;
          width: 100%;
          bottom: 0;
        }
    </style>
</head>
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
        


    </header>
<body>
    <div class="container">
        <!-- About Us Section -->
        <div class="section about-us">
            <h1><u>About Lotus Lagoon Hotel</u></h1>
            <div class="slider">
                <div class="slides">
                    <?php
                    // Array of image URLs
                    $images = [
                        "https://imageio.forbes.com/specials-images/imageserve/662f6be9c5ef29c54664fb64/Uga-Ulagalla1/960x0.jpg?height=474&width=711&fit=bounds",
                        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKN4wL0OVMx2QzZtO1-rrZO-Sn1o8-pK7H6A&s",
                        "https://www.myboutiquehotel.com/photos/107902/uga-chena-huts-all-inclusive-yala-131-96914-1110x700.jpg"
                    ];

                    // Loop through images and output them
                    foreach ($images as $index => $image) {
                        $activeClass = $index === 0 ? 'active' : '';
                        echo "<img src='$image' alt='Slider Image' class='$activeClass'>";
                    }
                    ?>
                </div>
                <button class="slider-btn prev" onclick="changeSlide(-1)">&#10094;</button>
                <button class="slider-btn next" onclick="changeSlide(1)">&#10095;</button>
            </div>
            <p><h3>Welcome to Lotus Lagoon Hotel.  Our hotel blends luxury with tranquility, offering guests an unparalleled experience of relaxation and rejuvenation. Founded in 2005, Lotus Lagoon Hotel has been a beacon of hospitality, providing top-notch services and amenities to travelers from around the world.</h3></p>
            
            <div>
                <h2><u>History of the Hotel</u></h2>
                <p>Lotus Lagoon Hotel was established in 2005 with a vision to create a luxurious retreat that harmonizes with nature. Over the years, we have grown and evolved, always prioritizing guest satisfaction and sustainable practices.</p>
                
                <h2><u>Mission and Vision</u></h2>
                <p><strong>Mission:</strong> To provide our guests with an exceptional experience through unparalleled service, luxurious accommodations, and a commitment to sustainability.</p>
                <p><strong>Vision:</strong> To be recognized as a leading luxury hotel that offers a unique blend of natural beauty and modern comforts, creating unforgettable memories for every guest.</p>
                
                 <h2>Information About the Management Team</h2>
                <div class="management-team">
                    <h2>Meet Our Management Team</h2>
                    <div class="team-grid">
                        <?php
                        // Array of team members with their details
                        $team = [
                            [
                                "name" => "Dinash Tharanga",
                                "title" => "General Manager",
                                "image" => "https://sailors3bucket1.s3.ap-southeast-1.amazonaws.com/uploads/all/IC32YuTohLfS8kI29jeCX4OErksfp2YFpNKvvxHN.jpg"
                            ],
                            [
                                "name" => "Nimali Silva",
                                "title" => "Housekeeping Manager",
                                "image" => "https://lmd.lk/wp-content/uploads/2017/07/bf_pc_Jul17_250x.jpg"
                            ],
                            [
                                "name" => "Dinithi Perera",
                                "title" => "Food and Beverage Manager",
                                "image" => "https://nilsonline.lk/image/cache/catalog/nils/product/254000209/130-612x875.jpg"
                            ],
                            [
                                "name" => "Lalith Wirakkodi",
                                "title" => "Executive Chef",
                                "image" => "https://asianmirror.lk/media/k2/items/cache/ba94190f8360fb011f5bfc235fcf79fe_XL.webp"
                            ],
                            [
                                "name" => "Udana Samarathunga",
                                "title" => "Human Resources Manager",
                                "image" => "https://www.asiaawards.org/public/uploads/news-banner-432.jpg"
                            ],
                            [
                                "name" => "Jagath Dissanayaka",
                                "title" => "Finance Manager",
                                "image" => "https://himaco.lk/wp-content/uploads/2017/02/mohan-headshot.jpg"
                            ],
                            [
                                "name" => "Lakshan Thiwanka",
                                "title" => "IT Manager",
                                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSa9bkYY1qr4uf8GoEQmIOM_Mr05seeU_qE-_ASYauJiH2qT0hC3cMtIN7kQOcvttQoj_Q&usqp=CAU"
                            ]
                        ];

                        // Loop through team members and output their details
                        foreach ($team as $member) {
                            echo "
                            <div class='team-member'>
                                <img src='{$member['image']}' alt='{$member['title']}'>
                                <div>
                                    <p><h2><u>{$member['title']}</u></h2></p>
                                    <h3>{$member['name']}</h3>
                                </div>
                            </div>";
                        }
                        ?>
                    </div>
                </div>
                <h2>Unique Selling Points of the Hotel</h2>
                <ul>
                    <?php
                    // Array of unique selling points
                    $usps = [
                        "Located in the heart of Paradise City, offering breathtaking views and easy access to local attractions.",
                        "Award-winning spa and wellness center providing a range of treatments using natural and organic products.",
                        "Luxurious rooms and suites designed with a blend of modern elegance and traditional charm.",
                        "Gourmet dining options featuring local and international cuisines, curated by renowned chefs.",
                        "Commitment to sustainability with eco-friendly practices and community involvement initiatives."
                    ];

                    // Loop through USPs and output them
                    foreach ($usps as $usp) {
                        echo "<li>$usp</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>

        <div class="section facilities">
            <h2>Facilities & Services</h2>
            <div class="facility-grid">
              
                <div class="facility-item">
                    <img src="https://q-xx.bstatic.com/xdata/images/hotel/max1000/37749012.jpg?k=6d65eb34884179cae7df52ec8b3522d09813541981c1a54d01a1d276b4f87c3f" alt="Swimming Pool">
                    <div>
                        <h2>Swimming Pool</h2>
                        <p>Dive into our crystal-clear swimming pool, surrounded by lush gardens and comfortable lounge chairs. Whether you're looking to take a refreshing dip or relax by the water, our pool area is the perfect spot.</p>
                    </div>
                </div>
              
                <div class="facility-item">
                    <img src="https://www.carlton.co.il/wp-content/uploads/2023/08/Carlton_TLV-Indoor-Jacuzzi_Aya-Ben-Ezri.webp" alt="Spa">
                    <div>
                        <h2>Spa</h2>
                        <p>Indulge in a range of therapeutic treatments at our luxurious spa. From massages to facials, our experienced therapists use natural products to help you relax and rejuvenate.</p>
                    </div>
                </div>
                
                <div class="facility-item">
                    <img src="https://www.omnihotels.com/-/media/images/hotels/daldtn/activities/daldtn-omni-dallas-hotel-fitness-1.jpg?h=660&iar=0&w=1170" alt="Fitness Center">
                    <div>
                        <h2>Fitness Center</h2>
                        <p>Stay fit during your stay with our state-of-the-art fitness center. Equipped with the latest exercise machines and free weights, our gym caters to all your workout needs.</p>
                    </div>
                </div>
				 <div class="facility-item">
                    <img src="https://media.timeout.com/images/105696683/750/422/image.jpg" alt="Kids' Play Area">
                    <div>
                        <h2>Kids' Play Area</h2>
                        <p>The hotel's kids' play area is designed to provide a safe and fun environment for children to explore, play, and interact. It includes Indoor Activities,Outdoor Play Structures.</p>
                    </div>
                </div>
				 <div class="facility-item">
                    <img src="https://peridotgrandhotel.com/wp-content/uploads/2022/08/IMG_1677-2000.jpg" alt="Conference and Meeting Rooms">
                    <div>
                        <h2>Conference and Meeting Rooms</h2>
                        <p>State-of-the-art conference and meeting rooms equipped with the latest technology for business events and gatherings.</p>
                    </div>
                </div>
                
                <div class="facility-item">
                    <img src="https://deercreekflorida.com/wp-content/uploads/2022/11/Untitled-design-50-1080x628.png" alt="Golf play area">
                    <div>
                        <h2>Golf play area</h2>
                        <p>The hotel's golf course is a meticulously maintained 18-hole championship course designed to cater to both casual players and avid golfers alike. Nestled amidst scenic surroundings.</p>
                    </div>
                </div>
            </div>
        </div>
    
</body>

    <script>
        // JavaScript to handle slider functionality
        let slideIndex = 0;
        showSlides(slideIndex);

        function changeSlide(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            const slides = document.getElementsByClassName('slides')[0].getElementsByTagName('img');
            if (n >= slides.length) slideIndex = 0;
            if (n < 0) slideIndex = slides.length - 1;
            for (let i = 0; i < slides.length; i++) {
                slides[i].classList.remove('active');
            }
            slides[slideIndex].classList.add('active');
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
