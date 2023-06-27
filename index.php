<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CWD -- Portfolio</title>
    <link rel="stylesheet" href="http://localhost/cwdportfolio/CSS/style.css">
    <link rel="stylesheet" href="http://localhost/cwdportfolio/CSS/media-quarys.css">
    <script src="http://localhost/cwdportfolio/JS/index.js"></script>
    <!-- <link rel="shortcut icon" href="/IMG/experince.jpg" type="image/x-icon"> -->
</head>


<body>
    <header>
        <nav id="navbar">
            <div class="logo">
                <img class="main-logo" src="http://localhost/cwdportfolio/IMG/Untitled.png" alt="Ungraduate-Coder">
                <!-- <h2>Ungraduate Coder</h2> -->
            </div>
            <img class="ham-nav" src="http://localhost/cwdportfolio/IMG/ham-nav.png" alt="hamburger" width="40px" onclick="resnav()">
            <ul id="icon-nav" class="nav-items">
                <a href="http://localhost/cwdportfolio/index.php">
                    <li class="liclas" style="color: rgb(156, 152, 152);text-decoration: line-through;">Home</li>
                </a>
                <a href="http://localhost/cwdportfolio/HTML/about.php">
                    <li class="liclas">About-me</li>
                </a>
                <a href="http://localhost/cwdportfolio/HTML/blog.php">
                    <li class="liclas">Blog</li>
                </a>
                <a href="http://localhost/cwdportfolio/HTML/portfolio.php">
                    <li class="liclas">Portfolio</li>
                </a>
                <a href="http://localhost/cwdportfolio/HTML/contact.php">
                    <li class="liclas">Contact-us</li>
                </a>
                <!-- <button class="nav-icon">
                   <img class="ham-nav" src="/IMG/ham-nav.png" alt="hamburger" width="40px">
                </button> -->
            </ul>
        </nav>

        <section class="hero">
            <div class="hero-content">
                <span class="hero-content-text">Hello I,am</span>
                <h1>Ungraduate_<span id="heading"></span></h1>
                <p class="hero-content-text hero-content-text2">Hi, I'm Govind-Gour, a passionate and experienced web
                    developer. With 2 years of hands-on experience in the field, I have helped numerous businesses and
                    individuals bring their online presence to life. My expertise lies in designing and developing
                    responsive, user-friendly websites using the latest
                    technologies and best practices. I am well-versed in HTML, CSS, JavaScript, PHP, SQL and various
                    frameworks
                    such as React and Wordpress like CMS's.</p>
                <div class="hero-btns">
                    <a href="http://localhost/cwdportfolio/govind-resume.pdf" download>
                        <button class="btn">Download Resume</button>
                     </a>
                    <a href="http://localhost/cwdportfolio/HTML/portfolio.php">
                        <button class="btn">Portfolio</button>
                    </a>
                    <a href="http://localhost/cwdportfolio/HTML/contact.php">
                        <button class="btn">Hire-me</button>
                    </a>
                    <!-- <button class="btn">Portfolio</button> -->
                </div>
            </div>
            <!-- <img src="/IMG/.jpg" alt="" style="width: 30%;"> -->
        </section>

    </header>

    <main class="main-bac">
        <h2>Our Services</h2>
        <section class="services-box">
            <div class="services-card">
                <div class="services-img">
                    <img src="http://localhost/cwdportfolio/IMG/webdev.png" alt="">
                </div>
                <div class="services-card-text">
                    <h3>Web Development</h3>
                    <p>Need a website that doesn't look like it's from the 90s? Let me help you create a website
                        or redesign one that stands out from the competition.
                        As a freelance web developer...
                    </p>
                    <button class="services-card-btn">Check-it</button>
                </div>
            </div>
            <div class="services-card">
                <div class="services-img">
                    <img src="http://localhost/cwdportfolio/IMG/webdev.png" alt="">
                </div>
                <div class="services-card-text">
                    <h3>S.E.O.</h3>
                    <p>Is your website getting lost in the sea of search results? my S.E.O. services can help
                        improving your ranking and drive more traffic to your site.
                        As an SEO freelancer and other more services...
                    </p>
                    <button class="services-card-btn">Check-it</button>
                </div>
            </div>
            <div class="services-card">
                <div class="services-img">
                    <img src="http://localhost/cwdportfolio/IMG/webdev.png" alt="">
                </div>
                <div class="services-card-text">
                    <h3>Blog Posting</h3>
                    <p>Welcome to my blog! Dive into a world of captivating stories, insightful articles, and
                        practical tips. Explore a variety of topics, from lifestyle and personal development to travel
                        and technology...
                    </p>
                    <button class="services-card-btn">Check-it</button>
                </div>
            </div>
        </section>
        <hr>
        <h2>About me</h2>
        <section class="about-sec">
            <div class="about-content">
                <img src="http://localhost/cwdportfolio/IMG/m2.png" alt="">
                <div class="about-content-text">
                    <p class="about-content-text-p">Hello, my name is</p>
                    <h3>Govind-Gour</h3>
                    <p>A passionate and experienced web
                        developer. With 2 years of hands-on experience in the field, I have helped numerous businesses
                        and
                        individuals bring their online presence to life. My expertise lies in designing and developing
                        responsive, user-friendly websites using the latest
                        technologies and best practices. I am well-versed in HTML, CSS, JavaScript, PHP, SQL, Search
                        Engine
                        Optimization and various frameworks
                        such as React and Wordpress like CMS's. I have a keen eye for detail, and I strive to create
                        visually appealing websites that not only look great but also provide a seamless browsing
                        experience.</p>
                    <a href="http://localhost/cwdportfolio/HTML/about.php">
                        <button class="about-content-btn">Read-More</button>
                    </a>
                </div>
            </div>
        </section>
        <hr>
        <h2>Recent Blog Posts</h2>
        <section id="recent-blog" class=" recent-blog">
<?php
require 'HTML/db_connect.php';

$query = "SELECT * FROM cwdblogposts ORDER BY date DESC LIMIT 4";
$result = $connection->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $src = $row['src'];
        $id = $row['id'];
        $title = $row['title'];
        $descrition = $row['descrition'];
        $date = $row['date'];
        
        echo " 
        <div class=' recent-blog-posts'>
            <a href='http://localhost/cwdportfolio/HTML/single-post.php?id=$id'>
                <div class='recent-blog-img'>
                    <img src='$src' alt='codewithgour'>
                </div>
                <div class='recent-blog-text'>
                    <h3>$title</h3>
                    <p>$descrition</p>
                    <div class='recent-blog-date'>
                        <a href='http://localhost/cwdportfolio/HTML/single-post.php?id=$id' class='recent-blog-btn'>Read-More</a>
                        <span>Posted on $date</span>
                    </div>
                </div>
            </a>
    </div>
        ";
    }
} else {
    echo "<h2 style='text-align: center;font-size: 3rem;color:#fc6060;'>Post Not Found</h2>";
}


?>
        </section>
        <hr>
        <h2>Why Choose me</h2>
        <section class="why-me-box">
            <div class="why-me-card">
                <div class="why-me-img">
                    <img class="Choose-me-img" src="http://localhost/cwdportfolio/IMG/communication.png" alt="" width="100%;">
                </div>
                <div class="why-me-card-text">
                    <h3>3+ Years of experience</h3>
                    <p>With so much of experience in creating and redesigning websites for businesses of all sizes and
                        industries. I know how to make your website stand out from the crowd.</p>
                    <button class="why-me-card-btn">Check-it</button>
                </div>
            </div>
            <div class="why-me-card">
                <div class="why-me-img">
                    <img class="Choose-me-img" src="http://localhost/cwdportfolio/IMG/communication.png" alt="" width="100%;">
                </div>
                <div class="why-me-card-text">
                    <h3>Honest Communication</h3>
                    <p>I understand the importance of clear and transparent communication and make it a priority. giving
                        complete information, showing intent to be
                        understood, and being sincere. </p>
                    <button class="why-me-card-btn">Check-it</button>
                </div>
            </div>
            <div class="why-me-card">
                <div class="why-me-img">
                    <img class="Choose-me-img" src="http://localhost/cwdportfolio/IMG/communication.png" alt="" width="100%;">
                </div>
                <div class="why-me-card-text">
                    <h3>Result Oriented Approach</h3>
                    <p>From understanding your goals and using data-driven insights, to prioritizing user experience and
                        continuous improvement, I will help you achieve success with your website.</p>
                    <button class="why-me-card-btn">Check-it</button>
                </div>
            </div>

        </section>
    </main>

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
                        <li style="color: rgb(156, 152, 152);text-decoration: line-through;">Home</li>
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
                        <li>Contact-us</li>
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
    <script>

        const headings = [
            "Coder",
            "Developer",
            "Freelancer",
            "Blogger",
            "Designer",
            "SEO_Expert"
        ]

        const headingele = document.getElementById("heading");
        const headingele2 = document.getElementById("logo");
        // console.log(headingele)
        let headingindex = 0;
        let charindex = 0;

        function type() {
            if (headingindex < headings.length) {
                if (charindex < headings[headingindex].length) {
                    headingele.innerHTML += headings[headingindex].charAt(charindex);
                    charindex++;
                    setTimeout(type, 100);
                } else {
                    setTimeout(change, 1000);
                }
            } else {
                headingindex = 0;
                setTimeout(type, 1000);
            }
        }

        function change() {
            if (charindex >= 0) {
                const currentheading = headings[headingindex];
                headingele.innerHTML = currentheading.substring(0, charindex);
                charindex--;
                setTimeout(change, 50);
            } else {
                headingindex++;
                setTimeout(type, 500);
            }
        }
        type();
        // showrecentblogposts();
    </script>
</body>

</html>