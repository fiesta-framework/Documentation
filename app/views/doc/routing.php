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
			    			<h2>Routing </h2>
			    			<p>Toutes les routes de l'application sont définie dans le fichier <span class="file_link">app/http/Routes.php</span>, l'appelle d'une route doivent être consisté d'URL et la function de callback</p>
			    			<div class="space-up">
				    			<h4>Routing GET Basique</h4>
				    			<div class="script">
				    			<span class="script_blue">Route</span>::<span class="script_green">get</span>(<span class="script_red">'/'</span>, <span class="script_green">function</span>()<br>
								{<br>
    							<div class="script_tab"></div><span class="script_green">echo</span> <span class="script_red">'Hello World'</span>;<br>
								});</div>
			    			</div>
			    			<div class="space-up">
				    			<h4>Routing POST Basique</h4>
				    			<p> Ce routes pour verifier si il y a des $_POST</p>
				    			<div class="script">
				    			<span class="script_blue">Route</span>::<span class="script_green">post</span>(<span class="script_red">'/'</span>, <span class="script_green">function</span>()<br>
								{<br>
    							<div class="script_tab"></div><span class="script_green">echo</span> <span class="script_red">'Hello World'</span>;<br>
								});</div>
			    			</div>
			    			<h2>Filters </h2>
			    			<div class="space-up">
				    			<p>Tous les filtres de l'application sont définie dans le fichier <span class="file_link">app/http/Filters.php</span></p>
				    			<p>les filtres sont des méthodes que s'exécute avant la requête de route pour vérifier une condition.
				    			si le filtre est <span class="file_link">true</span> alors le route s'exécute normalement </p>
				    			<p>Voici un filtre pour que les visiteurs de site peuvent voire le contenu de site seulement dans les jours de samedi : </p>

				    			<div class="script">
				    			<span class="script_blue">Route</span>::<span class="script_green">filter</span>("<span class="script_red">just_samedi</span>", <span class="script_green">function</span>()<br>
								{<br>
								<div class="script_tab"></div><span class="script_blue">if</span>(<span class="script_green">date</span>("<span class="script_red">D</span>") != "<span class="script_red">Sat</span>"){<br>
    							<div class="script_tab"></div><div class="script_tab"></div><span class="script_green">return</span> <span class="script_blue">false</span>;<br>
    							<div class="script_tab"></div>}<br>
    							<div class="script_tab"></div><span class="script_blue">else </span> <span class="script_green">else</span> <span class="script_blue">true</span>;<br>
								});
								</div>
								<p>l'implémentation de ce filtre est comme ça</p>
								<div class="script">
				    			<span class="script_blue">Route</span>::<span class="script_green">get</span>(<span class="script_red">'/'</span>, <span class="script_blue">array</span>("<span class="script_red">just_samedi</span>",<span class="script_green">function</span>()<br>
								{<br>
    							<div class="script_tab"></div><span class="script_green">echo</span> "<span class="script_red">Salut! c'est samedi</span>";<br>
								}));</div>

			    			</div>
			    			<h2>Routes de Controller </h2>
			    			<div class="space-up">
			    			<p>Vous pouvez déterminer un ensemble de routes vers les methodes statiques d'un Contrôler (index - show - add - ...)</p>
			    			<p>Cet exemple on a créé un contrôleur client, le route de ce contrôleur est comme ça</p>
			    			<div class="script">
				    			<span class="script_blue">Route</span>::<span class="script_green">resource</span>(<span class="script_red">'client'</span>, <span class="script_red">'clientCntrl'</span>);</div>
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
