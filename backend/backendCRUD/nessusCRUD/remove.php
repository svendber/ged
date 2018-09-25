<?php

/*
 * Example PHP implementation used for the REST 'create' interface.
 */

include("../../nessusBack.php");
//print ("Hello");
$editor
    ->process( $_POST )
    ->json();
