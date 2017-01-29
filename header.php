<html lang="en">
<head>    
<title>Sample Wordpress Theme - Skylar Banks</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?> 

</head>

<?php if ( is_user_logged_in() ) { ?>
 <style type="text/css">.navbar { margin-top: 30px;}
</style>
<?php } // end if ?>

<nav id="mainNav" class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="<?php bloginfo('template_directory'); ?>/img/rlje-logo.png"/></a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="<? echo site_url( '/'); ?>">Home  <span>|</span></a>
        </li>
        <li>    
          <a href="<? echo site_url( '/investors'); ?>">Investors  <span>|</span></a>
        </li>
        <li>
          <a href="<? echo site_url( '/management'); ?>">Management<span>|</span></a>

        </li>
        <li>
          <a href="<? echo site_url( '/board'); ?>">Board <span>|</span></a>
        </li>
        <li>
          <a href="<? echo site_url( '/press-room'); ?>" >Press Room</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
