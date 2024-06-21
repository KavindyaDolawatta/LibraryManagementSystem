<!--Kithmini IT22594990--> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hogwarts University Library</title>
  <link rel="stylesheet" href="styles/new 3.css">
  <link rel="stylesheet" href="styles/style.css">
  
  
</head>

<body>
<header>
  <div class="container">
    <div class="logo">
      <img src="images/Logo 3.1.png" alt="Logo 3">
    </div>
    <div class="user-profile">
      <div class="avatar">
        <img src="images/user.jpg" alt="User Avatar">
      </div>
      
      <div class="user-actions">
        <button type="submit"><a href="login.html">Login</a></button>
        <button type="submit"><a href="signup.html">Sign Up</a></button>
      </div>
      
      <div class="search-bar">
        <form action="search.php" method="GET">
          <input type="text" name="query" placeholder="Search a book...">
          <button type="submit">Search</button>
        </form>
      </div>
    </div>

    <nav>
      <ul class="navigation-links">
        <li><button type="submit"><a href="helpdesk.php">Helpdesk</a></button></li>
        <li><button type="submit"><a href="suggestions.html">Suggestions</a></button></li>
        <li><button type="submit"><a href="events.html">Events</a></button></li>
      </ul>
    </nav>
  </div>
  
  <hr id="line">
  
  <ul class="navigation-links">
    <li><a href="home.php">Home</a></li>
    <li><a href="signup.html">Register</a></li>
    <li><a href="facilities.html">Facilities</a></li>
    <li><a href="aboutus.html">About Us</a></li>
    <li><a href="contact%20us.html">Contact Us</a></li> 
    <li><a href="library-guide.html">Library Guide</a></li>
  </ul>
</header>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Desk</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fff.css"><!-- footer css-->
</head>

<body>
    <h2><a href ="#"><?php echo "Support Desk"; ?></a></h2>
    
    <div class="search">
        <div class="searchd">
            <a href="#"><img class="imag" src="images/search-icon-jpg-1.jpg" alt="search"></a>
                            
            <div class="iid">
                <h3> How can we help you today?</h3>
            </div>

        </div>
    </div>

    <div class="container">

        <div class= "cards">
            <h2><u> Self-Directed Learning Resources </u></h2>

            <div class="picture pic1"></div>

            <p>
                Available 24/7 <br>
                Frequently asked Questions and Answers <br>
                Library Guides<br>
                Recorded Workshops and Tutorials<br>
            </p>
        </div>

        <div class= "cards">
            <h2><u> Live Assistance </u></h2>

            <div class="picture pic2"></div>

            <p>Library team members are available via phone, chat and text duing the hours posted on the homepage. Student can 
                also submit a question to ask a librarian when live assistance is not available.</p>
        </div>
            
        <div class="cards">
            <h2><u> Group Sessions </u></h2>

            <div class="picture pic3"></div> 

            <p>Meet with a library team member and other students for help locating, evaluating and using information effectively.</p>
        </div>
         
        <div class="cards">
            <h2><u> One to One Sessions </u></h2>
            <div class="picture pic4"></div>

            <p>Meet with a library team member individually to increase competence in locating,evaluating and using information.</p>
        </div>

    </div>

  <!-- Footer -->
  <footer>
    <div class="main-content">
      <div class="left box">
        <h2>About us</h2>
        <div class="content">
          <p>Hogwarts School's library of Witchcraft and Wizardry was founded by four of the most brilliant witches and wizards of their time.</p>
          <div class="social">
            <a href="#"><i class="fa fa-facebook-f"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
          </div>
        </div>
      </div>
      <div class="center box">
        <h2>Address</h2>
        <div class="content">
          <div class="place">
            <i class="fa fa-map-marker"></i>
            <span class="text">Anagarika Mawatha</span>
          </div>
          <div class="phone">
            <i class="fa fa-phone"></i>
            <span class="text">01134567829</span>
          </div>
          <div class="email">
            <i class="fa fa-envelope"></i>
            <span class="text">Hogwarts@gmail.com</span>
          </div>
        </div>
      </div>
      <div class="right_box">
        <h2>Contact</h2>
        <div class="contact">
          <form>
            <div class="email">
              <div class="text">Email *</div>
              <input type="email" required>
            </div>
            <div class="msg">
              <div class="text">Message *</div>
              <textarea rows="2" cols="25" required></textarea>
            </div>
            <div class="btn">
              <button type="submit">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
