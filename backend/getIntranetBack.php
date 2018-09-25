<?php

/*
 * Example PHP implementation used for the REST 'get' interface
 */

include_once( "intranetback.php" );

$editor
	->process($_POST)
	->json();

