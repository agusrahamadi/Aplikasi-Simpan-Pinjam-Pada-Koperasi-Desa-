<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $this->app_name ." | " .$this->app_dev  ?></title>
  <link href="assets/frontend/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/frontend/css/animate.min.css" rel="stylesheet"> 
  <link href="assets/frontend/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/frontend/css/lightbox.css" rel="stylesheet">
  <link href="assets/frontend/css/main.css" rel="stylesheet">
  <link id="css-preset" href="assets/frontend/css/presets/preset1.css" rel="stylesheet">
  <link href="assets/frontend/css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="assets/frontend/js/html5shiv.js"></script>
    <script src="assets/frontend/js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="assets/frontend/images/favicon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Selamat Datang</h1>
            <p class="animated fadeInRightBig"><?php echo "$this->app_name $this->app_ver By <a href='$app_dev_web' target='_BLANK'>$this->app_dev</a> &copy; $this->app_year" ?></p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="?login=client">MASUK</a>
          </div>
        </div>
        <div class="item" style="background-image: url(2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Menyelesaikan Masalah Tanpa Masalah</h1>
            <p class="animated fadeInRightBig"><?php echo "$this->app_name $this->app_ver By <a href='$app_dev_web' target='_BLANK'>$this->app_dev</a> &copy; $this->app_year" ?></p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="?login=client">MASUK</a>
          </div>
        </div>
        <div class="item" style="background-image: url(4.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Kami Adalah Mitra Anda</h1>
            <p class="animated fadeInRightBig"><?php echo "$this->app_name $this->app_ver By <a href='$app_dev_web' target='_BLANK'>$this->app_dev</a> &copy; $this->app_year" ?></p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="?login=client">MASUK</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="assets/frontend/#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="assets/frontend/#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>


  </header><!--/#home-->
  
    </div><!--/#home-slider-->

  <script type="text/javascript" src="assets/frontend/js/jquery.js"></script>
  <script type="text/javascript" src="assets/frontend/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/frontend/http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="assets/frontend/js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="assets/frontend/js/wow.min.js"></script>
  <script type="text/javascript" src="assets/frontend/js/mousescroll.js"></script>
  <script type="text/javascript" src="assets/frontend/js/smoothscroll.js"></script>
  <script type="text/javascript" src="assets/frontend/js/jquery.countTo.js"></script>
  <script type="text/javascript" src="assets/frontend/js/lightbox.min.js"></script>
  <script type="text/javascript" src="assets/frontend/js/main.js"></script>

</body>
</html>