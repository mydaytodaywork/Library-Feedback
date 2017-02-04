<html>
<head>
<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet"></link>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<style type="text/css">
#myCarousel {
  width: 629px
}
.fadeInDown {
  color: red !important;
}
.fadeOutUp {
  color: green !important;
}
</style>

<div id="myCarousel" class="carousel slide">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://twitter.github.io/bootstrap/assets/img/bootstrap-mdo-sfmoma-01.jpg" alt="">
      <div class="carousel-caption">
        <h4 class="fadeOutUp">First Thumbnail label</h4>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </div>
    </div>
    <div class="item">
      <img src="http://twitter.github.io/bootstrap/assets/img/bootstrap-mdo-sfmoma-02.jpg" alt="">
      <div class="carousel-caption">
        <h4>Second Thumbnail label</h4>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </div>
    </div>
    <div class="item">
      <img src="http://twitter.github.io/bootstrap/assets/img/bootstrap-mdo-sfmoma-03.jpg" alt="">
      <div class="carousel-caption">
        <h4>Third Thumbnail label</h4>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

<script type="text/javascript">
$('#myCarousel').on('slid', function (e) {
    // This event is fired when the carousel has completed its slide transition.
   $("#myCarousel .active h4").removeClass("fadeInDown");
   $("#myCarousel .active h4").addClass("fadeOutUp");
}).on('slide', function (e) {
    // This event fires immediately when the slide instance method is invoked.
   $("#myCarousel .active h4").removeClass("fadeOutUp");
   $("#myCarousel .active h4").addClass("fadeInDown");
})
</script>

</body>
</html>