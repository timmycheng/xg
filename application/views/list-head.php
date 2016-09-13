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
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/font-awesome.css">
  <link rel="stylesheet" href="/css/list.css">
  <script src="/js/cssrefresh.js" charset="utf-8"></script>
  <!-- <link rel="stylesheet" href="/css/master.css"> -->

  <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <!-- <div id="container"> -->
	<div class="container-fluid">
		<div id="header" class="row">
      <div id="nav" class="col-md-12">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a href="/" class="navbar-brand"><strong>Xingu Landscape</strong></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="main-header">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="/design">Design</a></li>
                <li><a href="/photo">Photo</a></li>
                <li><a href="/article">Article</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
			<div class="col-md-12 banner clearfix">
        <!-- <h4><a href="/">back</a></h4> -->
        <h1><?php echo strtoupper($cate) ?></h1>
        <hr>
			</div>
		</div>
