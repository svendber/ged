<?php

/*
 * Example PHP implementation used for the REST 'create' interface.
 */

include( "nessusBack.php" );

$editor
    ->process( $_GET )
    ->json();
