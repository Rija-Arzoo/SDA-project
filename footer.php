<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Footer</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <style>
      body {
         display: flex;
         flex-direction: column;
         min-height: 100vh;
         margin: 0;
      }

      .content {
         flex: 1;
      }

      .footer {
         background-color: #1a446e;
         color: #fff;
         font-family: 'Roboto', sans-serif;
         padding: 20px;
         box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
         width: 100%;
         bottom: 0;
         left: 0;
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
</head>

<body>
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