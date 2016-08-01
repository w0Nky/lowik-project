<!-- news -->
<?php
    $i=0;
    foreach($liste_articles as $article) {
    	$class ='';
    	// Effets de style
    	if($i%2 == 0){
    		if($i==0){
				$class = 'class="container bg-1 padding-top-bottom  margin-top"';
    		}else{
    			$class = 'class="container bg-1 padding-top-bottom"';
    		}
    	}else{
    		$class =  'class="container bg-4 padding-top-bottom"';
    	}

?>
    <div <?php echo $class; ?>>
			<div class="row">
				<div class="col-sm-4">
					<a href="<?php echo 'detail_articles/'.$article->id;?>" class=""><img src="<?php echo $article->url; ?>" class="img-responsive"></a>
				</div>
			<div class="col-sm-8">
				<h3 class="title"><?php echo $article->titre; ?></h3>
				<p class="text-muted"><span class="glyphicon glyphicon-calendar"><?php echo $t_texte->quand($article->date); ?></span></p>
				<p>
					<?php echo mb_strimwidth($article->texte, 0, 200, "..."); ?>
				</p>
				<p class="text-muted">Auteur : <a href=""><?php echo $article->auteur; ?></a></p>
			  
			</div>
		</div>
	</div>

<?php 
	$i++;
	}
?>

	<!-- pagination -->

	<div class="container bg-2" id="#top">  
		<ul class="pagination pagination-lg pull-right">
	        <li>Page <?php print($num_page);?></li>
	        <?php if($num_page > 1) print('<li><a href="articles/'.($num_page - 1).'">«</a></li>'); ?>
			<?php print('<li><a href="articles/'.($num_page + 1).'">»</a></li>'); ?>
		</ul>
    </div>
	<div class="container bg-2" id="#top">  
		<hr>
	</div>