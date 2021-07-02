<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: Registration.php");  
}  
  
?>  


  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>




<style>
.mySlides {

  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>




<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">A BIRD FOOD SHOP</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="Welcome.php">Home</a></li>
	  <li><a href="Bird.html">Birds</a></li>
      <li><a href="https://lafeber.com/pet-birds/bird-food-guide/?fbclid=IwAR0oFddrk62smtf1X_Z7V8v_O-MQ0qUo59R--gCVAXvA5p1juQV8u1MxKPk">Food Guide</a></li>
	  <li><a href="Logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
   
	<form class="navbar-form navbar-right" action="">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-danger">Submit</button>
    </form>
  </div>
</nav>
<br>




<!-- Slide Show -->
<section>
  <img class="mySlides" src="parrot.jpg" >
  <img class="mySlides" src="bird2.png" >
  <img class="mySlides" src="bird3.jpg" >
</section>
<br>





<section class="w3-container w3-center" style="max-width:600px">
  <h2 class="w3-wide">THE BIRD FOOD SHOP</h2>
  <p class="w3-opacity"><i>We love birds</i></p>
</section>

<section class="w3-container w3-content w3-center" style="max-width:600px">
<p class="w3-justify">
We have created a band food shop website. Here bird lovers and bird owners will find all the necessary information about what birds love to eat and what they don't.</p>
</section>
<br><br><br><br><br><br><br><br><br><br>




<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="https://www.facebook.com/"><i class="fa fa-facebook-official">Facebook</i></a><br>
  <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p">Pinterest</i></a><br>
  <a href="https://www.twitter.com/"><i class="fa fa-twitter">twitter</i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">
    Powered by <a href="https://lafeber.com/pet-birds/home-learning/" target="_blank">Bird Lovers</a>
  </p>
</footer>





<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>

</body>
</html>