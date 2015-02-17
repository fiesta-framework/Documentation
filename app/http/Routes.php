<?php 

/*
|----------------------------------------------
| App Routes
|----------------------------------------------
| hna route dial l application dialk aya route 
| khask t7eto hena 
|
|
*/

Route::get("/",function()
{	
	return View::make('doc.configuration');
});

Route::get("configuration",function()
{	
	return View::make('doc.configuration');
});

Route::get("routing",function()
{	
	return View::make('doc.routing');
});

Route::get("installation",function()
{	
	return View::make('doc.installation');
});

Route::get("views",function()
{	
	return View::make('doc.views');
});

Route::get("controllers",function()
{	
	return View::make('doc.controllers');
});
