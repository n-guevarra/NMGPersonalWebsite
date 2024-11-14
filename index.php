<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--primary meta tags -->
  <title>Nherlhin and Allana | BLOG</title>
  <meta name="title" content="Nherlhin and Allana | BLOG">
  <meta name="description" content="This is our personal blog">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./css/require.css">
  <link rel="stylesheet" href="./css/pages/contact.css">

  <style>
  .success {
  background: #72bf6a; 
  color: white; 
  font-size: 16px;
  padding: 10px; 
  margin-bottom: 20px;
  width: 95%; 
  border-radius: 5px; 
  text-align: center;
  } 

  .error {
  background: #f69697; 
  color: white; 
  font-size: 16px;
  padding: 10px; 
  margin-bottom: 20px;
  width: 95%; 
  border-radius: 5px; 
  text-align: center;
  } 
  </style>
</head>

<body>
<!-- HEADER -->
<header class="header" data-header>
    
    <div class="container">

     <div class="logo-cont">
       <a href="home.html" class="logo">
         <img src="./images/logo.svg" width="151" height="28" alt="Annie home">
       </a>
       </div>
     
     <div class="nav">
       <nav class="navbar" data-navbar>
         <ul class="navbar-list">
           <li class="navbar-item">
             <a href="home.html" class="label-lg navbar-link has-after">Home</a>
           </li>

           <li class="navbar-item">
             <a href="about-nherlhin.html" class="label-lg navbar-link has-after">About</a>
           </li>

           <li class="navbar-item bg">
             <a href="background-nherlhin.html" class="label-lg navbar-link has-after">Background</a>
           </li>
         
           <li class="navbar-item">
             <a href="skills-nherlhin.html" class="label-lg navbar-link has-after">Skills</a>
           </li>

           <li class="navbar-item">
              <a href="portfolio-nherlhin.html" class="label-lg navbar-link has-after">Portfolio</a>
            </li>
         </ul>
       </nav>
     </div>

     <div>
      <a href="index.php" class="btn btn-primary">Contact Me</a>

       <button class="nav-toggle-btn" aria-label="menu" data-nav-toggler>
         <img src="./images/nav-btn.png" alt="nav-btn" aria-hidden="true">
       </button>
     </div>

   </div>
  </header>


  <main>
    <article>

      <!-- 
        - #CONTACT
      -->
      <section class="section contact has-bg-image" aria-labelledby="contact-label"
        style="background-image: url('./images/contact-bg.png')">
        <div class="container">

          <form class="contact-form" action="contact.php" method="POST">

            <?php if(isset($_GET['success'])) { ?>
              <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>

            <?php if(isset($_GET['error'])) { ?>
              <p class="error"> <?php echo $_GET['error']; ?> </p>
            <?php } ?>

            <h2 class="headline-sm" id="contact-label">Get in touch</h2>

            <p class="contact-text body-md">
              I would love to hear from you.
            </p>

            <div class="wrapper">

              <div>
                <label for="name" class="label">Full Name</label>

                <input type="text" name="name" id="name" placeholder="Name *" required class="input-field">
              </div>

              <div>
                <label for="email" class="label">Your Email </label>

                <input type="email" name="email" id="email" placeholder="Email *" required class="input-field">
              </div>

            </div>

            <label for="subject" class="label">Subject</label>
            <input type="text" name="subject" id="subject" placeholder="Subject" class="input-field">

            <label for="message" class="label">Your message </label>
            <textarea name="message" id="message" placeholder="Your message *" required class="input-field"></textarea>

            <input type="submit" class="btn btn-tertiary">

          </form>

          <div class="contact-content">

            <ul class="contact-list">

              <li class="contact-item">

                <div class="item-icon" style="background-color: hsl(177, 39%, 72%)">
                  <ion-icon name="call" aria-hidden="true"></ion-icon>
                </div>

                <div>
                  <p class="label-lg">Phone</p>

                  <a href="tel:+011236548096" class="body-lg">+63 123 456 7890</a>
                </div>

              </li>

              <li class="contact-item">

                <div class="item-icon" style="background-color: hsl(41, 99%, 64%)">
                  <ion-icon name="mail" aria-hidden="true"></ion-icon>
                </div>

                <div>
                  <p class="label-lg">Mail</p>

                  <a href="tel:info@domainname.com" class="body-lg">nherlhinmorga.guevarra@bicol-u.edu.ph</a>
                </div>

              </li>

              <li class="contact-item">

                <div class="item-icon" style="background-color: hsl(19, 97%, 85%)">
                  <ion-icon name="location" aria-hidden="true"></ion-icon>
                </div>

                <div>
                  <p class="label-lg">Visit Our Studio</p>

                  <address class="body-lg">
                    Daraga, Albay
                  </address>
                </div>

              </li>

            </ul>

          </div>

        </div>
      </section>

    </article>
  </main>


  <!--FOOTER-->

  <footer class="footer">
    <div class="container">

      <ul class="social-list-f">

        <li>
          <a href="https://www.facebook.com" class="social-link">
            <img src="./images/facebook-light.png">
          </a>
        </li>

        <li>
          <a href="https://www.twitter.com" class="social-link">
            <img src="./images/twitter-light.png">
          </a>
        </li>

        <li>
          <a href="https://www.instagram.com" class="social-link">
            <img src="./images/instagram-light.png">
          </a>
        </li>

        <li>
          <a href="https://www.linkedin.com" class="social-link">
            <img src="./images/linkedin-light.png">
          </a>
        </li>

      </ul>

      <p class="text-center">&copy; 2024 GUEVARRA</p>

    </div>
  </footer>


  <!-- 
    - custom js link
  -->
  <script src="./js/script.js"></script>

  <!-- jQuery -->
  <script src="./js/jQuery v3.7.0.js"></script>
  <script src="./js/jQuery.js"></script>

  <!-- 
    - ionicon
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>