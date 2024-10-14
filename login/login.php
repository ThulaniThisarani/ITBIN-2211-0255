<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">
    <title>Login & Registration</title>
</head>
<body>
 <div class="wrapper">
    <nav class="nav">
        
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="" class="link active">Home</a></li>
                <li><a href="http://localhost/LotusLagoon/food/index.php" class="link">Food</a></li>
                <li><a href="http://localhost/LotusLagoon/room/slide.php" class="link">Room</a></li>
                <li><a href="#" class="link">Wedding</a></li>
                <li><a href="http://localhost/LotusLagoon/bar/bar.php" class="link">Bar</a></li>
                <li><a href="http://localhost/LotusLagoon/about/abo.php" class="link">About Us</a></li>
                <li><a href="http://localhost/LotusLagoon/feedback/feedback.php" class="link">Feedback</a></li>
                
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="showLogin()">Sign In</button>
            <button class="btn" id="registerBtn" onclick="showRegister()">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>

<!----------------------------- Form box ----------------------------------->    
    <div class="form-box" id="formBox">
        

        <div class="login-container">
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="showRegister()">Sign Up</a></span>
                <header>Login</header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" id="loginUsername" placeholder="Username or Email">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" id="loginPassword" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="button" class="submit" value="Sign In" onclick="validateLogin()">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </div>

        <!------------------- registration form -------------------------->
        <div class="register-container">
            <div class="top">
                <span>Have an account? <a href="#" onclick="showLogin()">Login</a></span>
                <header>Sign Up</header>
            </div>
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" id="firstname" placeholder="Firstname">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" id="lastname" placeholder="Lastname">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" id="email" placeholder="Email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" id="password" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="button" class="submit" value="Register" onclick="validateRegister()">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Terms & conditions</a></label>
                </div>
            </div>
        </div>
    </div>
</div>   


<script>
   
   function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }
 

function showLogin() {
            document.getElementById('formBox').classList.remove('show-register');
        }

        function showRegister() {
            document.getElementById('formBox').classList.add('show-register');
        }

        function validateLogin() {
            const username = document.getElementById('loginUsername').value;
            const password = document.getElementById('loginPassword').value;

            if (username === "" || password === "") {
                alert("Please fill out all fields.");
            } else {
                alert("Login successful!");
                window.location.href = 'http://localhost/LotusLagoon/home/home.php'; 
            }
        }

        function validateRegister() {
            const firstname = document.getElementById('firstname').value;
            const lastname = document.getElementById('lastname').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (firstname === "" || lastname === "" || email === "" || password === "") {
                alert("Please fill out all fields.");
            } else if (!validateEmail(email)) {
                alert("Please enter a valid email address.");
            } else {
                alert("Registration successful!");
            }
        }

        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

</script>

</body>
</html>