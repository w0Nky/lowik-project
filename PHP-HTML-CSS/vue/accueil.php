	<!-- premier container -->
    <div class="container bg-2 margin-top">
	<!-- carrousel -->
		<div id="myCarousel" class="carousel slide bg-2" data-ride="carousel">

		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			<div class="item active">
			  <img src="<?php echo IMAGES_STYLE; ?>1.jpg" alt="" style="width:100%; height:500px;">
			</div>

			<div class="item">
			  <img src="<?php echo IMAGES_STYLE; ?>2.jpg" alt=""  style="width:100%; height:500px;">
			</div>

			<div class="item">
			  <img src="<?php echo IMAGES_STYLE; ?>3.jpg" alt=""  style="width:100%; height:500px;">
			</div>

			<div class="item">
			  <img src="<?php echo IMAGES_STYLE; ?>4.jpg" alt=""  style="width:100%; height:500px;">
			</div>

		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="color:white;"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="color:white;"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
	</div>

	<!-- deuxieme container -->
	<div class="container bg-3 text-center padding-top-bottom" id="#myBio">
		<img src="<?php echo IMAGES_STYLE; ?>photo_presentation.jpg" alt="Loïc Baroni" class="img-responsive img-thumbnail margin-bottom" style="width:50%" alt="Image">
		<h3 class="margin-bottom">Qui suis-je?</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
		<p><a class="btn btn-default" href="" role="button">Plus d'info »</a></p>
	</div>

	<!-- 3 eme container -->
	<div class="container bg-1 text-center padding-top-bottom">
		<h3 class="margin-bottom">Vous voulez suivre un programme ?</h3><br>
		<div class="row">
			<div class="col-sm-4">
			  <img src="<?php echo IMAGES_STYLE; ?>article1.jpg" title="No Pain No Tartine" alt="No Pain No Tartine" style="width:250px;height:250px" class="img-responsive img-thumbnail margin-bottom blur">
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			  <p><a class="btn btn-default" href="" role="button">View details »</a></p>
			</div>
			<div class="col-sm-4">
			  <img src="<?php echo IMAGES_STYLE; ?>article1.jpg" title="No Pain No Tartine" alt="No Pain No Tartine" style="width:250px;height:250px" class="img-responsive img-thumbnail margin-bottom blur">
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			  <p><a class="btn btn-default" href="" role="button">View details »</a></p>
			</div>
			<div class="col-sm-4">
			  <img src="<?php echo IMAGES_STYLE; ?>article1.jpg" title="No Pain No Tartine" alt="No Pain No Tartine" style="width:250px;height:250px" class="img-responsive img-thumbnail margin-bottom blur">
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			  <p><a class="btn btn-default" href="" role="button">View details »</a></p>
			</div>
		</div>
	</div>