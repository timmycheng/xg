<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xingu Landscape</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/identify.css">
    <script src="/js/cssrefresh.js" charset="utf-8"></script>
    <!-- <link rel="stylesheet" href="/css/master.css"> -->

    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="/js/backend.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div id="header" class="row">
        <div class="col-md-12">
          <h1>Backend</h1>
        </div>
      </div>
      <div id="content" class="row">
        <div id="list-table">
          <table class="table table-hover table-striped" >
            <thead>
              <tr>
                <th>title</th>
                <th>cate</th>
                <th>method</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $row):?>
              <tr>
                <td><?=$row['title']?></td>
                <td><?=$row['cate']?></td>
                <td>delete</td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
