<?php 
include 'navigation.php';
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/sliding1.jpeg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="images/sliding3.jpeg" alt="Chicago">
    </div>

    <div class="item">
      <img src="images/sliding4.jpg" alt="New York">
    </div>

    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php include 'footer.php';?>



<style>
 body{
 	background-image: none;
 }

.carousel-inner{
  margin: 0px auto;
  display: block;
  width: 60%;
  height: 650px;
 
}


 

 
</style>
 