<?php
	$projet = ""; if(isset($_GET['projet'])) { $projet = htmlspecialchars($_GET['projet']); }
	
	$tmpdir = './tmp/';
	$dirname = './projects/';
	
	function testDownloadZip($project) {
		global $tmpdir;
		global $dirname;
		if(!file_exists($dirname.$project.'/download/'.$project.'.zip')) {
			$path=$dirname.$project;
			$zip = new ZipArchive();
			$zip->open($tmpdir.$project.'.zip', ZipArchive::CREATE);
			if (false !== ($dir = opendir($path)))
			{
			    while (false !== ($file = readdir($dir)))
			    {
			        if ($file != '.' && $file != '..')
			        {
						$zip->addFile($path.DIRECTORY_SEPARATOR.$file);
			        }
			    }
			}
			else
			{
			    die('Can\'t read dir');
			}
			$zip->close();
			
			if(!file_exists($dirname.$project.'/download')) {
				mkdir($dirname.$project.'/download');	
			}
			
			rename($tmpdir.$project.'.zip',$dirname.$project.'/download/'.$project.'.zip');
		}
	}
	
	$dir = opendir($dirname);
	
	$projects = array();

	while($file = readdir($dir)) {
		if($file != '.' && $file != '..' && is_dir($dirname.$file))
		{
			testDownloadZip($file);
			array_push($projects, $file);
		}
	}

	closedir($dir);
	
	if(strcmp($projet, '') == 0) { $projet = $projects[0]; }
	
	function getProjectTitle($xmlFile) {
		$infosXml = simplexml_load_file($xmlFile);
			
		return $infosXml->title;
	}
	
	function getProjectYear($xmlFile) {
		$infosXml = simplexml_load_file($xmlFile);
			
		return $infosXml->year;
	}
	
	function getProjectAuthors($xmlFile) {
		$infosXml = simplexml_load_file($xmlFile);
		$auths = array();
		foreach($infosXml->authors->author as $auth) {
			array_push($auths, (string)$auth);
		}
		return implode(" - ", $auths);
	}
	
	function getProjectPublic($xmlFile) {
		$infosXml = simplexml_load_file($xmlFile);
			
		return $infosXml->public;
	}
	
	function getProjectNotes($xmlFile) {
		$infosXml = simplexml_load_file($xmlFile);
		$notes = array();
		foreach($infosXml->notes->note as $note) {
			array_push($notes, (string)$note);
		}
		return $notes;
	}
	
	function getProjectGameRules($xmlFile) {
		$infosXml = simplexml_load_file($xmlFile);
			
		return $infosXml->gamerules;
	}
	
	function getProjectGamePlay($xmlFile) {
		$infosXml = simplexml_load_file($xmlFile);
			
		return $infosXml->gameplay;
	}
	
?>
		<div class="span3">
		  <div class="well sidebar-nav">
			<ul class="nav nav-list">
				<?php
					foreach($projects as $p) {
				?>
				<li <?php if(strcmp($projet,$p) == 0) { echo 'class="active"'; } ?> ><a href="./index.php?action=projets&projet=<?php echo $p; ?>"><?php $t = getProjectTitle($dirname.$p.'/doc/infos.xml'); if($t != null) { echo $t; } else { echo $p; } ?> <?php $y = getProjectYear($dirname.$p.'/doc/infos.xml'); if($y != null) { echo '('.$y.')'; } ?></a></li>
				<hr>
				<?php		
					}
				?>
			</ul>
		  </div>
		</div>
		
		
		<div class="span9">
		
				<?php
					foreach($projects as $p) {
				?>
				<?php if(strcmp($projet, $p) == 0) { ?>
				<div class="row-fluid">
				 	<div class="span12">
			  			<div class="alert alert-info">
		  					<p><strong><?php $t = getProjectTitle($dirname.$p.'/doc/infos.xml'); if($t != null) { echo $t; } else { echo $p; } ?> <?php $y = getProjectYear($dirname.$p.'/doc/infos.xml'); if($y != null) { echo '('.$y.')'; } ?></strong></p><a class="btn btn-primary" href="<?php echo $dirname.$p.'/download/'.$p.'.zip'; ?>" >T&eacute;l&eacute;charger ce projet</a>
						</div>
			  		</div>
				</div>
			
				<div class="row-fluid"> 
		        	<p>
		        		<strong>Auteurs :</strong> <?php echo getProjectAuthors($dirname.$p.'/doc/infos.xml'); ?></strong>
		        	</p>
		        	<p>
						<strong>Public concern&eacute;&nbsp;</strong>: <?php echo getProjectPublic($dirname.$p.'/doc/infos.xml'); ?>
					</p>
					<p>
						<strong>Notes d'utilisation</strong>
	  				</p>
	  				<p>
						<ul>
							<?php $notes = getProjectNotes($dirname.$p.'/doc/infos.xml'); ?>
							<?php
								foreach($notes as $note) {
							?>
								<li><?php echo $note; ?></li>
							<?php	
								}
							?>
						</ul>
					</p>
					<?php echo getProjectGameRules($dirname.$p.'/doc/infos.xml'); ?>
					<?php echo getProjectGamePlay($dirname.$p.'/doc/infos.xml'); ?>
					<!-- div class="thumbnail" align="center">
						<img src="./images/projets/devint_snowboard.jpg" alt="snow board game">
					</div -->
		  		</div>
		  		<?php } ?>
				<?php		
					}
				?> 
		</div>
