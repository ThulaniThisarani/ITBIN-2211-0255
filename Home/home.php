<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>Hotel Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/home.css">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

</head>

<body>
  <header class="header" id="navigation-menu">
    <div class="container">
      <nav>
        <a href="" class="logo"> <img src="image/1.jpeg" > </a>

        <ul class="nav-menu">
          <li> <a href="http://localhost/LotusLagoon/home/home.php" class="nav-link">Home</a> </li>
          <li> <a href="http://localhost/LotusLagoon/food/index.php" class="nav-link">Food</a> </li>
          <li> <a href="http://localhost/LotusLagoon/about/abo.php" class="nav-link">About Us</a> </li>
          <li> <a href="http://localhost/LotusLagoon/room/slide.php" class="nav-link">Rooms</a> </li>
          <li> <a href="http://localhost/LotusLagoon/bar/bar.php" class="nav-link">Bar</a> </li>
          <li> <a href="http://localhost/LotusLagoon/wedding/wedding.php" class="nav-link">Wedding & Party</a> </li>
          <li> <a href="http://localhost/LotusLagoon/feedback/feedback.php" class="nav-link">Feedback</a> </li>
          <li> <a href="http://localhost/LotusLagoon/login/login.php" class="nav-link">Login</a> </li>
          
        </ul>

        <div class="mith">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
    </div>
  </header>
  <script>
    const hambuger = document.querySelector('.mith');
    const navMenu = document.querySelector('.nav-menu');

    hambuger.addEventListener("click", mobileMenu);

    function mobileMenu() {
      hambuger.classList.toggle("active");
      navMenu.classList.toggle("active");
    }

    const navLink = document.querySelectorAll('.nav-link');
    navLink.forEach((n) => n.addEventListener("click", closeMenu));

    function closeMenu() {
      hambuger.classList.remove("active");
      navMenu.classList.remove("active");
    }
  </script>

  <section class="home" id="home">
    <div class="head_container">
      <div class="box">
        <div class="text">
          <h1>Loutos Lagoon</h1>
          <p>At Lotus Lagoon, we prioritize your comfort and satisfaction. Our goal is to provide you with a relaxing and enjoyable stay. Experience exceptional service and a welcoming atmosphere, where every detail is designed to make your visit memorable. Whether you’re here for business or leisure, we strive to exceed your expectations. </p>
          <button>MORE INFO</button>
        </div>
      </div>
      <div class="image">
        <img src="image/home1.jpg" class="slide">
      </div>
      <div class="image_item">
        <img src="image/home1.jpg" alt="" class="slide active" onclick="img('image/home1.jpg')">
        <img src="image/home2.jpg" alt="" class="slide" onclick="img('image/home2.jpg')">
        <img src="image/home3.jpg" alt="" class="slide" onclick="img('image/home3.jpg')">
        <img src="image/home4.jpg" alt="" class="slide" onclick="img('image/home4.jpg')">
      </div>
    </div>
  </section>
  <script>
    function img(anything) {
      document.querySelector('.slide').src = anything;
    }

    function change(change) {
      const line = document.querySelector('.image');
      line.style.background = change;
    }
  </script>

  <section class="about top" id="about">
    <div class="container flex">
      <div class="left">
        <div class="img">
          <img src="image/a1.jpg" alt="" class="image1">
          <img src="image/a2.jpg" alt="" class="image2">
        </div>
      </div>
      <div class="right">
        <div class="heading">
          <h5>RAISING COMFOMRT TO THE HIGHEST LEVEL</h5>
          <h2>Welcome to Lotus Lagoon Hotel Resort</h2>
          <p>Welcome to our hotel, where comfort meets elegance. We are dedicated to providing you with an exceptional experience, ensuring that every moment spent with us is filled with relaxation and enjoyment. </p>
          <p>Indulge in our premium amenities, designed to cater to your every need, and let us take care of you. Whether you're here for business or leisure, our friendly staff is committed to making your stay memorable. Experience the perfect blend of luxury and hospitality, and allow us to be your home away from home.</p>
          <button class="btn1">READ MORE</button>
        </div>
      </div>
    </div>
  </section>
  <section class="wrapper top">
    <div class="container">
      <div class="text">
        <h2>Our Amenities</h2>
        <p>We believe that exceptional experiences begin with outstanding amenities. Our thoughtfully curated offerings are designed to enhance your stay, providing both comfort and convenience.  </p>

        <div class="content">
          <div class="box flex">
            <i class="fas fa-swimming-pool"></i>
            <span>Swimming pool</span>
          </div>
          <div class="box flex">
            <i class="fas fa-dumbbell"></i>
            <span>Gym & yogo</span>
          </div>
          <div class="box flex">
            <i class="fas fa-spa"></i>
            <span>Spa & massage</span>
          </div>
          <div class="box flex">
            <i class="fas fa-ship"></i>
            <span>Boat Tours</span>
          </div>
          <div class="box flex">
            <i class="fas fa-swimmer"></i>
            <span>Surfing Lessons</span>
          </div>
          <div class="box flex">
            <i class="fas fa-microphone"></i>
            <span>Conference room</span>
          </div>
          <div class="box flex">
            <i class="fas fa-water"></i>
            <span>Diving & smorking</span>
          </div>
          <div class="box flex">
            <i class="fas fa-umbrella-beach"></i>
            <span>Private Beach</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="room top" id="room">
    <div class="container">
      <div class="heading_top flex1">
        <div class="heading">
          <h5>RAISING COMFORT TO THE HIGHEST LEVEL</h5>
          <h2>Rooms & Suites</h2>
        </div>
        <div class="button">
          <button class="btn1"> VIEW ALL </button>
        </div>
      </div>

      <div class="content grid">
        <div class="box">
          <div class="img">
            <img src="image/r1.jpg" alt="">
          </div>
          <div class="text">
            <h3>Superior Rooms</h3>
            <p> <span>Rs</span>60000 <span>/per night</span> </p>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="image/r2.jpg" alt="">
          </div>
          <div class="text">
            <h3>Family Rooms</h3>
            <p> <span>Rs</span>80000 <span>/per night</span> </p>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="image/r3.jpg" alt="">
          </div>
          <div class="text">
            <h3>Executive Rooms</h3>
            <p> <span>Rs</span>75000 <span>/per night</span> </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="wrapper wrapper2 top">
    <div class="container">
      <div class="text">
        <div class="heading">
          <h5>AT THE HEART OF COMMUNICATION</h5>
          <h2>People Say</h2>
        </div>

        <div class="para">
          <p>Our guests often rave about their experiences at Lotus Lagoon. They appreciate the warm hospitality and attentive service that makes them feel right at home. Many highlight the comfortable accommodations and thoughtfully curated amenities that enhance their stay.  </p>

          <div class="box flex">
            <div class="img">
              <img src="image/c.jpg" alt="">
            </div>
            <div class="name">
              <h5>Shiranthi</h5>
              <h5>Negombo</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="restaurant top" id="restaurant">
    <div class="container flex">
      <div class="left">
        <img src="image/re.jpg" alt="">
      </div>
      <div class="right">
        <div class="text">
          <h2>Our Restaurant</h2>
          <p> At our restaurant, we pride ourselves on providing an exceptional dining experience. Our dedicated team is committed to ensuring every guest enjoys a memorable meal. We take responsibility for delivering high-quality service and delicious dishes that cater to your culinary desires.</p>
        </div>
        <div class="accordionWrapper">
          <div class="accordionItem open">
            <h2 class="accordionIHeading">Italian Kitchen</h2>
            <div class="accordionItemContent">
              <p>Indulge in the rich flavors of our Italian kitchen, where tradition meets innovation. Our talented chefs create authentic dishes using fresh, high-quality ingredients, ensuring a delightful dining experience. Whether you’re enjoying classic pasta, wood-fired pizza, or delectable desserts, each bite reflects our passion for Italian cuisine.


              </p>
            </div>
          </div>
          <div class="accordionItem close">
            <h2 class="accordionIHeading">Mexican Kitchen</h2>
            <div class="accordionItemContent">
              <p>Discover the vibrant flavors of our Mexican kitchen, where authentic dishes are crafted with fresh ingredients. From zesty tacos to flavorful enchiladas, each bite celebrates bold spices and rich traditions. Join us for a festive dining experience filled with warmth and hospitality.
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <script>
    var accItem = document.getElementsByClassName('accordionItem');
    var accHD = document.getElementsByClassName('accordionIHeading');

    for (i = 0; i < accHD.length; i++) {
      accHD[i].addEventListener('click', toggleItem, false);
    }

    function toggleItem() {
      var itemClass = this.parentNode.className;
      for (var i = 0; i < accItem.length; i++) {
        accItem[i].className = 'accordionItem close';
      }
      if (itemClass == 'accordionItem close') {
        this.parentNode.className = 'accordionItem open';
      }
    }
  </script>



  <section class="gallary mtop " id="gallary">
    <div class="container">
      <div class="heading_top flex1">
        <div class="heading">
          <h5>WELCOME TO OUR PHOTO GALLERY</h5>
          <h2>Photo Gallery of Our Hotel</h2>
        </div>
        <div class="button">
          <button class="btn1">VIEW GALLERY</button>
        </div>
      </div>

      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="image/g1.jpg" alt="">
        </div>
        <div class="item">
          <img src="image/g2.jpg" alt="">
        </div>
        <div class="item">
          <img src="image/g3.jpg" alt="">
        </div>
        <div class="item">
          <img src="image/g4.jpg" alt="">
        </div>
        <div class="item">
          <img src="image/g5.jpg" alt="">
        </div>
        <div class="item">
          <img src="image/g6.jpg" alt="">
        </div>
        <div class="item">
          <img src="image/g7.jpg" alt="">
        </div>
        <div class="item">
          <img src="image/g8.jpg" alt="">
        </div>
      </div>

    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    })
  </script>



  <section class="map top">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6940781442913!2d79.8582954!3d6.927123400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259112f739d89%3A0x353284d829a3d901!2sColombo%20Lotus%20Tower%2C%20AC6%2C%20Colombo%2001000!5e0!3m2!1sen!2slk!4v1728456919231!5m2!1sen!2slk" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>


  <footer>
    <div class="container grid top">
      <div class="box">
        <img src="https://img.icons8.com/external-flatart-icons-flat-flatarticons/48/000000/external-hotel-hotel-services-and-city-elements-flatart-icons-flat-flatarticons-1.png" />
        <p> We gladly accept a variety of payment methods to ensure a convenient experience for our guests. This includes major credit cards, debit cards, and mobile payment options.</p>

        <p>Accepted payment methods</p>
        <div class="payment grid">
          <img src="https://img.icons8.com/color/48/000000/visa.png" />
          <img src="https://img.icons8.com/color/48/000000/mastercard.png" />
          <img src="https://img.icons8.com/color-glass/48/000000/paypal.png" />
          <img src="https://img.icons8.com/fluency/48/000000/amex.png" />
        </div>
      </div>

      <div class="box">
        <h3>Recent News</h3>

        <ul>
          <li>Our Secret Island Boat Tour Is Just for You</li>
          <li>Chill and Escape in Our Natural Shelters</li>
          <li>September in Lotus Lagoon Hotel</li>
          <li>Live Music Concerts at Lotus Lagoon</li>
        </ul>
      </div>

      <div class="box">
        <h3>For Customers</h3>
        <ul>
          <li>About Lotus Lagoon</li>
          <li>Customer Care/Help</li>
          <li>Corporate Accounts</li>
          <li>Financial Information</li>
          <li>Terms & Conditions</li>
        </ul>
      </div>

      <div class="box">
        <h3>Contact Us</h3>

        <ul>
          <li>Lotus Tower Colombo</li>
          <li><i class="far fa-envelope"></i>lotusLagoon@gmail.com </li>
          <li><i class="far fa-phone-alt"></i>0714567898 </li>
          <li><i class="far fa-phone-alt"></i>011456 7898 </li>
          <li><i class="far fa-comments"></i>24/ 7 Customer Services </li>
        </ul>
      </div>
    </div>
  </footer>
</body>

</html>