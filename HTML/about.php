<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CWD -- About page</title>
    <link rel="stylesheet" href="http://localhost/cwdportfolio/CSS/style.css">
    <link rel="stylesheet" href="http://localhost/cwdportfolio/CSS/about.css"><link rel="stylesheet" href="http://localhost/cwdportfolio/CSS/contact.css">
    <link rel="stylesheet" href="http://localhost/cwdportfolio/CSS/media-quarys.css">
    <script src="http://localhost/cwdportfolio/JS/index.js" defer=""></script>
    <!-- <link rel="shortcut icon" href="/IMG/experince.jpg" type="image/x-icon"> -->
</head>

<body>
    <div class="about-page">

        <nav id="navbar">
            <div class="logo">
                <img class="main-logo" src="http://localhost/cwdportfolio/IMG/Untitled.png" alt="Ungraduate-Coder">
                <!-- <h2>Ungraduate Coder</h2> -->
            </div>
            <img class="ham-nav" src="http://localhost/cwdportfolio/IMG/ham-nav.png" alt="hamburger" width="40px" onclick="resnav()">
            <ul id="icon-nav" class="nav-items">
                <a href="http://localhost/cwdportfolio/index.php">
                    <li class="liclas">Home</li>
                </a>
                <a href="http://localhost/cwdportfolio/HTML/about.php">
                    <li class="liclas" style="color: rgb(156, 152, 152);text-decoration: line-through;">About-me</li>
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
        <section>
            <!-- <h2 class="about-page-heading">About me</h2> -->
            <div class="about-page-content">
                <img src="http://localhost/cwdportfolio/IMG/m2.png" alt="about-content-main-image">
                <div class="about-page-text">
                    <p>Hello, my name is</p>
                    <h3>Govind-Gour</h3>
                    <p>Hi, I'm Govind-Gour, a passionate and experienced web
                        developer. With 2 years of hands-on experience in the field, I have helped numerous businesses
                        and
                        individuals bring their online presence to life. My expertise lies in designing and developing
                        responsive, user-friendly websites using the latest
                        technologies and best practices. I am well-versed in HTML, CSS, JavaScript, PHP, SQL, Search
                        Engine
                        Optimization and various frameworks
                        such as React and Wordpress like CMS's. I have a keen eye for detail, and I strive to create
                        visually appealing websites that not only look great but also provide a seamless browsing
                        experience.

                        As a freelancer, I believe in building strong and collaborative relationships with my clients. I
                        take the time to understand their unique requirements and goals, ensuring that I deliver
                        tailored solutions that meet their needs. I am a good communicator and believe in keeping my
                        clients updated throughout the project lifecycle.

                        I take pride in staying up-to-date with the latest industry trends and technologies, allowing me
                        to deliver modern, cutting-edge websites that stand out in today's competitive online landscape.
                        I am also experienced in optimizing websites for search engines, improving their visibility and
                        driving organic traffic.

                        Whether you need a simple portfolio website, an e-commerce platform, blog Websites or a custom
                        web
                        application, I am here to turn your vision into reality. I am committed to delivering
                        high-quality work on time and within budget.

                        If you're looking for a skilled and reliable web developer who is passionate about creating
                        engaging online experiences, feel free to get in touch. I would love to discuss your project and
                        how we can collaborate to achieve your goals.</p>
                    <a href="http://localhost/cwdportfolio/HTML/contact.php">
                        <button class="about-content-btn">Contact-me</button>
                    </a>
                </div>
            </div>
        </section>
    </div>
    
    <section class="skills-section">
        <h2 class="skills-heading">Skills - Chart </h2>
        <div class="skills">
            <div class="skills-bar">
                <div class="skill-progress">
                    <div class="skill-progress-width HTML">
                        HTML -- >
                    </div>
                </div>
                <div class="skill-progress">
                    <div class="skill-progress-width CSS">
                        CSS -- >
                    </div>
                </div>
                <div class="skill-progress">
                    <div class="skill-progress-width JavaScript">
                        JS -- > JavaScript
                    </div>
                </div>
                <div class="skill-progress">
                    <div class="skill-progress-width PHP">
                        PHP -- >
                    </div>
                </div>
                <div class="skill-progress">
                    <div class="skill-progress-width MYSQL">
                        MYSQL -- >
                    </div>
                </div>
            </div>
            <div class="skills-bar">
                <div class="skill-progress">
                    <div class="skill-progress-width SEO">
                        SEO -- > 
                    </div>
                </div>
                <div class="skill-progress">
                    <div class="skill-progress-width Bootstrap">
                        Bootstrap, Tailwind -- >
                    </div>
                </div>
                <div class="skill-progress">
                    <div class="skill-progress-width Wordpress">
                        Wordpress -- >
                    </div>
                </div>
                <div class="skill-progress">
                    <div class="skill-progress-width Designing">
                        Designing -- >
                    </div>
                </div>
                <div class="skill-progress">
                    <div class="skill-progress-width Content-Writing">
                        Content-Writing -- >
                    </div>
                </div>
            </div>
        </div>
        <hr>
    <div class="contact-main-container">
        <h2 class="portfolio-contact">contact me</h2>
        <div class="contact-container">
            <!-- <iframe class="form"
                src="https://docs.google.com/forms/d/e/1FAIpQLSdMkpAkaThLL_rcP5vR9Gg7fhdQM3o0GI46x95Pxugot4btNg/viewform?embedded=true"
                width="840" height="700" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe> -->
                <form action="http://localhost/cwdportfolio/mail.php" method="post" class="contact-content-form">
                <div class="content-items contact-content-items">
                    <label for="text">FullName</label>
                    <input type="text" name="fullname" id="fullname" placeholder="enter your fullname">
                </div>
                <div class="content-items contact-content-items">
                    <label for="text">Email</label>
                    <input type="email" name="email" id="email" placeholder="enter your email">
                </div>
                <div class="content-items contact-content-items">
                    <label for="text">Phone</label>
                    <input type="tel" name="phone" id="phone" placeholder="enter your phone">
                </div>
                <div class="content-items contact-content-items">
                    <label for="text">What Service Do You Need?</label>
                    <input class="extra-height" type="text" name="massage1" id="massage1" placeholder="enter your answer here">
                </div>
                <div class="content-items  contact-content-items">
                    <label for="text">Do you have the budget of spending 10K-50K for your website requirement?</label>
                    <input class="extra-height" type="text" name="massage2" id="massage2" placeholder="enter your answer here">
                </div>
                <div class=" contact-content-items">
                    <button type="submit">Submit</button>
                </div>
            </form>
            <div class="contact-content">
                <h4>Socialize with Social</h4>
                <div class="f-contact-box">
                    <a href=""><img src="" alt="Facebook.com"></a>
                    <a href=""><img src="" alt="google.com"></a>
                    <a href=""><img src="" alt="twitter.com"></a>
                    <a href=""><img src="" alt="instagram.com"></a>
                    <a href=""><img src="" alt="Linkedin.com"></a>
                </div>
            </div>
        </div>
    </div>
    </section>




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
                        <li>Home</li>
                    </a>
                    <a href="http://localhost/cwdportfolio/HTML/about.php">
                        <li style="color: rgb(156, 152, 152);text-decoration: line-through;">About-me</li>
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
</body>

</html>