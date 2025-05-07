<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <title>Apex Excellence School</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }
        .header-primary {
            background-color: #05284c;
            color: #fff;
            padding: 20px 20px 20px 40px; /* Add margin to the left */
            text-align: left;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-primary .header-content {
            display: flex;
            align-items: center;
        }

        .header-primary .school-logo {
            height: 45px;
            margin-right: 10px; /* Space between logo and heading */
            vertical-align: middle;
        }

        .header-primary h1 {
            font-family: 'Great Vibes', cursive;
            font-size: 1.8em;
            margin: 0;
            display: inline-block;
            vertical-align: middle;
            color: #fff;
        }
        .header-secondary {
            background-color: #1a446e;
            padding: 14px 0;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header-secondary nav {
            display: inline-block;
        }
        .header-secondary nav a {
            color: #ffffff;
            margin: 0 20px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1em;
        }
        .header-secondary nav a:hover {
            color: #d42727;
        }
        .header-secondary .apply-now {
            background-color: #cc0000;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .header-secondary .apply-now:hover {
            background-color: #f04b4b;
            color: #fff;
        }
        .hero-section {
            background: url('school.jpg') no-repeat center center/cover;
            height: 500px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }
        .hero-section .hero-content {
            background-color: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .hero-section .quote {
            font-size: 2em;
            font-style: italic;
            margin-bottom: 10px;
        }
        .hero-section .intro-text {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .about-section {
            padding: 30px 20px;
            background-color: #fff;
            text-align: center;
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
        }
        .about-section p {
            font-size: 1.1em;
            line-height: 1.6;
            color: #333;
            max-width: 900px;
            margin: 0 auto;
        }
        .photo-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
            background-color: #fff;
            gap: 10px;
        }
        .photo-box {
            position: relative;
            width: calc(50% - 10px);
            height: 350px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .photo-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
        .photo-box .photo-info {
            position: absolute;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            width: 100%;
            font-weight: bold;
            font-size: 1.3em;
            text-align: center;
            padding: 10px;
            box-sizing: border-box;
            border-radius: 0 0 10px 10px;
        }
        .main-content {
            padding: 50px 20px;
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }
        .main-content h2 {
            color: #004080;
            margin-bottom: 20px;
        }
        .main-content p {
            color: #333;
            line-height: 1.6;
            font-size: 1.1em;
        }
        .main-content img {
            width: 80%;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .see-more {
        display: block;
        margin: 5px auto 0; /* Centered and with top margin */
        padding: 20px 30px;
        color:#1a446e ;
        text-decoration: none;
        border-radius: 5px;
        /* font-weight: bold; */
        text-align: center;
       }

        .see-more:hover {
        color: #d42727;
        }

        .footer {
            background-color: #1a446e;
            color: #fff;
            padding: 40px 20px;
            position: relative;
            width: 100%;
            bottom: 0;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        }
        .footercontainer {
            max-width: 1000px;
            margin: 0 auto;
        }
        .footerrow {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .footer-col {
            flex: 1;
            padding: 15px;
        }
        .footer-col h4 {
            font-size: 1.1em;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        .footer-col ul {
            list-style: none;
            padding: 0;
        }
        .footer-col ul li {
            margin-bottom: 10px;
        }
        .footer-col ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1em;
        }
        .footer-col ul li a:hover {
            color: #d42727;
        }
        .footer-col .social-links {
            margin-top: 10px;
        }
        .footer-col .social-links a {
            color: #fff;
            margin-right: 10px;
            font-size: 1.1em;
            transition: color 0.3s;
        }
        .footer-col .social-links a:hover {
            color: #d42727;
        }
        .footer p {
            margin: 0;
            text-align: center;
        }
        @media (max-width: 600px) {
            .footerrow {
                flex-direction: column;
                align-items: center;
            }
            .footer-col {
                max-width: 100%;
                flex: 0 0 100%;
                text-align: center;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="header-primary">
        <img src="logo.png" alt="School Logo" class="school-logo">
        <h1>Apex Excellence School</h1>
    </div>
    <div class="header-secondary">
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="login.php">LMS</a>
            <a href="#">Results</a>
            <a href="#">Student Life</a>
            <a href="#">Careers</a>
            <a href="#">Contact Us</a>
            <a href="#" class="apply-now">Apply Now</a>
        </nav>
    </div>
    <div class="hero-section">
        <div class="hero-content">
            <p class="quote">"The future belongs to those who believe in the beauty of their dreams."</p>
            <p class="intro-text">Inspiring Excellence In Education</p>
        </div>
    </div>
    <div class="about-section">
        <p>At Apex Excellence School, we are dedicated to fostering a nurturing environment where students can excel academically, socially, and emotionally. Our commitment to excellence ensures that every student receives the personalized attention and resources they need to succeed in an ever-changing world.</p>
    </div>
    <div class="photo-section">
        <div class="photo-box">
            <img src="student.jpg" alt="Students">
            <div class="photo-info">Our enthusiastic students engaged in learning.</div>
        </div>
        <div class="photo-box">
            <img src="campus.jpg" alt="School Campus">
            <div class="photo-info">Our picturesque campus that fosters academic growth.</div>
        </div>
        <div class="photo-box">
            <img src="classroom.jpg" alt="Classroom">
            <div class="photo-info">State-of-the-art classrooms for interactive learning.</div>
        </div>
        <div class="photo-box">
            <img src="labs.webp" alt="Lab">
            <div class="photo-info">Modern laboratories equipped for innovative experiments.</div>
        </div>
    </div>
    <div class="main-content">
        <h2>Recent News</h2>
        <p>Discover the latest updates and events happening at our school. Stay informed and engaged with our vibrant school community.</p>
        <img src="news.jpg" alt="Science Experiment">
        <a href="#" class="see-more">See More</a>
    </div>
    <footer class="footer">
        <div class="footercontainer">
            <div class="footerrow">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Georgia</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Affiliate Program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Plan Your Trip</h4>
                    <ul>
                        <li><a href="#">Our Hotels</a></li>
                        <li><a href="#">Destinations</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <p>&copy; 2024 Apex Excellence School. All rights reserved.</p>
    </footer>
</body>
</html>

