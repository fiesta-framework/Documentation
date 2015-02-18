<!DOCTYPE html>
<html>
	<head>
		<?php Script::make('head'); ?>
	</head>

  	<body>
  	
	<?php Script::make('header'); ?>
    
	<!-- BEGIN SLIDER
	================================================== -->
	<div class="slider">
	    <div class="container">
	    	<div class="row">
	    		<div class="span12">
	
			    	<div class="slider-area">
			    		<ul class="slides">	
			    		
			    			<!-- SLIDE #1 -->
			    			<li>
		    				 	<div class="row">
			    				 	<div class="span12">
			    				 		
			    				 		<!-- slide #1 content -->
			    				 		<div class="vcenter">
			    				 			<h3 class="slider-heading"><span class="slider-highlight">COMPARE</span> OUR AWESOME PACKAGES</h3>
			    				 		</div>
			    				 		
			    				 	</div>
		    				 	</div>
			    			</li> 
			    		
			    		</ul>
			    	</div>
	    	
	    		</div>
	    	</div>
		</div>	
	</div>
    
	<!-- BEGIN MAIN BUBBLE
	================================================== -->
	<div class="container">
		<div class="row">
			<div class="span12 relative">
			
	    			<div class="bubble">
		    			<h4 class="left">DO YOU <span class="bold italic">LIKE</span> WHAT YOU SEE?</h4>
		    			<a class="btn btn-padded right">CONTACT US</a>
	    			</div>
				
				<div class="bubble-triangle"></div>
			</div>
		</div>
	</div>
    
    <div class="bubble-stripes"></div>
    
    <!-- BEGIN BREADCRUMB NAVIGATION
    ================================================== -->
    <div class="container">
    	<div class="row">
    		<div class="span12">
    			<div class="breadcrumb-container">
        			<ul class="breadcrumb">
        				<li><a href="#">Accueil</a> <span class="divider">/</span></li>
        				<li class="active">Documentation</li>
        			</ul>
    			</div>
    		</div>
    	</div>
    </div>
    
    <!-- 
    ================================================
    // BEGIN CONTENT
    ================================================ 
    -->
    <div class="content">
	    <div class="container">

	    <!-- OUR SERVICES
	    	================================================== -->
	    	
	    	<div class="row" style="margin-top:50px">
	    		
	    		<?php Script::make('documentation_nav'); ?>
	    		 
	    		<div class="span9">
		    		<div class="tab-content">
		    		
			    		
			    		<div class="tab-pane active" id="routing">
			    			<h2>Installation</h2>
			    			<div class="space-up">
				    			<h3>Installer Composer</h3>
				    			<p>Fiesta utilise <a href="http://getcomposer.org/">Composer</a>, Vous pouvez utiliser composer pour installer Fiesta et ses dépendances.</p>
				    			<p>Tout d'abord, télécharger et installer <a href="https://getcomposer.org/download/">Composer Windows installer</a> (c'est optionnel)</p>
			    			</div>
			    			<div class="space-up">
				    			<h3>Installer Fiesta</h3>
					    			<h4>Via Composer</h4>
					    			<p>Vous pouvez installer Fiesta via Composer en utilisent la commande <span class="file_link">create-project</span>dans votre terminal</p>
					    			<div class="script">
					    				composer create-project fiesta/fiesta --prefer-dist
					    			</div>
					    			<p>vous pouvez aussi includer le nom de projet :</p>
					    			<div class="script">
					    				composer create-project fiesta/fiesta nom-de-votre-projet--prefer-dist
					    			</div>
					    			<h4>Via Download</h4>
					    			<p>Fiesta est un framework open-source qui partage ses fichiers source dans <span class="file_link">GitHub</span>, Télécharger la <a href="https://github.com/fiesta-framework/Fiesta/releases">dernière version</a> de framework Fiesta et extrait son contenu dans un répertoire sur votre serveur.</p>					    			

			    			</div>
			    			<div class="space-up">
				    			<h3>Exigences du Fiesta</h3>
				    			<p>Fiesta a quelques exigences du système:</p>
				    			<li>
				    				<ul>PHP >= 5.4</ul>
				    			</li>
				    			<li>
				    				<ul>Activation de Extension mod_rewrite dans Apache.</ul>
				    			</li>
			    			</div>
			    			<div class="space-up">
				    			<h3>Configuration</h3>
				    			<p>Après l'installation de Fiesta vous devez modifier quelques paramètres de configuration dans <span class="file_link">app/config</span>, Mais d'abord vous devez modifier les clés de sécurité de votre projet dans <span class="file_link">app/config/security.php</span> ,key1 doit consiste d'une chaine aléatoire de 32 caractères et key2 doit être consisté d'une chaine de votre choix. <b>Si la clé d'application n'est pas réglée, vos données chiffrées ne seront pas sécurisées.</b></p>
				    			<p>Aussi vous devez régler le paramètre de l'URL root <span class="file_link">url</span> de votre projet que ce soit dans un serveur local où à distance dans <span class="file_link">app/config/app.php</span></p>
				    			<p>Ces paramètres sont obligatoires et importants à régler, mais après vous pouvez modifier les autres paramètres de configuration, pour plus d'infos voir la <a href="<?php echo Links::get('doc_config') ?>">configuration de Fiesta</a></p>
			    			</div>
			    			<div class="space-up">
				    			<h3>Apach</h3>
				    			<p>Fiesta livré avec fichier <span class="file_link">.htaccess</span> qui utilise URL rewriting, is vous utilisez Apache, Soyez sûr que vous avez activé l'extension mod_rewrite</p>
				    			
			    			</div>

			    			
			    		</div>
		    		</div>
	    		</div>
	    	</div> 


	    
	    	
	    	
	 	    	
	    </div> 	   	
	</div>	    	
	 
	<?php Script::make('footer'); ?>
 

    <?php Script::make('javascript'); ?>
    
   
  </body>
</html>