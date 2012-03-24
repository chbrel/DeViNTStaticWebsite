<?php
	$video = ""; if(isset($_GET['video'])) { $video = htmlspecialchars($_GET['video']); }
	if(strcmp($video, '') == 0) { $video = 'interview_dv_devint_2008'; }
?>
<div class="span3">
  <div class="well sidebar-nav">
	<ul class="nav nav-list">
		<li <?php if(strcmp($video,'interview_dv_devint_2008') == 0) { echo 'class="active"'; } ?> ><a href="./index.php?action=videos&video=interview_dv_devint_2008">Interview de déficients visuels lors de la journée DeViNT 2008</a></li>
		<hr>
		<li <?php if(strcmp($video,'snowboard_devint_2008') == 0) { echo 'class="active"'; } ?> ><a href="./index.php?action=videos&video=snowboard_devint_2008">Un jeu de snowboard présenté à la journée DeViNT 2008</a></li>
		<hr>
		<li <?php if(strcmp($video,'stand_projets_devint_2008') == 0) { echo 'class="active"'; } ?> ><a href="./index.php?action=videos&video=stand_projets_devint_2008">Le stand des projets DeViNT en 2008</a></li>
		<hr>
		<li <?php if(strcmp($video,'france3_2005') == 0) { echo 'class="active"'; } ?> ><a href="./index.php?action=videos&video=france3_2005">Reportage de france 3 en 2005</a></li>
		<hr>
		<li <?php if(strcmp($video,'france3_2007') == 0) { echo 'class="active"'; } ?> ><a href="./index.php?action=videos&video=france3_2007">Reportage de france 3 en 2007</a></li>
		<hr>
		<li <?php if(strcmp($video,'devint_itt_2008') == 0) { echo 'class="active"'; } ?> ><a href="./index.php?action=videos&video=devint_itt_2008">Présentation des projets DeViNT aux Intellicore Tech Talks en 2008</a></li>
	</ul>
  </div>
</div>

<div class="span9">
	<?php if(strcmp($video, 'interview_dv_devint_2008') == 0) { ?>
	<div class="row-fluid">
		<div class="span12 thumbnail" align="center">
			<iframe width="640" height="480" src="http://www.youtube.com/embed/FSiC3by9iRU" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>

	<div class="row-fluid"> 
		<div class="span12" align="center">
			<div class="alert alert-info">
				<p><strong>Interview de déficients visuels lors de la journée DeViNT 2008</strong></p>
			</div>
		</div>
	</div>
	<?php } ?>
	
	<?php if(strcmp($video, 'snowboard_devint_2008') == 0) { ?>
	<div class="row-fluid">
		<div class="span12 thumbnail" align="center">
			<iframe width="640" height="480" src="http://www.youtube.com/embed/Ah32VgZKmQw" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	
	<div class="row-fluid"> 
		<div class="span12" align="center">
			<div class="alert alert-info">
				<p><strong>Un jeu de snowboard présenté à la journée DeViNT 2008</strong></p>
			</div>
		</div>
	</div>
	<?php } ?>
	
	<?php if(strcmp($video, 'stand_projets_devint_2008') == 0) { ?>
	<div class="row-fluid">
		<div class="span12 thumbnail" align="center">
			<iframe width="640" height="480" src="http://www.youtube.com/embed/45a09Z-L9qI" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	
	<div class="row-fluid"> 
		<div class="span12" align="center">
			<div class="alert alert-info">
				<p><strong>Le stand des projets DeViNT en 2008</strong></p>
			</div>
		</div>
	</div>
	<?php } ?>
	
	<?php if(strcmp($video, 'france3_2005') == 0) { ?>
	<div class="row-fluid">
		<div class="span12 thumbnail" align="center">
			<iframe width="640" height="480" src="http://www.youtube.com/embed/TVOnmgf4iLI" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	
	<div class="row-fluid"> 
		<div class="span12" align="center">
			<div class="alert alert-info">
				<p><strong>Reportage de france 3 en 2005</strong></p>
			</div>
		</div>
	</div>
	<?php } ?>
	
	<?php if(strcmp($video, 'france3_2007') == 0) { ?>
	<div class="row-fluid">
		<div class="span12 thumbnail" align="center">
			<iframe width="640" height="480" src="http://www.youtube.com/embed/MwxyvofD5eA" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	
	<div class="row-fluid"> 
		<div class="span12" align="center">
			<div class="alert alert-info">
				<p><strong>Reportage de france 3 en 2007</strong></p>
			</div>
		</div>
	</div>
	<?php } ?>
	
	<?php if(strcmp($video, 'devint_itt_2008') == 0) { ?>
	<div class="row-fluid">
		<div class="span12 thumbnail" align="center">
			<iframe frameborder="0" width="640" height="480" src="http://www.dailymotion.com/embed/video/x5wm6z" allowfullscreen></iframe>
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span12" align="center">
			<div class="alert alert-info">
				<p><strong>Présentation des projets DeViNT aux Intellicore Tech Talks en 2008</strong></p>
			</div>
		</div>
	</div>
	<?php } ?>		 
</div>
