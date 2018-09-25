<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 9/12/18
 * Time: 5:11 AM
 */
include_once( "nessusBack.php" );

$editor
    ->process($_POST)
    ->json();

