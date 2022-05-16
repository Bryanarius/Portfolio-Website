<!DOCTYPE html>


<html>


<head>

<title>Apple</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/x-icon" href="images/apple.ico">

<style>
a {
    color:grey;
}
h1 {
    color:white;
}

h3 {
    color:white;
}

p {
    color:grey;
}

ul.b {
  list-style-type: square;
  color:grey;
}

i {
    color:grey;
}

.sticky {
    position: fixed;
    top: 0;
    width: 100%;
  }

  #navbar a:hover {
  background-color: #ddd;
  color: black;
  
  /* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
  .sticky + .content {
    padding-top: 60px;
  }
</style>

<script src="https://use.fontawesome.com/4cb75f3355.js"></script>


<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>


</head>
<div class="container">
    <div class="row">
    <div class="col-lg-12 text-center">
    
<body style="background-color:black;">

<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle m1-auto" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="fa fa-apple" aria-hidden="true"></i></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Store</a></li>
        <li><a href="#">Mac</a></li>
        <li><a href="#">iPad</a></li>
        <li><a href="#">iPhone</a></li>
        <li><a href="#">Watch</a></li>
        <li><a href="#">AirPods</a></li>
        <li><a href="#">TV & Home</a></li>
        <li><a href="#">Only on Apple</a></li>
        <li><a href="#">Accessories</a></li>
        <li><a href="#">Support</a></li>
        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
</nav>



</div>
</div></div>



<div class="container">
    <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-sm-2">
<h3>Finish</h3> 
</div>



<div class="col-md-8">
<img src="images/macbook.jpg" class="img-responsive" style="width:100%" alt="Image">
<div class="col-md-1">
    </div>
</div></div>

<div class="container">
    <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-lg-10">
<hr style="height:.2px;border-width:0;color:gray;background-color:gray">
</div>
<div class="col-md-1">
    </div>
</div></div>
<br>


<div class="container">
    <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-2">
<h3>Price</h3> 
</div>


<div class="col-md-3 text-center">
<br>
<p>$1299</p>
</div>

<div class="col-md-3 text-center">
<br>
<p>$1499</p>
</div>

<div class="col-md-1">
    </div>

</div></div>

<div class="container">
    <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-lg-10">
<hr style="height:.2px;border-width:0;color:gray;background-color:gray">
</div>
<div class="col-md-1">
    </div>
</div></div>


<br>
<div class="container">
    <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-2">
<h3>Display</h3> 
</div>

<div class="col-md-8">
<br>

<span style="color:white">Retina Display</span>
<br>
<p>13.3-inch (diagonal) LED-backlit display with IPS technology; 2560-by-1600 native resolution at 227 pixels per inch with support for millions of colors</p>
<br>
<p>Supported scaled resolutions:</p>
<ul class="b">
  <li>1680 by 1050</li>
  <li>1440 by 900</li>
  <li>1024 by 640</li>
</ul>
<p>500 nits brightness</p>
<p>Wide color (P3)</p>
<p>True Tone technology</p>
<br>
</div>
<div class="col-md-1">
    </div>
</div></div>

<div class="container">
    <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-lg-10">
<hr style="height:.2px;border-width:0;color:gray;background-color:gray">
</div>
<div class="col-md-1">
    </div>
</div></div>

<br>
<div class="container">
    <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-2">
<h3>Chip</h3> 
</div>
<div class="col-md-8">
<h1>Apple M1 chip</h1>
<p>8-core CPU with 4 performance cores and 4 efficiency core</p>
<p>8-core GPU</p>
<p>16-core Neural Engine</p>
</div>
<div class="col-md-1">
    </div>


</div>
</div>


<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>