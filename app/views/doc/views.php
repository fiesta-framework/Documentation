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
			    			<h2>Views</h2>
			    			<p>Views constitués par HTML de votre application et le PHP dans une manière élégante qui manipule les contrôleurs de votre application, Les Vue sont stocker dans le répertoire  <span class="file_link">app/views</span></p>

			    			<p>Une vue simple pourrait ressembler à ceci:</p>
			    			<div class="space-up">
			    				<div class="script">
			    					<span class="script_cmnt"><?php echo htmlentities('<!-- View stocké in app/views/hello.php -->') ?></span>
			    					<span class="level_1 script_blue"><?php echo htmlentities("<html>"); ?></span>
			    					<span class="level_2 script_blue"><?php echo htmlentities("<body>"); ?></span>
			    					<span class="level_3">
										<span class="script_blue"><?php echo htmlentities('<p>') ?></span>
			    						<?php echo htmlentities(' Hello <?php echo $nom ?> ') ?>
			    						<span class="script_blue"><?php echo htmlentities('</p>') ?></span>
			    					</span>
			    					<span class="level_2 script_blue"><?php echo htmlentities("</body>"); ?></span>
				    				<span class="level_1 script_blue"><?php echo htmlentities("</html>"); ?></span>
				    			</div>
				    			<p>L'apelle de cette view ressembler à ceci :</p>
				    			<div class="script">
				    			<span class="script_blue">Route</span>::<span class="script_green">get</span>(<span class="script_red">'/'</span>, <span class="script_green">function</span>()<br>
								{<br>
    							<div class="script_tab"></div><span class="script_green">return</span> <span class="script_blue">View</span>::<span class="script_green">make</span>(<span class="script_red">'hello'</span>,<span class="script_green"> array</span>(<span class="script_red">'nom'</span>,<span class="script_red">'Youssef'</span>));<br>
								});</div>
			    			</div>
			    			<div class="space-up">
				    			<h3>L'appel d'une view</h3>
				    			<p>En Fiesta nous appelant vue à l'aide de la methode<span class="file_link">View::make()</span> La méthode qu'elle accepte un paramètre :</p>
				    			<div class="script">
				    				<span class="script_blue">View</span>::<span class="script_green">make</span>(<span class="script_red">'le-nom-de-view'</span>);
				    			</div>
				    			<p>Si la view que vous appeler est dans en répertoire sous le répertoire <span class="file_link">app/views</span> L'appel de méthode doit être précédé par le nom de répertoire séparant par un point avec le nom du view comme ceci :</p>
				    			<p>Voici la view qu'on va appeler, remarquer que la view est stockée dans le répertoire <span class="file_link">app/views/home</span></p>
				    			<div class="script">
			    					<span class="script_cmnt"><?php echo htmlentities('<!-- View stocké in app/views/home/hello.php -->') ?></span>
			    					<span class="level_1 script_blue"><?php echo htmlentities("<html>"); ?></span>
			    					<span class="level_2 script_blue"><?php echo htmlentities("<body>"); ?></span>
			    					<span class="level_3">
										<span class="script_blue"><?php echo htmlentities('<p>') ?></span>
			    						<?php echo htmlentities(' Hello Visitor ') ?>
			    						<span class="script_blue"><?php echo htmlentities('</p>') ?></span>
			    					</span>
			    					<span class="level_2 script_blue"><?php echo htmlentities("</body>"); ?></span>
				    				<span class="level_1 script_blue"><?php echo htmlentities("</html>"); ?></span>
				    			</div>
				    			<p>Alors l'appel de cette view doit être comme ça :</p>
				    			<div class="script">
				    				<span class="script_blue">View</span>::<span class="script_green">make</span>(<span class="script_red">'home.hello'</span>);
				    			</div>
			    			</div>
			    			<div class="space-up">
				    			<h3>Passer des valeurs à une view</h3>
				    			<p>Pour passer des valeurs à une vue vous devez passer un <span class="file_link">array()</span> de données contiennent les valeurs et leurs noms :</p>
				    			<div class="script">
				    				<span class="script_blue">View</span>::<span class="script_green">make</span>(<span class="script_red">'home.hello'</span>,<span class="script_green">array</span>(<span class="script_red">'nom'</span>,<span class="script_red">'youssef'</span>));
				    			</div>
				    			<div class="script">
			    					<span class="script_cmnt"><?php echo htmlentities('<!-- View stocké in app/views/home/hello.php -->') ?></span>
			    					<span class="level_1 script_blue"><?php echo htmlentities("<html>"); ?></span>
			    					<span class="level_2 script_blue"><?php echo htmlentities("<body>"); ?></span>
			    					<span class="level_3">
										<span class="script_blue"><?php echo htmlentities('<p>') ?></span>
			    						<?php echo htmlentities(' Hello <?php echo $nom ?> ') ?>
			    						<span class="script_blue"><?php echo htmlentities('</p>') ?></span>
			    						<span class="script_cmnt"><?php echo htmlentities('<!-- Produit : Hello Youssef -->') ?></span>
			    					</span>
			    					<span class="level_2 script_blue"><?php echo htmlentities("</body>"); ?></span>
				    				<span class="level_1 script_blue"><?php echo htmlentities("</html>"); ?></span>
				    			</div>
			    			</div>
			    			<div class="space-up">
				    			<h3>Stockage d'une view</h3>
				    			<p>Pour stocker une view dans un variable en utilisant la methode <span class="file_link">View::get()</span></p>
				    			<div class="script">
				    			<span class="script_blue">Route</span>::<span class="script_green">get</span>(<span class="script_red">'/'</span>, <span class="script_green">function</span>()<br>
								{<br>
    							<div class="script_tab"></div>$view =  <span class="script_blue">View</span>::<span class="script_green">get</span>(<span class="script_red">'hello'</span>,<span class="script_green"> array</span>(<span class="script_red">'nom'</span>,<span class="script_red">'Youssef'</span>));<br>
								});</div>
			    			</div>
			    			<div class="space-up">
				    			<h3>Smarty Templating</h3>
				    			<p>Fiesta Utilise Smarty.</p>
				    			<p>Smarty est un moteur de template pour le langage PHP. Il est rapide et permet la gestion des caches.Il facilite la séparation entre la logique applicative et la présentation (<b>Source : Wikipedia</b>)</p>
				    			<p>Tous les Fichier de Smarty doivent utiliser l'extention <span class="file_link">.tpl.php</span></p>
				    			<p>Pour plus des infos sur Smarty visiter le <a href="http://www.smarty.net/">site Web</a> officiel de Smarty</p>
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