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
			    			<h2>Configuration</h2>
			    			<p>Toutes les routes de l'application sont définie dans le répertoire <span class="file_link">app/config</span>, l'appelle d'une route doivent être consisté d'URL et la function de callback</p>
			    			<div class="space-up">
				    			<h4>Accès aux les variables de configuration</h4>
				    			<p>vous pouvez accéder à la valeur de configuration en utilisant la class <span class="file_link">Config</span> : </p>
				    			<div class="script">
				    				<span class="script_blue">Config</span>::<span class="script_green">get</span>(<span class="script_red">'app.url'</span>);
				    			</div>
			    			</div>

			    			<div class="space-up">
				    			<h4>les variables de configuration</h4>
				    			<p>Voici les différents variables de configuration</p>
				    			<table class="table table-striped table-hover left-table">
						    		<thead>
						    			<tr>
						    				<th class="th-black">Variables</th>
						    				<th style="background:#478bc9">Définition</th>
						    			</tr>
						    		</thead>
						    		<tbody>
						    			<tr>
						    				<td>app.project</td>
						    				<td>Le nom de projet</td>
						    			</tr>
						    			<tr>
						    				<td>app.owner</td>
						    				<td>Le nom de propriétaire de projet</td>
						    			</tr>
						    			<tr>
						    				<td>app.projectFolder</td>
						    				<td>Si vous n'avez pas placé le framework dans le dossier root de serveur, entrez le nom de dossier qui contient le framework</td>
						    			</tr>
						    			<tr>
						    				<td>app.url</td>
						    				<td>l'URL de root de votre projet</td>
						    			</tr>
						    			<tr>
						    				<td>app.title</td>
						    				<td>Le titre par défaut</td>
						    			</tr>
						    			<tr>
						    				<td>auth.table</td>
						    				<td>Le nom de table qui contient les utilisateurs qui doivent être authentifié</td>
						    			</tr>
						    			<tr>
						    				<td>auth.table</td>
						    				<td>La liste des columns de table qui doivent être crypté avant les vérifier</td>
						    			</tr>
						    			<tr>
						    				<td>auth.table</td>
						    				<td>La liste des columns de table qui doivent être crypté avant les vérifier</td>
						    			</tr>
						    			<tr>
						    				<td>auth.saved_fields</td>
						    				<td>La liste des columns de table qui sont stocker dans les variables de session</td>
						    			</tr>
						    			<tr>
						    				<td>auth.rememeber_cookie</td>
						    				<td>Le nom de cookie pour stocker la valeur de authentification si l'utilisateur veut que le navigateur rappeler leur information</td>
						    			</tr>
						    			<tr>
						    				<td>auth.csrf_token</td>
						    				<td>Le nom de input hidden de CSRF (<a href="http://fr.wikipedia.org/wiki/Cross-Site_Request_Forgery">cross-site request forgery</a>)</td>
						    			</tr>
						    			<tr>
						    				<td>database.default</td>
						    				<td>Le nom de SGBD utilisé par votre application</td>
						    			</tr>
						    			<tr>
						    				<td>database.migration</td>
						    				<td>Le nom de table de base de données ou stockait les infos migrations</td>
						    			</tr>
						    			<tr>
						    				<td>lang.default</td>
						    				<td>La langue par défaut de votre application</td>
						    			</tr>
						    			<tr>
						    				<td>lang.cookie</td>
						    				<td>Le cookie où Fiesta stocké les infos de la langue</td>
						    			</tr>
						    			<tr>
						    				<td>lang.authorized</td>
						    				<td>Autorisation de votre application true si votre application est autorisée</td>
						    			</tr>
						    			<tr>
						    				<td>lang.authorized</td>
						    				<td>Autorisation de votre application true si votre application est autorisée</td>
						    			</tr>
						    			<tr>
						    				<td>lang.authorized</td>
						    				<td>Autorisation de votre application true si votre application est autorisée</td>
						    			</tr>
						    			<tr>
						    				<td>loggin.debug</td>
						    				<td>l'affichage des erreurs (debugage du l'application) true pour affichier les erreurs <span class="msg_important">Attention: vous devez pas mettre <span class="script">app.debug</span> en <span class="script">true</span> en production de votre application , jamais le faire</span></td>
						    			</tr>
						    			<tr>
						    				<td>loggin.msg</td>
						    				<td>le message apparaît se il existe une erreur lorsque <span class="file_link">loggin.debug</span> est <span class="file_link">true</span></td>
						    			</tr>
						    			<tr>
						    				<td>loggin.log</td>
						    				<td>Le fichier où Fiesta stock les <span class="file_link">error_log</span> de votre application</td>
						    			</tr>
						    			<tr>
						    				<td>mail.host</td>
						    				<td>le serveur SMTP</td>
						    			</tr>
						    			<tr>
						    				<td>mail.port</td>
						    				<td>le port de serveur SMTP (25,465,587)</td>
						    			</tr>
						    			<tr>
						    				<td>mail.from</td>
						    				<td>l'email et le nom de compte source d'e-mail</td>
						    			</tr>
						    			<tr>
						    				<td>mail.encryption</td>
						    				<td>le cryptage de serveur SMTP(tls-ssl) </td>
						    			</tr>
						    			<tr>
						    				<td>mail.username</td>
						    				<td>le nom d'utilisateur de serveur</td>
						    			</tr>
						    			<tr>
						    				<td>mail.password</td>
						    				<td>le mot de passe d'utilisateur de serveur</td>
						    			</tr>
						    			<tr>
						    				<td>mail.subject</td>
						    				<td>le sujet par défaut de les e-mail</td>
						    			</tr>
						    			<tr>
						    				<td>panel.route</td>
						    				<td>La route pour accéder au Fiesta Panel</td>
						    			</tr>
						    			<tr>
						    				<td>panel.password1</td>
						    				<td>Le mot de passe 1 pour accéder au Fiesta Panel</td>
						    			</tr>
						    			<tr>
						    				<td>panel.password2</td>
						    				<td>Le mot de passe2 pour accéder au Fiesta Panel</td>
						    			</tr>
						    			<tr>
						    				<td>panel.mainColor</td>
						    				<td>Personnalisation de votre panel</td>
						    			</tr>
						    			<tr>
						    				<td>panel.tabsColor</td>
						    				<td>Personnalisation de votre panel</td>
						    			</tr>
						    			<tr>
						    				<td>security.key1</td>
						    				<td>Une chaine de 32 caractères aléatoire</td>
						    			</tr>
						    			<tr>
						    				<td>security.key2</td>
						    				<td>Une chaine de caractères  de votre choix</td>
						    			</tr>
						    			<tr>
						    				<td>view.pagination_param</td>
						    				<td>Le paramètre de <span class="file_link">$_GET</span> de cpage courant de pagination</td>
						    			</tr>
						    			<tr>
						    				<td>view.pagination_style</td>
						    				<td>Le style de pagination</td>
						    			</tr>
						    			<tr>
						    				<td>view.pagination_class</td>
						    				<td>La Class de CSS de pagination par defaut {bootstrap} pour le style de Bootstrap</td>
						    			</tr>
						    		</tbody>
			    				</table>
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