<?php
// includes the base of the design
// includes the navigation
// if you want to add a new site, always include _header.php and _footer.php at the start and end of the site
// riven > yasuo
include('views/_header.php'); 

?>

<div id="page-size">
<div class="container">

<?php if ($login->isUserLoggedIn() == true) { 
echo '
<div class="alert alert-info" role="alert">
  <strong>Hello Leon!</strong> Your profile is 80% completed
</div>'; 
} ?>

<?php 
// "first-row-imp" is the carousel (switching images)
// can be used to showcase new products, important news etc
// i have inserted some test things from bootstrap here but its just HTML so  they are without function and just as a placeholder
?>
  <div id="first-row-imp" class="row">
    <div class="col">
<div id="indicator" style="height:300px;" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#indicator" data-slide-to="0" class="active"></li>
    <li data-target="#indicator" data-slide-to="1"></li>
    <li data-target="#indicator" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="libs/images/image2.png" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h3>New Iphone 7 Cases</h3>
        <p>The new Kappa Edition in multiple colors!</p>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="libs/images/image2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="libs/images/image2.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#indicator" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#indicator" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div>
  </div>

<div style="width:70%;float:left;margin-top:10px;">
    <div class="row">
    <div class="col">
<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
    </div>
</div>
</div>

<div style="width: 30%;float: left;">
    <div class="row">
        <div class="col">
          1 of 3
        </div>
        <div class="col">
          1 of 3
        </div>
        <div class="col">
          1 of 3
        </div>
    </div>
</div>


  </div> <?php // container end ?>

<?php 
// this needs to be included at every site end
// its the end of the code
include('views/_footer.php'); 
?>
