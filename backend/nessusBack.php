<?php
/**
 * Created by PhpStorm.
 * User: e
 * Date: 6/17/18
 * Time: 9:25 AM
 */


// DataTables PHP library and database connection
//include( "../Editor-PHP-1.7.3/php/DataTables.php");
include( dirname(__FILE__)."/../Editor-PHP-1.7.3/php/DataTables.php" );

// Alias Editor classes so they are easy to use
use DataTables\Editor,
DataTables\Editor\Field,
DataTables\Editor\Format,
 DataTables\Editor\Validate,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,

	DataTables\Editor\ValidateOptions;

// Build our Editor instance and process the data coming from _POST
$editor = Editor::inst( $db, 'nessus_vulnerability')
    ->fields(
        Field::inst( 'ip' )
            ->validator( Validate::notEmpty( ValidateOptions::inst())),
        Field::inst( 'mac' ),
        Field::inst( 'netbiosname' ),
        Field::inst( 'os' ),
        Field::inst( 'start' ),
        Field::inst( 'stop' ),
        Field::inst( 'plugin_id' ),
        Field::inst( 'plugin_name' ),
        Field::inst( 'port' ),
        Field::inst( 'protocol' ),
        Field::inst( 'cve' ),
        Field::inst( 'cvss_base_score' ),
        Field::inst( 'service_name' ),
        Field::inst( 'description' ),
        Field::inst( 'solution' )
    );



