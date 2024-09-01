<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize it
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert data into the database
    $sql = "INSERT INTO submissions (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message sent successfully!')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portfolio Website-Parth</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style1.css">
 <style> </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <script src="https://kit.fontawesome.com/31149d48b0.js" crossorigin="anonymous"></script>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark navbarScroll">
        <div class="container">
            <style>
        .navbar-nav .nav-link {
            color: black !important;
        }
    </style
            <a class="navbar-brand" href="#">Parth</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
    <!-- main banner -->
    <section class="bgimage" id="home">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hero-text">
                <h2 class="hero_title">Hi, it's me Parth Naik</h2>
                <p class="hero_desc">I am a professional freelancer in Navi-mumbai </p>
            </div>
            </div>
        </div>
    </section>

    <!-- about section-->
    <section id="about">
        <div class="container mt-4 pt-4">
            <h1 class="text-center">About Me</h1>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <img src="images/about.jpeg" class= "imageAboutPage" alt="">
                </div>

                <div class="col-lg-8">
                    <p> Hello! I'm Parth Naik, a dedicated and enthusiastic student currently pursuing a degree in Information Technology  with a strong interest in web development. I have a passion for creating dynamic and user-friendly websites and applications.
                        
                    </p>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <ul>
                                <li>Name: Parth Naik</li>
                                <li>Age: 20</li>
                                <li>Occupation: Web Developer</li>

                            </ul>
                        </div>
                        
                    <div class="row mt-3">
                        <p> Front-End Development: Proficient in HTML, CSS, and JavaScript.
                            Back-End Development: Knowledgeable in frameworks such as Node.js and Express.
                            Database Management: Experience with MySQL and MongoDB.
                            Version Control: Skilled in using Git and GitHub for collaborative projects.
                            Responsive Design: Ability to create websites that work seamlessly across various devices.
                        
                             <li>Achievements:</li>
                        <p>
                                Completed Multiple Projects:-I have developed several web applications as part of my coursework and personal projects, displaying my ability to transform ideas into functional websites.
                        <P>     Hackathon Participation: I have been in several hackathons where I worked with colleagues on coming up with innovative solutions within very tight time limits.
                        </P>
                        <p> Online Courses and Certifications:-I am consistently taking up online courses and certification in the field of web development and other related technologies to keep expanding my knowledge.
                              When I'm not coding or studying, I love researching the latest tech trends, tinkering with personal projects, and getting out for a hike or some other outdoor activity.
                        </p>
                        </p>   
                                
                         

                            
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <!-- services section-->
    <section id="services">
        <div class="container">
            <h1 class="text-center">Services</h1>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class="fas servicesIcon fa-clock"></i>
                            <h4 class="card-title mt-3">Website Development</h4>
                            <p class="card-text mt-3">
                            <li>Html/CSS</li>  <li>JavaScript</li>  <li>Animation</li> <li>WorldPress</li> <li>React</li>
                            </p>
                        </div>
                    </div>  
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-layer-group'></i>
                            <h4 class="card-title mt-3">Website Design</h4>
                            <p class="card-text mt-3">
                                <li>Landing Page</li>  <li>User Flow</li>  <li>Wireframing</li> <li>prototyping</li><li>Mobile App Design</li>
                            </p>
                        </div>
                    </div>  
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='far servicesIcon fa-check-circle'></i>
                            <h4 class="card-title mt-3">Website Deployment</h4>
                            <p class="card-text mt-3">
                                <li>Hosting</li>  <li>Domain Management</li>  <li>SSL certificates</li>  <li>Backup Solutions</li> <li>Monitoring and Alerts</li>
                            </p>
                        </div>
                    </div>  
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-search'></i>
                            <h4 class="card-title mt-3">SEO</h4>
                            <p class="card-text mt-3">
                                <li>`Keyword Research</li>  <li>On-page SEO</li>  <li>Off-page SEO</li>  <li>Content Marketing</li>  <li>-Analytics and Reporting </li>
                          </p>
                        </div>
                    </div>  
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-shield-alt'></i>
                            <h4 class="card-title mt-3">DevOps</h4>
                            <p class="card-text mt-3">
                                <li>Continuous Integration </li>  <li>Continuous Deployment </li>  <li>Infrastructure as Code </li>  <li>Monitoring and Logging</li>  <li>Automation</li>
                            </p>
                        </div>
                    </div>  
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-wrench'></i>
                            <h4 class="card-title mt-3">QA</h4>
                            <p class="card-text mt-3">
                                <li>Manual Testing</li> <li>Automated Testing</li> <li>Performance Testing</li> <li>Security Testing</li> <li></li>
                            </p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>

    <!-- portfolio section-->
    <section id="portfolio">
        <div class="container mt-3">
            <h1 class="text-center">Portfolio</h1>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="images/portfolioImage1.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">YouTube Clone</h4>
                            <p class="card-text"><li>User authentication and profile management</li>  <li>Video uploading and streaming</li>  <li>Commenting and rating system</li>     <li>Video recommendations and search functionality</li></p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/portfolioImage4.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Quiz App</h4>
                            <p class="card-text"><li>Leaderboards and performance tracking</li>  <li>User-generated content with the ability to create </li>  <li>Real-time scoring and feedback</li>     <li>Multiple quiz formats (multiple choice, true/false, etc.)</li></p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/portfolioImage3.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product Landing Page</h4>
                            <p class="card-text"><li>Responsive design and visually appealing layout</li> <li>Clear call-to-action buttons</li>  <li>Clear call-to-action buttons</li> <li>Testimonials and social proof</li> </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/portfolioImage4.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Messaging Service</h4>
                            <p class="card-text"><li>Real-time messaging with notifications</li> <li>Group chats and private conversations</li> <li>File sharing capabilities</li> <li>End-to-end encryption for security</li> </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/portfolioImage1.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Twitter Clone</h4>
                            <p class="card-text"><LI>User authentication and profile management</LI> <LI>Tweet creation, liking, retweeting, and commenting</LI> <LI>Hashtag and trending topic functionality</LI> <LI>Follow and follower system
                            </LI></p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/portfolioImage4.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Blog App</h4>
                            <p class="card-text"><li>Rich text editor for creating and editing posts</li> <li>User authentication and profile management</li> <li>Commenting and liking system</li> <li>Categories and tags for content organization</li></p>                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- contact section-->
    <section id="contact">
        <div class="container mt-3 contactContent">
            <h1 class="text-center">Contact Me</h1>
            
            
           <div class="row mt-4">
                <div class="col-lg-6">
                    <!-- to edit google map goto https://www.embed-map.com type your location, generate html code and copy the html  -->
                   <!-- <div style="max-width:100%;overflow:hidden;color:red;width:500px;height:500px;">
                        <div id="embedmap-canvas" style="height:100%; width:100%;max-width:100%;">
                            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.4398389823123!2d73.02312567438095!3d19.044389752965774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c3db00160053%3A0x95e9ca007676b993!2sDr.%20D%20Y%20Patil&#39;s%20Ramrao%20Adik%20Institute%20Of%20Technology!5e0!3m2!1sen!2sin!4v1722955729730!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                        <a class="googlemaps-html" href="https://www.embed-map.com" id="get-data-forembedmap">https://www.embed-map.com</a>
                        <style>#embedmap-canvas img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}
                        </style>
                    </div>
                </div> 

                <div class="col-lg-6">
                    
                    <form>
                        <form action="index.php" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" required>
        </div>

        <div class="form-group">
            <label for="message">Project Details</label>
            <textarea id="message" name="message" required></textarea>
        </div>

        <div class="form-group">
            <button type="submit">Contact Me</button>
        </div>
    </form>
                        
                    </form>

                </div>

            </div>
        </div>
    </section>
   
    <footer id="footer">
        <div class="container-fluid">
            
            <div class="social-icons mt-4">
                <a href="https://www.facebook.com/parth.naik.2324?mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/parthnaik_01?utm_source=qr&igsh=MzNlNGNkZWQ4Mg" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://x.com/parthnaik_07?s=21" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/in/parth-naik-92891a314?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.twitch.tv/" target="_blank"><i class="fab fa-twitch"></i></a>
            </div>
        </div>
    </footer>

   
    <script src="script/script.js"></script>
</body>

</html>
