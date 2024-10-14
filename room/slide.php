<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Room</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="slide.css">
</head>
<body>
	
  <header>
    <nav>
      <ul>
        <li><a href="http://localhost/LotusLagoon/home/home.php">Home</a></li>
        <li><a href="http://localhost/LotusLagoon/food/index.php">Food</a></li>
        <li><a href="#">Room</a></li>
        <li><a href="#">Wedding/Party</a></li>
        <li><a href="#">Bar</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Feedback</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <br></br>
    <br></br>
    <h1 align="center">Our Rooms</h1>
    <p>Discover our stylish and comfortable rooms tailored for every traveler. Book now for a memorable stay with modern amenities and personalized service.</p>
    
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
          <a href="slide.php">
            <i class='bx bx-hotel'></i>
            <span class="links_name">Room</span>
          </a>
          <span class="tooltip">Room</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bxs-balloon'></i>
            <span class="links_name">Wedding/Party</span>
          </a>
          <span class="tooltip">Wedding/Party</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-wine'></i>
            <span class="links_name">High tea/Bar</span>
          </a>
          <span class="tooltip">High tea/Bar</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bxs-user-pin'></i>
            <span class="links_name">About Us</span>
          </a>
          <span class="tooltip">About Us</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-comment-detail'></i>
            <span class="links_name">Feedback</span>
          </a>
          <span class="tooltip">Feedback</span>
        </li>
        <li class="profile">
          <i class='bx bx-log-out' id="log_out"></i>
        </li>
      </ul>
    </div>
    
    <div class="decorative-line"></div>
    <div class="container swiper">
      <div class="slider-wrapper">
        <div class="card-list swiper-wrapper">
          <div class="card-item swiper-slide">
            <img src="https://th.bing.com/th/id/OIP.Zt7fDCm_3h9TBhSXGWbvigAAAA?rs=1&pid=ImgDetMain" alt="Superior Room Image" class="room-image">
            <h2 class="room-name">Superior Rooms</h2>
            <p class="description">Enjoy expansive views, luxurious bedding, and personalized service that ensures a memorable experience.</p>
            <button class="BookNow-button" onclick="location.href='room.php'">Book Now</button>
          </div>
          <div class="card-item swiper-slide">
            <img src="https://media-cdn.tripadvisor.com/media/photo-s/0f/3f/f5/7a/deluxe-room-bay-view.jpg" alt="Deluxe Room Image" class="room-image">
            <h2 class="room-name">Deluxe Room</h2>
            <p class="description">Discover our Deluxe Rooms, meets luxurious comfort, best amenities and stylish decor for an unforgettable stay.</p>
            <button class="BookNow-button" onclick="location.href='room.php'">Book Now</button>
          </div>
          <div class="card-item swiper-slide">
            <img src="https://www.ambassador-hotels.com/images/images/taipei/rooms/executive%20floor/Ambassador-Hotel-Taipei-Executive-King-Room-Inc.jpg" alt="Executive Room Image" class="room-image">
            <h2 class="room-name">Executive Room</h2>
            <p class="description">Our Executive Rooms provide sophisticated comfort and essential amenities, perfect for business travelers.</p>
            <button class="BookNow-button" onclick="location.href='room.php'">Book Now</button>
          </div>
          <div class="card-item swiper-slide">
            <img src="https://th.bing.com/th/id/R.945e552b58c25f526ad089bc493d4516?rik=a%2fkc7xY2IsDveQ&pid=ImgRaw&r=0" alt="Family Room Image" class="room-image">
            <h2 class="room-name">Family Room</h2>
            <p class="description">Enjoy our best Family Rooms designed with extra beds and child-friendly amenities, ideal for family vacations.</p>
            <button class="BookNow-button" onclick="location.href='room.php'">Book Now</button>
          </div>
          <div class="card-item swiper-slide">
            <img src="https://th.bing.com/th/id/R.10790e90e41c325a167eb776a835a7f7?rik=p1Uz0DxRjA97Bg&pid=ImgRaw&r=0" alt="Suite Image" class="room-image">
            <h2 class="room-name">Suite</h2>
            <p class="description">Indulge in our Suites, offering a blend of luxury and space with separate living areas and exclusive services.</p>
            <button class="BookNow-button" onclick="location.href='room.php'">Book Now</button>
          </div>
          <div class="card-item swiper-slide">
            <img src="https://th.bing.com/th/id/OIP.000otHTqyYljPtfqOgw1MAHaE7?w=292&h=194&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Presidential Suite Image" class="room-image">
            <h2 class="room-name">Presidential Suite</h2>
            <p class="description">Experience unparalleled luxury in our Presidential Suites, featuring multiple bedrooms, a dining area, and the best service.</p>
            <button class="BookNow-button" onclick="location.href='room.php'">Book Now</button>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-slide-button swiper-button-prev"></div>
        <div class="swiper-slide-button swiper-button-next"></div>
      </div>
    </div>
    <footer>
      <div class="footer-content">
        <p>&copy; 2024 Lotus Lagoon Resort. All rights reserved.</p>
      </div>
    </footer>
  
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script> 
    const swiper = new Swiper('.slider-wrapper', {
      loop: true,
      grabCursor: true,
      spaceBetween: 30,

      // Pagination bullets
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
      },

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      // Responsive breakpoints
      breakpoints: {
        0: {
          slidesPerView: 1
        },
        768: {
          slidesPerView: 2
        },
        1024: {
          slidesPerView: 3
        }
      }
    });

    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", ()=>{
      sidebar.classList.toggle("open");
      menuBtnChange();//calling the function(optional)
    });

    searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search icon
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
      if(sidebar.classList.contains("open")){
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the icons class
      }else {
        closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the icons class
      }
    }
    </script>
  </body>
</html>
