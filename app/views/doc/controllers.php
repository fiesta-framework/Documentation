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
			    			<h2>Controllers</h2>
			    			<p>Les contrôleurs sont un des elements de la méthode <b>MVC</b> qui manipule la mise à jour de données dans la base de données</p>
			    			<p>Tous les contrôleurs sont stockés dans<span class="file_link">app/controllers</span> et pour créer un modèle de contrôleur vous devez utiliser <a href="<?php echo Links::get("doc_panel") ?>">Fiesta Panel</a></p>
			    			<div class="space-up">
				    			<h4>Contrôleur Basique</h4>
				    			<p>Une class de controleur doit herité de la class Controller</p>
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