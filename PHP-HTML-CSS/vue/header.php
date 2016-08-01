<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $meta_description; ?>">
	<meta name="keywords" content="<?php echo $meta_keywords; ?>">
	<meta name="Author" content="Kristen" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $nom_page;?></title>

    <!-- Bootstrap -->
    <link href="<?php echo BOOTSRAP_CSS; ?>" rel="stylesheet">
	<link href="<?php echo STYLE_CSS; ?>" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php 

if($page != 'admin') {
 echo' 	
	 	<!-- menu -->
	  	<div class="container bg-2" id="#top">
			<nav class="navbar navbar-fixed-top navbar-inverse container">
				<div class="container">
					<ul class="nav navbar-nav">
						<li class="active"><a href="accueil">Accueil</a> </li>
						<li><a href="articles">Articles</a></li>
						<li><a href="training.html">Training</a></li>
						<li><a href="biographie.html">Biographie</a></li>
						<li><a href="contact.html">Contact</a></li>						
					</ul>
				  <div class="navbar-form navbar-right inline-form">
					<div class="form-group">
						<form method="POST" action="">
						  <input type="search" class="input-sm form-control" placeholder="Recherche">
						  <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> Chercher</button>
					  	</form>
					</div>
				</div>
			</nav>
		</div>
';

}?>
