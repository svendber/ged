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
use DataTables\Editor;
use DataTables\Editor\Field;
use DataTables\Editor\Format;
use DataTables\Editor\Validate;


// Build our Editor instance and process the data coming from _POST
$editor = Editor::inst( $db, 'crapper_customer_intranet', 'kundenr' )
    ->fields(
        Field::inst( 'kundenr' ),
        Field::inst( 'navn' )
/*            ->validator( Validate::dateFormat( 'D, j M y' ) )
            ->getFormatter( Format::dateSqlToFormat( 'D, j M y' ) )
            ->setFormatter( Format::dateFormatToSql( 'D, j M y' ) )*/,
        Field::inst( 'adresse_nr' ),
        Field::inst( 'postnrby' ),
        Field::inst( 'cvrnr' ),
        Field::inst( 'kontaktperson' ),
        Field::inst( 'statsuat' )
    );

