<!-- Kavindya-IT22604330-->
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Home page</title>
	
	<!-- Includeing external style sheets and js code -->
	<link rel="stylesheet" href="./styles/new 3.css"> <!-- Header style-->
	<link rel="stylesheet" href="./styles/home.css">
	<link rel="stylesheet" href="./styles/footer.css">
	<script src="./js/homeslide.js"></script>
	
	
</head>

<body>
<!-- Include the header using php -->
    <?php include 'Header.html'; 
	?>
	
	<h2>Welcome to our Library</h2>
	
	<div class="lib">
	<img src="images/lib3.png" alt="1">
	</div>
	
<!--Add buttons  -->	
<div class="button-container">
  <button><a href= "catalogue.php">Catalouge</a></button><!--linking with catalogue page  -->
  <button>Digital library</button> <!--These buttons are not linked to anywhere-->
  <button>Reserch papers</button>
</div>
<div class="button-container">
  <button>E-Journals</button>
  <button>Tools</button>
  <button>Past papers</button>
</div>	

<!--Add quick links -->
	
<div class="quick-links">
  <h3>Quick Links</h3>
  <ul>
    <li><a href="my%20acc.html">My Account</a></li>
    <li><a href="#">My Subscriptions</a></li>
    <li><a href="#">Ask Librarian</a></li>
    <li><a href="#">Help Desk</a></li>
  </ul>
</div>

	
<hr id="line">	
<div class "New Arrivals">
     <h3>New Arrivals</h3>
 <div class="book-line">
 
          <div class="book">
              <img src="images/book1.jpg" alt="Book 1">
                   <h4>It starts with us</h4>
                   <p>Collen Hoover</p>
          </div>
			
          <div class="book">
              <img src="images/book2.jpg" alt="Book 2">
                    <h4>The murder of Roger Ackroyd</h4>
                    <p>Agatha Christie</p>
           </div>
			
           <div class="book">
              <img src="images/book3.jpg" alt="Book 3">
                     <h4>The blue umbrella</h4>
                     <p>Ruskin Bond</p>
           </div>
			
           <div class="book">
               <img src="images/book4.jpg" alt="Book 4">
                     <h4>Percy Jackson and the olympians</h4>
                     <p>Rick Riordan</p>
           </div>
		   
  </div>
</div>


<div class "Popular">
        <h3>Popular in this month</h3>
  <div class="book-lines">

         <div class="books">
              <img src="images/book5.jpg" alt="Book 5">
                    <h4>The book of magic</h4>
                    <p>Gardner Dozots</p>
         </div>
		 
         <div class="books">
              <img src="images/book6.jpg" alt="Book 6">
                    <h4>The rules of magic</h4>
                     <p>Alice Hoffman</p>
         </div>
  </div>
</div>


<!--including fooer using php-->	
<?php include 'footer.html'; 
	?>


</body>	
</html>