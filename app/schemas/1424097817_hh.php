<?php

/* Schema info
* @date : 2015/02/16 15:43:37(1424097817)
* @name : hh
* @object : table
*/


	/**
	 * Run the schemas.
	*/
	function up()
	{
		return true;

		/* Ex.	return Schema::create('tbl_test',function($tab)
			{
				$tab->string("column");
			});
			*/
	}

	/**
	 * Reverse the schemas.
	*/
	function down()
	{
		return true;

		// Ex.	 return Schema::drop('tbl_test');

	}

?>
