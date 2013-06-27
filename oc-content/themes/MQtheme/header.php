<?php
/*
Theme Name: MQTheme
Theme URI: http://www.masterquarto.pt/
Description: Bootswatch MQ theme
Version: 1.0
Author: MQTheme team
Author URI: http://www.osclass.org/
Widgets: header,footer,sidebar
Theme update URI: 
*/
?>


<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="./">MasterQuarto</a>
                                
				<div class="nav-collapse collapse" id="main-menu">
					<ul class="nav" id="main-menu-left">
						<li>
                                                    <ul>
                                                        <form class="navbar-search pull-left" action="">
                                                            <input type="text" class="search-query span2" placeholder="Procurar">
                                                        </form>
                                                    </ul>
                                                </li>       
					</ul>
					<ul class="nav pull-right" id="main-menu-right">
                                            <li><a href="#">Entrar <i class="icon-share-alt"></i></a></li>
                                            <li><a href="#">Nova conta <i class="icon-share-alt"></i></a></li>
                                        </ul>
				</div>
			</div>
		</div>
	</div>


 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo(osc_current_web_theme_url()) ?>slider/Optimized-slide1.png" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo(osc_current_web_theme_url()) ?>slider/Optimized-slide2.png" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo(osc_current_web_theme_url()) ?>slider/Optimized-slide3.png" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo(osc_current_web_theme_url()) ?>slider/Optimized-slide4.png" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->
