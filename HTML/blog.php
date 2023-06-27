<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CWD -- Portfolio</title>
    <link rel="stylesheet" href="http://localhost/cwdportfolio/CSS/style.css">
    <link rel="stylesheet" href="http://localhost/cwdportfolio/CSS/media-quarys.css">
    <link rel="stylesheet" href="http://localhost/cwdportfolio/CSS/blog.css">
    <script src="http://localhost/cwdportfolio/JS/index.js"></script>
    <!-- <link rel="shortcut icon" href="/IMG/experince.jpg" type="image/x-icon"> -->
</head>


<body>
    <header class="blog-page-header">
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
        <div class="blog-header">
            <div class="blog-main-heading">
                <H2>
                    WRITE , READ & EXPLOR THE WORLD OF BLOGGING
                </H2>
            </div>
            <form method="GET" action="blog.php" class="blog-search-bar">
                <input type="search" name="query" id="blog-search" placeholder="Search for your Answer....!!">
                <button id="blog-search-btn">Search...</button>
</form>
        </div>
    </header>
    <main class="container">
        <h3 id="error-heading" style="text-align: center;font-size: 3rem;color: #fc6060;display: none;">Post Not Found
        </h3>
        <div id="blog-postsc" class="blog-postsc">
        <?php
        require 'db_connect.php';

            if (isset($_GET['query'])) {
                $searchQuery = $_GET['query'];
                $query = "SELECT * FROM cwdblogposts WHERE title LIKE '%$searchQuery%' OR descrition LIKE '%$searchQuery%'";
                $result = $connection->query($query);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                    $src = $row['src'];
                    $id = $row['id'];
                    $title = $row['title'];
                    $descrition = $row['descrition'];
                    $date = $row['date'];
                    
                    echo " 
                    <div id='posts' class='posts'>
                    <a id='blog-href' href='http://localhost/cwdportfolio/HTML/single-post.php?id=$id'>
                    <div class='blog-img'>
                    <img src='$src' alt='codewithgour'>
                    </div>
                    <div class='blog-text'>
                    <h3>$title</h3>
                    <p>$descrition</p>
                    <div class='post-date-blog'>
                    <span>Posted on $date</span>
                    <span>Posted by -- Govind-Gour</span>
                    </div>
                    </div>
                    </a>
                    </div>
                    ";
                } 
                  } 
                else {
                    echo "<h2 style='text-align: center;font-size: 3rem;color:#fc6060;'>Post Not Found</h2>";
                }
                }else{
                    $query = "SELECT * FROM cwdblogposts";
                    $result = $connection->query($query);
            
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        $src = $row['src'];
                        $id = $row['id'];
                        $title = $row['title'];
                        $descrition = $row['descrition'];
                        $date = $row['date'];
                        
                        echo " 
                        <div id='posts' class='posts'>
                        <a id='blog-href' href='http://localhost/cwdportfolio/HTML/single-post.php?id=$id'>
                        <div class='blog-img'>
                        <img src='$src' alt='codewithgour'>
                        </div>
                        <div class='blog-text'>
                        <h3>$title</h3>
                        <p>$descrition</p>
                        <div class='post-date-blog'>
                        <span>Posted on $date</span>
                        <span>Posted by -- Govind-Gour</span>
                        </div>
                        </div>
                        </a>
                        </div>
                        ";
                      }
                    } 
                }
            
                
  $connection->close();
?>

        </div>
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
                        <li>Home</li>
                    </a>
                    <a href="http://localhost/cwdportfolio/HTML/about.php">
                        <li>About-me</li>
                    </a>
                    <a href="http://localhost/cwdportfolio/HTML/blog.php">
                        <li style="color: rgb(156, 152, 152);text-decoration: line-through;"> Blog</li>
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
        // showblogposts(blogPosts);
        // searchpost();
    </script>
</body>

</html>