<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/cwdportfolio/CSS/contact.css">
    <link rel="stylesheet" href="http://localhost/cwdportfolio/CSS/style.css">
    <link rel="stylesheet" href="http://localhost/cwdportfolio/CSS/media-quarys.css">
    <script src="http://localhost/cwdportfolio/JS/index.js" defer=""></script>
    <!-- <link rel="shortcut icon" href="/IMG/experince.jpg" type="image/x-icon"> -->
    <title>CWD -- Contact page</title>
</head>

<body>
    <nav id="navbar">
        <div class="logo">
            <img class="main-logo" src="http://localhost/cwdportfolio/IMG/Untitled.png" alt="Ungraduate-Coder">
            <!-- <h2>Ungraduate Coder</h2> -->
        </div>
        <img class="ham-nav" src="http://localhost/cwdportfolio/IMG/ham-nav.png" alt="hamburger" width="40px" onclick="resnav()">
        <ul id="icon-nav" class="nav-items">
            <a href="http://localhost/cwdportfolio/index.php">
                <li  class="liclas" >Home</li>
            </a>
            <a href="http://localhost/cwdportfolio/HTML/about.php">
                <li  class="liclas">About-me</li>
            </a>
            <a href="http://localhost/cwdportfolio/HTML/blog.php">
                <li  class="liclas">Blog</li>
            </a>
            <a href="http://localhost/cwdportfolio/HTML/portfolio.php">
                <li  class="liclas">Portfolio</li>
            </a>
            <a href="http://localhost/cwdportfolio/HTML/contact.php">
                <li  class="liclas" style="color: rgb(156, 152, 152);text-decoration: line-through;">Contact-us</li>
            </a>
           <!-- <button class="nav-icon">
               <img class="ham-nav" src="/IMG/ham-nav.png" alt="hamburger" width="40px">
            </button> -->
        </ul>
    </nav>
    <div class="contact-main-container">
    
        <?php

require 'HTML/db_connect.php';;

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$massage1 = $_POST['massage1'];
$massage2 = $_POST['massage2'];

// Insert data into the database
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
} elseif (!preg_match('/^\d{10}$/', $phone)) {
    echo "Invalid phone number";
} else {
$sql = "INSERT INTO cwdcontactinfo (fullname, email, phone, massage1, massage2) VALUES ('$fullname', '$email', '$phone', '$massage1', '$massage2')";
if ($connection->query($sql) === true) {
    echo "<h2 class='contact-h2'>Your Data was inserted Successfully.....!!! </h2>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$connection->close();

// $to = "govindgour68@gmail.com.com";
// $subject = "CWD New Form Submission";
// $message = "Name: $fullname\nEmail: $email\nPhone: $phone\nMessage 1: $massage1\nMessage 2: $massage2";
// $headers = "From: $email";

// if (mail($to, $subject, $message, $headers)) {
//     echo "<h2 class='contact-h2'>Your Data was inserted in Email was Successfully.....!!! </h2>";
// } else {
//     echo "<h2 class='contact-h2'>Failed to send email.....!!! </h2>";
// }
?>


    </div>
    <Footer>
        <img src="" alt="Ungraduate-Coder" class="footer-logo">
        <div class="footer-content">
            <div class="footer-content-box">
                <h4>Contact us</h4>
                <div class="footer-inner-content-box">
                    <a href="tel:+917742276450">
                        <p>+9177422-76450</p>
                    </a>
                    <a href="mailto:govindgour68@gmail.com">
                        <p style="font-size: 1rem;">govindgour68@gmail.com</p>
                    </a>
                    <p class="address">41, AANAND NAGAR, PALI, PALI, RAJASTHAN</p>
                    <p class="address">PALI RJ 306401 , INDIA</p>
                </div>
            </div>
            <div class="footer-content-box">
                <h4>Nav-Menu</h4>
                <div class="footer-inner-content-box">

                    <a href="http://localhost/cwdportfolio/index.php">
                        <li >Home</li>
                    </a>
                    <a href="http://localhost/cwdportfolio/HTML/about.php">
                        <li>About-me</li>
                    </a>
                    <a href="http://localhost/cwdportfolio/HTML/blog.php">
                        <li>Blog</li>
                    </a>
                    <a href="http://localhost/cwdportfolio/HTML/portfolio.php">
                        <li>Portfolio</li>
                    </a>
                    <a href="http://localhost/cwdportfolio/HTML/contact.php">
                        <li style="color: rgb(156, 152, 152);text-decoration: line-through;">Contact-us</li>
                    </a>
                </div>
            </div>
            <div class="footer-content-box">
                <h4>Socialize with Social</h4>
                <div class="footer-inner-content-box">
                    <a href=""><img src="" alt="Facebook.com"></a>
                    <a href=""><img src="" alt="google.com"></a>
                    <a href=""><img src="" alt="twitter.com"></a>
                    <a href=""><img src="" alt="instagram.com"></a>
                    <a href=""><img src="" alt="Linkedin.com"></a>
                </div>
            </div>
        </div>
        <p class="footer-copyright">Copyright &copy; www.codewithgour.com | All rights Reserved</p>
    </Footer>
</body>

            </html>