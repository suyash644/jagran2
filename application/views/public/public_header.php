<?DOCTYPE html>
    <html>
    <head>
    <title> Product List </title>
    <link rel="stylesheet" type="text/css"  href="<?= base_url('assets/css/bootstrap.min.css'); ?> ">
    </head>
    <body>
    <nav class="navbar navbar-default" style="background-color:   #809fff">
  <div class=w"container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= base_url('user'); ?>">JAGRAN</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?= base_url('user'); ?>">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="<?= base_url('user/todo') ?>">What We Do</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Koshish <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
             <li><a href="#">Education</a></li>
            <li class="divider"></li>
             <li><a href="#">Our Shop</a></li>
            <li class="divider"></li>
             <li><a href="#">Help Center</a></li>
                
          </ul>
        </li>
                <li><a href="#">Contact Us</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><?= anchor('login','Login') ?></li>
      </ul>
    </div>
  </div>
</nav>   
</nav>  
