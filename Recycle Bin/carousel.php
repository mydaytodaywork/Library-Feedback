<!DOCTYPE html>
<html lang="en">
<head>
  <title>Carousel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 40%;
  }
  
  .carousel-fade .carousel-inner .item {
  opacity: 0;
  -webkit-transition-property: opacity;
  transition-property: opacity;
}
.carousel-fade .carousel-inner .active {
  opacity: 1;
}
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  opacity: 0;
  z-index: 1;
}
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}
.carousel-fade .carousel-control {
  z-index: 2;
}
}
  </style>
</head>
<script type="text/javascript">
$(document).ready(function(){
     $("#myCarousel").carousel({
         interval : 3000,
         pause: false
     });
});
</script>
<body>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel carousel-fade" data-ride="carousel">
  	<div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/img3.jpg" alt="IITM" width="460" height="345">
      </div>

      <div class="item">
        <img src="img/img2.jpg" alt="IITM" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="img/img1.jpg" alt="IITM" width="460" height="345">
      </div>

      <div class="item">
        <img src="img/img2.jpg" alt="IITM" width="460" height="345">
      </div>
    </div>
  </div>
</div>

</body>
</html>

