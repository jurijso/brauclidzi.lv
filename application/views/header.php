
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../favicon.ico">

  <title>Theme Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap theme -->
  <link href="<?php echo base_url() ?>css/bootstrap-theme.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url() ?>css/theme.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy this line! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body role="document">

      <!-- Fixed navbar -->
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url() ?>"><?php echo $this->lang->line('header_title') ?></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
              <li ><a href=""><?php echo  $this->lang->line('header_find') ?></a></li>
              <li><a href="#about"><?php echo  $this->lang->line('header_offer') ?></a></li>
              <?php if(!$session["name"]){ ?>
              <li><a href="<?php echo base_url() ?>user/login"><?php echo  $this->lang->line('header_enter') ?></a></li>
              <li><a href="<?php echo base_url() ?>user/register"><?php echo  $this->lang->line('header_register') ?></a></li>
              <?php  } else {?>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $session["name"]." ".$session["surname"];?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
              <?php } ?>
              <li><a href="<?php echo base_url() ?>how_it_works"><?php echo  $this->lang->line('header_howItWorks') ?></a></li>
              <?php if($curLang == "latvian"){ ?>
              <li><a href="<?php echo base_url() ?>language/changeLng/russian">ру <img src="<?php echo base_url()?>img/flag-icons20x15/ru.png" alt="ru"></a></li>
              <?php } else if ($curLang == "russian"){ ?>
              <li><a href="<?php echo base_url() ?>language/changeLng/latvian">lv  <img src="<?php echo base_url()?>img/flag-icons20x15/lv.png" alt="lv"></a></li>
              <?php } ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
      <div class="container theme-showcase" role="main">
