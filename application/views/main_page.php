<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Xingu Landscape</title>

  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/unslider-dots.css">
  <link rel="stylesheet" href="css/unslider.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="js/cssrefresh.js" charset="utf-8"></script>
  <!-- <link rel="stylesheet" href="/css/master.css"> -->

  <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <div class="container-fluid">
    <div id="header" class="row">
      <!-- 导航条 -->
      <div id="nav" class="col-md-12">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-header" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button> -->
              <a href="#" class="navbar-brand"><strong>Xingu Landscape</strong></a>
            </div>
            <div class="collapse navbar-collapse navbar-fixed-top" id="main-header">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#design">Design</a></li>
                <li><a href="#photos">Photo</a></li>
                <li><a href="#article">Article</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!-- 标题 -->
      <div id="banner" class="col-md-12">
        <div class="banner-inner">
          <h1>WELCOME</h1>
          <p>
            Heart Of Harvest
          </p>
        </div>
        <div class="banner-slide">
          <ul>
            <li><img class="img-responsive center-block" src="images/front-page/banner1.jpg" alt="" /></li>
            <li><img class="img-responsive center-block" src="images/front-page/banner2.jpg" alt="" /></li>
            <li><img class="img-responsive center-block" src="images/front-page/banner3.jpg" alt="" /></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="content" class="row">
      <div id="video" class="col-md-12"></div>
      <div id="design" class="col-md-12">
        <div class="inner">
          <!-- 标题 -->
          <h2>DESIGN</h2>
          <!-- 图片集-为了今后便于调整 -->
          <div class="image-group">
            <div class="image-item col-md-12 design-image">
              <a class="thumbnail" href="#" >
                <img class="img-responsive center-block" src="images/front-page/design.jpg" alt="" />
              </a>
            </div>
          </div>
          <!-- 连接 -->
          <a href="design" class="btn btn-default" role="button">See More</a>
        </div>
      </div>
      <div id="photos" class="col-md-12">
        <div class="inner">
          <!-- 标题 -->
          <h2>PHOTO</h2>
          <!-- 图片集 -->
          <div class="image-group col-md-12">
            <div class="image-item col-md-8"><a href="#" class="thumbnail"><img src="images/front-page/photo1.jpg" alt="" /></a></div>
            <div class="image-item col-md-4"><a href="#" class="thumbnail"><img src="images/front-page/photo2.jpg" alt="" /></a></div>
            <div class="image-item col-md-4"><a href="#" class="thumbnail"><img src="images/front-page/photo3.jpg" alt="" /></a></div>
            <div class="image-item col-md-4"><a href="#" class="thumbnail"><img src="images/front-page/photo4.jpg" alt="" /></a></div>
            <div class="image-item col-md-4"><a href="#" class="thumbnail"><img src="images/front-page/photo5.jpg" alt="" /></a></div>
            <div class="image-item col-md-4"><a href="#" class="thumbnail"><img src="images/front-page/photo6.jpg" alt="" /></a></div>
            <div class="image-item col-md-8"><a href="#" class="thumbnail"><img src="images/front-page/photo7.jpg" alt="" /></a></div>
          </div>
          <!-- 连接 -->
          <a href="photo" class="btn btn-default" role="button">See More</a>
        </div>
      </div>
      <div id="article" class="col-md-12">
        <div class="inner">
          <!-- 标题 -->
          <h2>ARTICLE</h2>
          <!-- 图片集 -->
          <div class="image-group">
            <div class="image-item article-image col-md-3"><a href="#" class="thumbnail"><img src="images/front-page/article1.jpg" alt="" /></a></div>
            <div class="image-item article-image col-md-3"><a href="#" class="thumbnail"><img src="images/front-page/article2.jpg" alt="" /></a></div>
            <div class="image-item article-image col-md-3"><a href="#" class="thumbnail"><img src="images/front-page/article3.jpg" alt="" /></a></div>
            <div class="image-item article-image col-md-3"><a href="#" class="thumbnail"><img src="images/front-page/article4.jpg" alt="" /></a></div>
          </div>
          <!-- 连接 -->
          <a href="article" class="btn btn-default" role="button">See More</a>
        </div>
      </div>
    </div>
    <div id="footer" class="row">
      <div id="copyright" class="col-md-12">
        <div class="inner">
          <h3>@Xingu.Zhang</h3>
          <hr>
          <ul class="col-md-12 link-group">
            <li ><a href="#"><i class="fa fa-envelope-o fa-2x"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest fa-2x"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
          </ul>
          <h4>Copyright &copy; 2016 Cheng.B, All Rights Reserved</h4>
          <!-- <h3>#No.xxxxxxxx</h3> -->
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/unslider.js"></script>
  <script src="js/pages.js"></script>

</body>
</html>
