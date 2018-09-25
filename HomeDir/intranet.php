<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 9/14/18
 * Time: 4:58 AM
 */
include_once ('../layout/header.php');

?>

<script>

    var editor; // use a global for the submit and return data rendering in the examples

    $(document).ready(function() {
        editor = new $.fn.dataTable.Editor( {
            ajax: {
                create: {
                    type: 'POST',
                    url: '../backend/backendCRUD/nessusCRUD/create.php'
                },
                remove: {
                    type: 'POST',
                    url:  '../backend/backendCRUD/nessusCRUD/remove.php?id=_id_'
                },
                edit: {
                    type: 'POST',
                    url: '../backend/backendCRUD/nessusCRUD/edit.php?id=_id_'
                }
            },
            table: "#intranet",
            fields: [
                {
                    "label": "Kundenummer:",
                    "name": "kundenr"
                },
                {
                    "label": "Navn:",
                    "name": "navn",

                },
                {
                    "label": "Adresse:",
                    "name": "adresse_nr"
                },
                {
                    "label": "Postnummer:",
                    "name": "postnrby"
                },
                {
                    "label": "cvrnr:",
                    "name": "cvrnr"
                },
                {
                    "label": "Kontakt:",
                    "name": "kontaktperson"
                },
                {
                    "label": "Stats:",
                    "name": "statsuat"
                }
            ]
        } );

        $('#intranet').DataTable( {
            dom: "Bfrtip",
            // ajax: "../backend/getbackend.php",
            ajax: "../backend/getIntranetBack.php",
            serverSide: true,
            columns: [
                {
                    data: "kundenr"
                },
                {
                    data: "navn"
                },
                {
                    data: "adresse_nr"
                },
                {
                    data: "postnrby"
                },
                {
                    data: "cvrnr"
                },
                {
                    data: "kontaktperson"
                },
                {
                    data: "statsuat"
                }
            ],
            select: true,
            buttons: [
                { extend: "create", editor: editor },
                { extend: "edit",   editor: editor },
                { extend: "remove", editor: editor }
            ]
        } );
    } );



</script>

<body class="intranet">
<div class="container">
    <section>
        <h1>Intranet</h1>
        <div class="demo-html"></div>
        <table id="intranet" class="display" style="width:100%">
            <thead>
            <tr>
                <th>kundenr</th>
                <th>navn</th>
                <th>adresse</th>
                <th>postnr</th>
                <th>cvr</th>
                <th>kontaktperson</th>
                <th>stats</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>kundenr</th>
                <th>navn</th>
                <th>adresse</th>
                <th>post nr</th>
                <th>cvr</th>
                <th>kontaktperson</th>
                <th>stats</th>
            </tr>
            </tfoot>
        </table>
    </section>
</div>

</body>
