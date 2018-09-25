<?php

/*
 * Example PHP implementation used for the REST 'get' interface
 */

include( "nessusBack.php" );

$editor
	->process($_POST)
	->json();

