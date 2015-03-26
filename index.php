<?php

date_default_timezone_set('America/New_York');

define('BASE_URL', 'http://localhost/northendproductions');

$page = $_GET['page'] ?: 'index';

class View {

	public static function portfolioThumbs($rows = 2)
	{
		$cols = 12 / $rows;
		print '<div class="row portfolio-thumbs">';
		for($i = 0; $i < 6; $i++){
		    print   '<div class="col-md-'.$cols.'">
				        <div class="thumbnail">
				            <a href="?page=post" class="img">
				            	<img src="http://lorempixel.com/570/390/" alt="Portfolio Item">
				            	<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				            </a>
				            <div class="caption">
				                <h3><a href="?page=post">Lorem Ipsum Dolor Imet</a></h3>
				                <p>some description</p>
				            </div>
				        </div>
				    </div>';
		}
		print '</div>';

	}

}



?>



<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Northend Productions</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="src/css/bootstrap.css">
		<link rel="stylesheet" href="src/css/main.css">
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-hamburger">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?= BASE_URL ?>">Romanwebnet</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-hamburger">
					<ul class="nav navbar-nav">
						<li class="active"><a href="<?= BASE_URL ?>">Home</a></li>
						<li><a href="?page=blog">Blog</a></li>
						<li><a href="?page=about">About</a></li>
					</ul>
				</div>
			</div>
		</nav>





		<?php if($page === 'post'): ?>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					    <ol class="carousel-indicators">
					        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					    </ol>
					    <div class="carousel-inner" role="listbox">
					        <div class="item active">
					            <img src="http://lorempixel.com/1170/800/" alt="Image Alt">
					            <div class="carousel-caption"></div>
					        </div>
					        <div class="item">
					            <img src="http://lorempixel.com/1170/800/" alt="Image Alt">
					            <div class="carousel-caption"></div>
					        </div>
					        <div class="item">
					            <img src="http://lorempixel.com/1170/800/" alt="Image Alt">
					            <div class="carousel-caption"></div>
					        </div>					        
					    </div>
					    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					        <span class="sr-only">Previous</span>
					    </a>
					    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					        <span class="sr-only">Next</span>
					    </a>
					</div>	
				</div>	
			</div>
			<div class="row portfolio-detail">
				<div class="col-md-9 description">
					<h1>Lorem Ipsum Dolor Amet</h1>
					<p>Curabitur eu nulla lobortis, consequat tellus vel, pharetra magna. Nulla porta ligula quis mi semper, a dapibus nisl malesuada. Ut molestie, arcu quis venenatis bibendum, nulla dui bibendum lacus, eget congue mauris lacus sit amet velit. Nulla id facilisis nisi. Aliquam erat volutpat. Cras cursus tempus malesuada. Cras at pulvinar massa. Praesent malesuada ipsum quis erat efficitur, sit amet rutrum ex bibendum. Mauris et posuere magna.</p>
				</div>
				<div class="col-md-3">
					<h2>Technologies Used</h2>
					<ul class="tech-list">
						<li><span class="glyphicon glyphicon-console"></span> HTML5</li>
						<li><span class="glyphicon glyphicon-console"></span> Javascript / Jquery</li>
						<li><span class="glyphicon glyphicon-console"></span> CSS3</li>
						<li><span class="glyphicon glyphicon-console"></span> Content Management</li>
					</ul>
				</div>
			</div>
			<h4 class="portfolio-more-heading">More of our latest work</h4>
			<?php View::portfolioThumbs(3); ?>				
		</div>

		<?php elseif($page === 'about'): ?>

		<div class="container">
			<div class="row bio">
				<div class="col-md-4">
				    <div class="member text-center">
						<img src="http://placekitten.com/g/201/201" class="img-circle"/>
				        <div class="caption">
				            <h2>Greg Roman<span>Software Engineer</span></h2>
				            <ul class="social">
				                <li><a href="#"><i class="glyphicon glyphicon-briefcase"></i></a></li>
				                <li><a href="#"><i class="glyphicon glyphicon-envelope"></i></a></li>
				            </ul>
				        </div>
				    </div>
				</div>
				<div class="col-md-8">
					<h2>About</h2>
					<p>Etiam eleifend libero vel tristique aliquam. Suspendisse tortor mi, sodales quis vehicula quis, semper id orci. Nulla non pretium risus, id molestie turpis. Aliquam sit amet dolor id risus scelerisque tincidunt vitae a sapien. Suspendisse euismod molestie molestie. Praesent posuere eu nunc vitae lacinia. Sed feugiat augue at purus fringilla ornare. Etiam quis gravida nunc. Vivamus lectus nisi, volutpat ac posuere non, hendrerit vitae odio. Sed bibendum, arcu ac feugiat rhoncus, mi nunc faucibus urna, vitae tincidunt eros felis nec nisi. Praesent nec blandit elit.</p>
					<p>Vivamus tempus lacus ut orci rutrum egestas. Nullam vel tellus mollis, rutrum ex ut, ornare magna. In turpis augue, imperdiet nec tellus nec, ornare condimentum risus. Curabitur cursus tellus nec eros elementum semper. Cras nec bibendum nisl. Sed lacinia dui erat, at consequat orci vehicula eget. Quisque velit mauris, pulvinar non tortor ac, porta ultrices diam. Sed quis erat ex. Vestibulum malesuada eget lorem sed laoreet. Fusce imperdiet, odio ut posuere eleifend, dolor odio vehicula libero, id vehicula nisl diam ut mi.</p>
				</div>
			</div>
			<h4 class="portfolio-more-heading">View our latest work</h4>
			<?php View::portfolioThumbs(3); ?>			
		</div>


		<?php else: ?>

		<div class="container">
			<div class="row">
				<div class="col-md-8 center-block text-center">
					<header>
						<h1>Check out our latest work</h1>
						<p>Magnis modipsae que voloratati andigen daepeditem quiate re porem aut labor.</p>
					</header>
				</div>				
			</div>
			<?php View::portfolioThumbs(); ?>
		</div>

		<?php endif; ?>


		<footer>
	        <div class="container inner">
	            <p class="pull-left">&copy; <?= date("Y"); ?> Romanwebnet. All rights reserved.</p>
	            <ul class="footer-menu pull-right">
	                <li><a href="<?= BASE_URL ?>">Home</a></li>
	                <li><a href="?page=blog">Blog</a></li>
	                <li><a href="?page=about">About</a></li>
	            </ul>
	        </div>
		</footer>
		<script src="src/js/jquery-1.11.2.min.js"></script>
		<script src="src/js/bootstrap.min.js"></script>
		<script src="src/js/main.js"></script>
	</body>
</html>