<?php
	$projet = ""; if(isset($_GET['projet'])) { $projet = htmlspecialchars($_GET['projet']); }
	if(strcmp($projet, '') == 0) { $projet = 'vocalyze'; }
?>
		<div class="span3">
		  <div class="well sidebar-nav">
			<ul class="nav nav-list">
				<li <?php if(strcmp($projet,'vocalyze') == 0) { echo 'class="active"'; } ?> ><a href="./index.php?action=projets&projet=vocalyze">VocalyzeSIVOX</a></li>
				<hr>
				<li <?php if(strcmp($projet,'devint_snowboard_2008') == 0) { echo 'class="active"'; } ?> ><a href="./index.php?action=projets&projet=devint_snowboard_2008">Snowboard Game (2008)</a></li>
				<hr>
				<li <?php if(strcmp($projet,'michel_le_petit_devint_2009') == 0) { echo 'class="active"'; } ?> ><a href="./index.php?action=projets&projet=michel_le_petit_devint_2009">Les aventures de Michel le Petit DeViNT (2009)</a></li>
				<hr>
				<li <?php if(strcmp($projet,'danse_avec_maurice_2010') == 0) { echo 'class="active"'; } ?> ><a href="./index.php?action=projets&projet=danse_avec_maurice_2010">Danse avec Maurice (2010)</a></li>
				<hr>
			</ul>
		  </div>
		</div>
		
		
		<div class="span9">
			<?php if(strcmp($projet, 'vocalyze') == 0) { ?>
	 		<div class="row-fluid">
			 	<div class="span12">
		  			<div class="alert alert-info">
	  					<p><strong>VocalyzeSIVOX (2005, 2006, 2007 et 2008)</strong></p>
					</div>
		  		</div>
			</div>
		
			<div class="row-fluid">
				<p>
	        		<strong>Auteurs</strong> : élèves SI3 et SI4, enseignants département SI
				</p>
				<p>
					<strong>Quelques explications</strong>
				</p>
				<p>
					La synthèse vocale libre et gratuite SIVOX est installée dans le dossier VocalyzeSIVOX, au même niveau d’arborescence que les jeux DeViNT. SIVOX utilise MBROLA, le projet de l’Université Polytechnique de Mons (cf. <a href="http://tcts.fpms.ac.be/synthesis/mbrola.html">http://tcts.fpms.ac.be/synthesis/mbrola.html</a>). Si sa fonction première est de fournir des voix de synthèse aux projets, SIVOX peut être utilisée comme un projet à part entière.
				</p>
				<p>
					<strong>Utiliser la synthèse vocale SIVOX sous Windows</strong>
				</p>
				<p>
					Afin d’évaluer la synthèse vocale, il est possible de saisir des textes, de les faire lire avec plusieurs voix, plusieurs intonations, ou encore d’ajuster l’intonation textuellement ou graphiquement. Pour cela, sélectionner VocalyzeSIVOX dans le menu de lancement, une fenêtre s’ouvre, et il faut :
					<ul>
						<ol>définir un projet et un auteur, dans le menu Fichier/Nouveau Projet</ol>
						<ol>saisir un texte dans la fenêtre Texte du projet en haut et à gauche</ol>
						<ol>créer une fenêtre d’intonation (bouton Prosodie/Ajouter une nouvelle prosodie)</ol>
						<ol>choisir une intonation ou prosodie parmi les trois possibles (Prosodie/Sélection de la prosodie)</ol>
						<ol>appliquer la prosodie choisie au texte saisi  (bouton Synchroniser)</ol>
						<ol>choisir une voix parmi les sept voix disponibles, bouton Configuration/Voix du mode sonore</ol>
						<ol>le bouton Jouer/ Stop permet alors d’entendre le texte lu à voix haute par SIVOX</ol>
					</ul>
				</p>
				<p>
					La fenêtre en bas à gauche contient la description textuelle de la prosodie à appliquer au texte à lire : on trouve un phonème sur chaque ligne, avec sa durée et son intonation.<br />
<strong>o~   180   0   100   50   150</strong><br />
Par exemple, la ligne ci-dessus stipule un phonème o~ (c'est-à-dire qu’on entend le son « on ») de durée 180 millisecondes, 0.18 secondes. La fréquence fondamentale de la voix vaut 100 Hz au début du son (0%), puis devient 150 Hz à 50% de la durée, soit 90 millisecondes : entre ces deux points (ou pitch patterns), la variation de la fréquence vocale est linéaire. Certaines informations de cette fenêtre sont éditables, par exemple la durée et les informations de fréquence. Les phonèmes sont tirés de l’alphabet phonétique SAMPA utilisé par  MBROLA.
				</p>
				<p>
					<table border="1px">
						<tr><th>phonème</th><th>par exemple</th><th>phonème</th><th>par exemple</th></tr>
						<tr><td>i</td><td>idiot, ami</td><td>H</td><td>huile, nuage</td></tr>
						<tr><td>e</td><td>ému, été</td><td>p</td><td>patte, repas, cap</td></tr>
						<tr><td>E</td><td>perdu, maison</td><td>t</td><td>tête, net</td></tr>
						<tr><td>A</td><td>alarme, patte</td><td>k</td><td>carte, écaille, bec</td></tr>
						<tr><td>A</td><td>bâton, patte</td><td>b</td><td>bête, habile, robe</td></tr>
						<tr><td>O</td><td>obstacle, corps</td><td>d</td><td>dire, rondeur, chaud</td></tr>
						<tr><td>o</td><td>auditeur, beau</td><td>g</td><td>gauche, égal, bague</td></tr>
						<tr><td>u</td><td>coupable, loup</td><td>f</td><td>feu, affiche, chef</td></tr>
						<tr><td>y</td><td>punir, élu</td><td>s</td><td>soeur, assez, passe</td></tr>
						<tr><td>2</td><td>creuser, deux</td><td>S</td><td>chanter, machine, poche</td></tr>
						<tr><td>9</td><td>malheureux, peur</td><td>v</td><td>vent, inventer, rêve</td></tr>
						<tr><td>@</td><td>petite, fortement</td><td>z</td><td>zéro, raisonner, rose</td></tr>
						<tr><td>e~</td><td>peinture, matin</td><td>Z</td><td>jardin, manger, piège</td></tr>
						<tr><td>a~</td><td>vantardise, temps</td><td>l</td><td>long, élire, bal</td></tr>
						<tr><td>o~</td><td>rondeur, bon</td><td>R</td><td>rond, chariot, sentir</td></tr>
						<tr><td>9~</td><td>lundi, brun</td><td>m</td><td>madame, aimer, pomme</td></tr>
						<tr><td>j</td><td>piétiner, choyer</td><td>n</td><td>nous, punir, bonne</td></tr>
						<tr><td>w</td><td>quoi, fouine</td><td>N</td><td>ping, pong</td></tr>
						<tr><td>_</td><td>silence marker</td><td></td><td></td></tr>
					</table>
				</p>
				<p>
					Le bouton Mode Sonore permet de lire l’interface de la synthèse à voix haute.
La fenêtre intitulée Graphe de Prosodie graphique en bas et à droite représente l’intonation et permet de la modifier avec la souris. Il faut ensuite utiliser le bouton Synchroniser pour en tenir compte.
				</p>
				<div class="thumbnail" align="center">
					<img src="./images/projets/vocalyze.jpg" alt="vocalyze">
				</div>
	  		</div>
	  		<?php } ?>
	  		
	  		<?php if(strcmp($projet, 'devint_snowboard_2008') == 0) { ?>
	  		<div class="row-fluid">
			 	<div class="span12">
		  			<div class="alert alert-info">
	  					<p><strong>Snow  Board Game (SI 3, DeViNT 2008)</strong></p>
					</div>
		  		</div>
			</div>
		
			<div class="row-fluid"> 
	        	<p>
	        		<strong>Auteurs :</strong> Cyril  BONDUE - Joris BUCHOU - Antoine MARLIER - Chlo&eacute; ROGER</strong>
	        	</p>
	        	<p>
					<strong>Public concern&eacute;&nbsp;</strong>: MV, voire NV
				</p>
				<p>
					<strong>Notes d'utilisation</strong>
  				</p>
  				<p>
					<ul>
						<li>
						On joue avec un p&eacute;riph&eacute;rique de jeu en forme de planche, qui se comporte comme une souris &agrave; boules, ou avec une souris &agrave; boules, avec un adaptateur PS2- USB, mais on peut jouer aussi avec les fl&egrave;ches directionnelles du clavier.</li>
						<li>
						  Le jeu est insensible aux commandes du clavier durant la  descente d&rsquo;une piste. </li>
						<li>Pour quitter le jeu, taper Alt + F4 au clavier ou fermer  la fen&ecirc;tre.&nbsp; </li>
					</ul>
				</p>
				<p>
					<strong>R&egrave;gles du jeu</strong>
  				</p>
				<p>
					Le jeu SnowBoard  Game est un jeu de simulation de  snowboard. Le joueur doit descendre une piste, et le but du jeu est d'arriver  en bas de la piste en ayant percut&eacute; aussi peu d&rsquo;arbres que possible. A la fin  de la descente, le score s'affiche, ainsi que les 10 meilleurs scores sur cette  piste.
				</p>
				<p>
					<strong>Comment jouer (commandes, aides) </strong>
  				</p>
				<p>
					Pour ce jeu, on peut utiliser le snowboard en se penchant en  avant et en arri&egrave;re afin de faire d&eacute;placer le personnage. &nbsp;Le joueur peut aussi utiliser les fl&egrave;ches  droite et gauche ainsi que la souris. Le menu d'accueil contient quatre  rubriques, o&ugrave; l'on navigue avec les fl&egrave;ches haut  et bas.
				</p>
				<div class="thumbnail" align="center">
					<img src="./images/projets/devint_snowboard.jpg" alt="snow board game">
				</div>
	  		</div>
	  		<?php } ?>
	  		
	  		<?php if(strcmp($projet, 'michel_le_petit_devint_2009') == 0) { ?>
	  		<div class="row-fluid">
			 	<div class="span12">
		  			<div class="alert alert-info">
	  					<p><b>Les aventures de Michel le petit DeViNT (SI 3, DeViNT 2009)</b></p>
					</div>
		  		</div>
			</div>
			
			<div class="row-fluid">
				<p>
					<strong>Auteurs</strong> : Nicolas Mottin , Michel LobatoPinto, Fredrik Holmstrom, Clement Rousselle
				</p>
				<p>
					<strong>R&egrave;gles du jeu (contexte, objectif, d&eacute;roulement)</strong>
				</p>
				<p>
					<ul>
					<li><strong>Mode Normal</strong></li>
					<p> Le personnage principal est michel, il doit parcourir le monde pour sauver sa copine.<br>
					 Lorsque vous entendez une combinaison, vous devez appuyer sur les touches indiquées pour que michel saute l'obstacle. Si vous entrez une mauvaise combinaison ou que vous l'entrez trop tard, alors vous perdez une vie.<br>
					Vous disposez de 3 vies au départ. Le jeu se termine lorsque vous perdez toute vos vies ou lorsque vous arrivez à la fin du jeu et délivrez la petite amie de Michel.<br>
					Si vous finissez un niveau sans perdre de vie, vous gagnerez une vie</p>
					<li><strong>Mode Score</strong></li>
					<p> Vous controlez Michel et vous devez aller le plus loin possible dans le niveau. Aprés chaque obstacle, la vitesse augmente et de temps en temps le nombre de touche pour la combinaison varie (allant de 1 à 3). <br>
					Lorsque vous perdez, si vous êtes dans le top 10 vous pourrez enregistrer votre score</p>
					<li><strong>Mode Multijoueur</strong></li>
					<p> vous devez vous mesurer à un adversaire humain, en utilisant un touche clavier le plus vite possible</p>
					
					</ul>
				</p>
				<p>
					<strong>Comment jouer (commandes, aides) </strong>
				</p>
				<p>
					D&eacute;s qu'on lance le jeu, on a acc&egrave;s &agrave; des explications suffisantes. Le menu d'accueil contient quatre rubriques, o&ugrave; l'on navigue avec les fl&egrave;ches haut et bas. On utilise la touche entree pour valider, et echap pour quitter l'application :</p>
					<ul>
						<li>Mode histoire</li>
						<li>Mode score</li>
						<li>Mode Multijoueur</li>
						<li>Option</li>
						<li>Quitter (touche Echap)  </li>
						<li>Aide (F1)</li>
						<li>Pause (P) durant le jeu</li>
					</ul>
				</p>
				<p>
					<strong>Public concern&eacute;</strong> : Convient &agrave; tout public voyant et mal voyant, (adolescents)
				</p>
				<div class="thumbnail" align="center">
					<img src="./images/projets/michel_le_petit_devint.jpg" alt="michel le petit devint">
				</div>
	  		</div>
	  		<?php } ?>
	  		
	  		<?php if(strcmp($projet, 'danse_avec_maurice_2010') == 0) { ?>
	  		<div class="row-fluid">
			 	<div class="span12">
		  			<div class="alert alert-info">
	  					<p><b>Danse avec Maurice (SI3, DeViNT 2010)</b></p>
					</div>
		  		</div>
			</div>
		
			<div class="row-fluid">
				<p>
					<strong>Auteurs</strong> : Stephane BOUTRUCHE, Nohri GRAOUDI, Romain RICHTER, Mathieu RUL
				</p>
				<p>
					<strong>Public concern&eacute; </strong> : MV et NV, tous publics
				</p>
				<p>
					<strong>Notes d'utilisation (&agrave; savoir sur ce jeu) </strong>
				</p>
				<p>
					<ul>
					  <li>il faut avoir deux wiimotes et un dongle bluetooth pour pouvoir appr&eacute;cier le jeu.</li>
					  <li>pour pouvoir jouer avec les wiimotes, il faut les connecter avant de lancer le jeu. Le jeu se jouera au clavier sinon.</li>
					  <li>Lorsque vous jouez avec les deux wiimotes, il faut bien pointer le viseur (le haut de la wiimote) de chaque wiimote dans les direction indiquées respectivement.</li>
					  <li>Vous pouvez rajouter vos propres MP3 dans le dossier ressources/musiques/</li>
					</ul>
				</p>
				<p>
					<strong>R&egrave;gles du jeu (contexte, objectif, d&eacute;roulement)</strong>
				</p>
				<p>
					Danse avec Maurice est principalement un jeu de m&eacute;morisation. En effet, le joueur doit reproduire une s&eacute;rie de mouvement pr&eacute;alablement montr&eacute;e et dict&eacute;e.<br />
Chaque partie est rythm&eacute;e par diff&eacute;rentes musiques auxquelles correspondront des niveaux de difficultés (en fonction du tempo). <br />
Quand le joueur a fini de reproduire la s&eacute;rie de mouvements, il passe ainsi au niveau suivant. La partie est termin&eacute;e lorsque le joueur a perdu toutes ses vies.
				</p>
				<p>
					<strong>Comment jouer (commandes, aides)</strong>
				</p>
				<p>
					D&eacute;s qu'on lance le jeu, on a acc&egrave;s &agrave; des explications suffisantes. Le menu d'accueil contient quatre rubriques, dont une rubrique d'aide, o&ugrave; l'on navigue avec les fl&egrave;ches haut et bas.<br>On utilise la touche "Entr&eacute;e" pour valider, on peut utiliser la touche Echap pour terminer :<br />
					<ul>
					  <li>Danser avec Maurice </li>
					  <li>Choisir une musique </li>
					  <li>Meilleurs Scores</li>
					  <li>Quitter (touche Echap)</li>
					</ul>
				</p>
				<p>
					<strong>Pour jouer avec les Wiimotes</strong>
				</p>
				<p>
					Il faut tout d'abord connecter deux p&eacute;rip&eacute;hriques wiimote en utilisant la liaison Bluetooth de l'ordinateur, et placer un Sensor bar qui &eacute;met un rayonnement pour la wiimote. Dans certains cas, la liaison Bluetooth est d&eacute;j&agrave; install&eacute;e, dans d'autres cas il faut ajouter une cl&eacute; bluetooth USB et installer un driver ou pile Bluetooth. L'installation du driver Bluetooth n'est pas ma&icirc;tris&eacute;e totalement, sachez que Danse avec Maurice a &eacute;t&eacute; test&eacute; avec la pile Windows Stack by Toshiba sous windows XP.<br />
Si les deux wiimotes sont bien connect&eacute;es, Danse avec Maurice les d&eacute;tecte et les fait vibrer, et il suffit ensuite de reproduire les mouvements dict&eacute;s tout en faisant attention de bien pointer la sensor bar.
				</p>
				<p>
					<strong>Jouer avec le clavier</strong>
				</p>
				<p>
					Au clavier, les touches &agrave; utiliser sont les suivantes :<br>
					<h4>Bras gauche :<br />
					</h4>
					<ul>
					  <li>Haut : touche A</li>
					  <li>C&ocirc;t&eacute; : touche Q</li>
					  <li>Bas : touche W</li>
					</ul>
					<h4>Bras droit :<br />
					</h4>
					<ul>
					  <li>Haut : touche Z</li>
					  <li>C&ocirc;t&eacute; : touche S</li>
					  <li>Bas : touche X</li>
					</ul>
				</p>
				<div class="thumbnail" align="center">
					<img src="./images/projets/danse_avec_maurice.jpg" alt="danse avec maurice">
				</div>
	  		</div>
	  		<?php } ?> 
		</div>