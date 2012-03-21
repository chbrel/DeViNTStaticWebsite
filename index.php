<?php
	include_once('header.php');
	
	if( isset($_GET['action']) && $_GET['action'] != null)
	{
		switch($_GET['action'])
		{
			case '':
				include_once('./pages/home.php');
				break;
			case 'projets':
				include_once('./pages/projets.php');
				break;
			case 'photos':
				include_once('./pages/photos.php');
				break;
			case 'media':
				include_once('./pages/media.php');
				break;
			case 'about':
				include_once('./pages/about.php');
				break;
			case 'contact':
				include_once('./pages/contact.php');
				break;
			case 'send':
				include_once('./pages/send.php');
				break;
		}
	}
	else
	{
		include_once('./pages/home.php');
	}
		
		
	include_once('./footer.php');
?>