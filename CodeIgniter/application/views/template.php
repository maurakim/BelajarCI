<!DOCTYPE html>
<html>
  <head>
    <title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title></title>
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">

      <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.js"></script>
      <script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.js"></script>
    </title>
  </head>
  <body style="background:black1">
    <div class="row">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
   <div class="item active">
     <img src="<?=base_url()?>assets/gambar/1.jpg" alt="...">
     <div class="carousel-caption">
       ...
     </div>
   </div>
 </div>
  <div class="item">
    <img src="<?=base_url()?>assets/gambar/5.jpg" alt="...">
    <div class="carousel-caption">
      ...
    </div>
  </div>
   ...
 </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
        <div class="col-md-12" style="background:#FFE4C4; height:80px; text-align:center">QUEEN'S CARE "Just Do It"</div>
    </div>
    <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid" style="background:#A9E2F3">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url()?>index.php/dashboard/brand">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?=base_url()?>index.php/dashboard">Dashboard</a></li>
        <li><a href="<?=base_url()?>index.php/dashboard/kontak">Kontak</a></li>
        <li class="dropdown">
          <a href="<?=base_url()?>assets/#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?=base_url()?>assets/#">Action</a></li>
            <li><a href="<?=base_url()?>assets/#">Another action</a></li>
            <li><a href="<?=base_url()?>assets/#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="<?=base_url()?>assets/#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="<?=base_url()?>assets/#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?=base_url()?>assets/#">Link</a></li>
        <li class="dropdown">
          <a href="<?=base_url()?>assets/#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?=base_url()?>assets/#">Action</a></li>
            <li><a href="<?=base_url()?>assets/#">Another action</a></li>
            <li><a href="<?=base_url()?>assets/#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="<?=base_url()?>assets/#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class="row">
      <div class="col-md-3" style="background:#F5F5DC; height:1000px; text-align:center">sidebar</div>
      <div class="col-md-6" style="background:#E9967A; height:1000px; text-align:center">
        <?php
        $this->load->view($konten);
         ?>
      </div>
      <div class="col-md-3" style="background:#F5F5DC; height:1000px; text-align:center">sidebar</div>
    </div>

  </body>
</html>
