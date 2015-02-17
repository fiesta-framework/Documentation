<div class="span3">
	<ul class="nav nav-list">
		<li class="first"><a href="#aboutus">Quickstart</a></li>
		<li><a href="#profile">Version</a></li>
		<li <?php if(Route::current()=="installation") echo 'class="active"'; ?>><a href="<?php echo Links::get('doc_instal') ?>">Installation</a></li>
		<li <?php if(Route::current()=="configuration") echo 'class="active"'; ?>><a href="<?php echo Links::get('doc_config') ?>" target="_self">Configuration</a></li>
		<li <?php if(Route::current()=="routing") echo 'class="active"'; ?>><a href="<?php echo Links::get('doc_routing') ?>" target="_self">Routing & filters</a></li>
		<li <?php if(Route::current()=="views") echo 'class="active"'; ?>><a href="<?php echo Links::get('doc_views') ?>">Views</a></li>
		<li <?php if(Route::current()=="controllers") echo 'class="active"'; ?>><a href="<?php echo Links::get('doc_controllers') ?>">Controllers</a></li>
		<li><a href="">Resources & Html</a></li>
		<li><a href="">Errors & Logging</a></li>
		<li><a href="">Authetification</a></li>





		<li class="last"><a href="">Resources & Html</a></li>
	</ul>
</div>