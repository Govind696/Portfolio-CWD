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
    <link rel="stylesheet" href="http://localhost/cwdportfolio/CSS/single-post.css">
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
                <li class="liclas">Home</li>
            </a>
            <a href="http://localhost/cwdportfolio/HTML/about.php">
                <li class="liclas">About-me</li>
            </a>
            <a href="http://localhost/cwdportfolio/HTML/blog.php">
                <li class="liclas" style="color: rgb(156, 152, 152);text-decoration: line-through;">Blog</li>
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
    <div class="backtohome-btn">
        <a href="http://localhost/cwdportfolio/index.php">Back to Home</a>
    </div>
    <article id="single-post-page" class="single-post-page">
        <?php
        require 'db_connect.php';
// single-blog.php
// Retrieve the blog post ID from the URL parameter
$postId = $_GET['id'];

// Query the database to fetch the specific blog post data
$query = "SELECT * FROM cwdblogposts WHERE id = $postId";
$result = $connection->query($query);
// echo $result;
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $src = $row['src'];
    $id = $row['id'];
    $title = $row['title'];
    $descrition = $row['descrition'];
    $date = $row['date'];

    // Display the blog post on the single blog page
    echo  " 
    <h2>$title</h2>
    <div class='date-author'>
        <span class='author-name'>Posted by -- Govind-Gour</span><span class='blog-date'>Published on $date</span>
    </div>
    <div class='single-page-img'>
        <img src='$src' alt=''>
    </div>
    <div class='single-page-content'>
        <p>$descrition</p>
    </div>
    <div class='single-page-share'>
        <h4>Socialize with Social</h4>
        <div class='single-page-icons'>
            <a href=''><img src='' alt='Facebook.com'></a>
            <a href=''><img src='' alt='google.com'></a>
            <a href=''><img src='' alt='twitter.com'></a>
            <a href=''><img src='' alt='instagram.com'></a>
            <a href=''><img src='' alt='Linkedin.com'></a>
        </div>
    </div>
    ";
} else {
    echo "<h2 style='text-align: center;font-size: 3rem;color:#fc6060;'>Post Not Found</h2>";
}

?>
    </article>

    <hr>

    <h2 class="h2-heading">Recent Blog Posts</h2>
    <section id="recent-blog" class="recent-blog">
    <?php
require 'db_connect.php';

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
    <Footer>
        <img src='' alt="Ungraduate-Coder" class="footer-logo">
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
                        <li>About-me</li>
                    </a>
                    <a href="http://localhost/cwdportfolio/HTML/blog.php">
                        <li style="color: rgb(156, 152, 152);text-decoration: line-through;">Blog</li>
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
                    <a href=''><img src='' alt="Facebook.com"></a>
                    <a href=''><img src='' alt="google.com"></a>
                    <a href=''><img src='' alt="twitter.com"></a>
                    <a href=''><img src='' alt="instagram.com"></a>
                    <a href=''><img src='' alt="Linkedin.com"></a>
                </div>
            </div>
        </div>
        <p class="footer-copyright">Copyright &copy; www.codewithgour.com | All rights Reserved</p>
    </Footer>
    <script>
        // singleblogpost();
        // showrecentblogposts()
    </script>
</body>

</html>