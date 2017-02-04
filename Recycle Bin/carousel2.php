<html>
<head>
  <meta charset="UTF-8" />
  <title>Document</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>
#hero-wrapper {
  height: 100%;
  width: 100%;
  position: fixed;
}

#hero-wrapper .carousel-wrapper,
#hero-carousel {
  height: 80%;
  width: 60%;
  position: absolute;
}

#hero-carousel{
  img {
    left: 0;
    bottom: 0;
    width: auto;
    height: auto;
  }
  & i {
    position: absolute;
    top: 50%;
  }
}

.carousel-fade {
  .carousel-inner {
    .item {
      opacity: 0;
      transition-property: opacity;
    }

    .active {
      opacity: 1;
    }

    .active.left,
    .active.right {
      left: 0;
      opacity: 0;
      z-index: 1;
    }

    .next.left,
    .prev.right {
      opacity: 1;
    }
  }

  .carousel-control {
    z-index: 2;
  }
}
</style>
<body>
   <div id="hero-wrapper">
    <div class="carousel-wrapper">
      <div id="hero-carousel" class="carousel slide carousel-fade">
        <ol class="carousel-indicators">
          <li data-target="#hero-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#hero-carousel" data-slide-to="1"></li>
          <li data-target="#hero-carousel" data-slide-to="2"></li>
          <li data-target="#hero-carousel" data-slide-to="3"></li>
          <li data-target="#hero-carousel" data-slide-to="4"></li>
          <li data-target="#hero-carousel" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img src="http://placekitten.com/1200/500">
          </div>
          <div class="item">
            <img src="http://placekitten.com/1170/500">
          </div>
          <div class="item">
            <img src="http://placekitten.com/1100/500">
          </div>
          <div class="item">
            <img src="http://placekitten.com/1170/600">
          </div>
          <div class="item">
            <img src="http://placekitten.com/1190/800">
          </div>
          <div class="item">
            <img src="http://placekitten.com/1200/800">
          </div>
        </div>
        <a class="left carousel-control" href="#hero-carousel" data-slide="prev">
          <i class="fa fa-chevron-left left"></i>
        </a>
        <a class="right carousel-control" href="#hero-carousel" data-slide="next">
          <i class="fa fa-chevron-right right"></i>
        </a>
      </div>
    </div>
  </div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>