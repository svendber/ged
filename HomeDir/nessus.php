<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 9/14/18
 * Time: 4:58 AM
 */
include_once ('../layout/header.php');
//include_once('../PHPWord/samples/Sample_09_Tables.php');
//
//$var = 'array osv';
//return $var;

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

/////ASDASDASDASDASDASDASDASDSAD
            table: "#nessus",
            fields: [
                {
                    label: "ip",
                    name: "ip"
                },
                {
                    label: "mac",
                    name: "mac",

                },
                {
                    label: "netbiosname",
                    name: "netbiosname"
                },
                {
                    label: "os",
                    name: "os"
                },
                {
                    label: "start",
                    name: "start"
                },
                {
                    label: "stop",
                    name: "stop"
                },
                {
                    label: "plugin_id",
                    name: "plugin_id"
                },
                {
                    label: "plugin_name",
                    name: "plugin_name"
                },
                {
                    label: "port",
                    name: "port"
                },
                {
                    label: "protocol",
                    name: "protocol"
                },
                {
                    label: "cve",
                    name: "cve"
                },
                {
                    label: "cvss_base_score",
                    name: "cvss_base_score"
                },
                {
                    label: "service_name",
                    name: "service_name"
                },
                {
                    label: "description",
                    name: "description"
                },
                {
                    label: "solution",
                    name: "solution"
                },

            ]
        } );

        $('#nessus').DataTable( {
            dom: "Bfrtip",
            // ajax: "../backend/getbackend.php",
            ajax: "../backend/getNessusBack.php",
            columns: [
                {
                    data: "ip"
                },
                {
                    data: "mac"
                },
                {
                    data: "netbiosname"
                },
                {
                    data: "os"
                },
                {
                    data: "start"
                },
                {
                    data: "stop"
                },
                {
                    data: "plugin_id"
                },
                {
                    data: "plugin_name"
                },
                {
                    data: "port"
                },
                {
                    data: "protocol"
                },
                {
                    data: "cve"
                },
                {
                    data: "cvss_base_score"
                },
                {
                    data: "service_name"
                },
                {
                    data: "description"
                },
                {
                    data: "solution"
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



<body class="dt-example">
<div class="container">
    <section>
        <h1>Nessus <span>version 2.0</span></h1>
        <div class="demo-html"></div>
        <table id="nessus" class="display" style="width:100%">
            <thead>
            <tr>
                <th>ip</th>
                <th>mac</th>
                <th>netbiosname</th>
                <th>os</th>
                <th>start</th>
                <th>stop</th>
                <th>plugin id</th>
                <th>plugin name</th>
                <th>port</th>
                <th>protocol</th>
                <th>cve</th>
                <th>cvss score</th>
                <th>service name</th>
                <th>description</th>
                <th>solution</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>ip</th>
                <th>mac</th>
                <th>netbiosname</th>
                <th>os</th>
                <th>start</th>
                <th>stop</th>
                <th>plugin id</th>
                <th>plugin name</th>
                <th>port</th>
                <th>protocol</th>
                <th>cve</th>
                <th>cvss score</th>
                <th>service name</th>
                <th>description</th>
                <th>solution</th>
            </tr>
            </tfoot>
        </table>
    </section>
</div>

</body>

