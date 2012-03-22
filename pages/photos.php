<?php include_once('./lib/galery.php'); ?>
<?php
	$album = ""; if(isset($_GET['album'])) { $album = htmlspecialchars($_GET['album']); }
	$ca = false;
	$devint = false;
?>
		<div class="span3">
		  <div class="well sidebar-nav">
			<ul class="nav nav-list">
			  <li class="nav-header">Visites à l'Institut Clément-Ader</li>
			  	<?php foreach(getAllCADayAlbums() as $al) { ?>
			  		<li <?php if(strcmp($album,$al) == 0) { echo 'class="active"'; $ca = true; } ?> ><a href="./index.php?action=photos&album=<?php echo $al; ?>"><?php echo substr($al, 0, -2); ?></a></li>
			  	<?php } ?>
			  <li class="nav-header">Journées DeViNT</li>
			  	<?php foreach(getAllDeViNTDayAlbums() as $al) { ?>
			  		<li <?php if(strcmp($album,$al) == 0) { echo 'class="active"'; $devint = true; } ?> ><a href="./index.php?action=photos&album=<?php echo $al; ?>"><?php echo $al; ?></a></li>
			  	<?php } ?>
			</ul>
		  </div>
		</div>
			
		<div class="span9">
		
	 		<div class="row-fluid">
			 	<div class="span12">
		  			<div class="alert alert-info">
	  					<p><b>
	  					<?php
	  						if($devint)
	  						{
	  					?>
	  					Journée DeViNT <?php echo $album; ?>
	  					<?php
		  					} elseif($ca) {
		  				?>
		  				Visite à l'Institut Clément-Ader <?php echo substr($album, 0, -2); ?>
		  				<?php
		  					}
		  				?>
	  					</b></p>
					</div>
		  		</div>
			</div>

			<div class="row-fluid">
				<div class="span12">
		        	<div id="myCarousel" class="carousel">
					  <!-- Carousel items -->
					  <div class="carousel-inner">
					  	<?php
					  		$setActive = false;
					  		$pictures = getAllPictures($album);
					  		foreach($pictures as $pict)
					  		{
					  	?>
					  	<div class="item<?php if(! $setActive) { echo " active"; $setActive = true; } ?>">
					    	<img src="./images/photos/<?php echo $album.'/'.$pict ?>" alt="Photo de l'album <?php echo $album; ?> ayant pour titre <?php echo $pict; ?>">
					    </div>
					  	<?php	
					  		}
					  	?>
					  </div>
					  <!-- Carousel nav -->
					  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
					</div>
					<hr>
				</div>
	  		</div>
	  		
	  		<div class="row-fluid">
	  			<div class="span12">
		  			<ul class="thumbnails">
		  				<?php
		  					foreach($pictures as $pict)
					  		{
					  	?>
					        <li class="span2">
					          <a href="#myCarousel" class="thumbnail" onclick="javascript: $('#myCarousel').carousel(<?php $p = split('[_.]', $pict); echo (intval($p[1]) - 1); ?>);">
					            <img src="./images/photos/<?php echo $album.'/thumbnails/'.$pict ?>" alt="Miniature de la photo de l'album <?php echo $album; ?> ayant pour titre <?php echo $pict; ?>">
					          </a>
					        </li>
					    <?php
					    	}
					    ?>
				      </ul>
				</div>
	  		</div>
		</div>
<script>
	$('#myCarousel').carousel();
</script>