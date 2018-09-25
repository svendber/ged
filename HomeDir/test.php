<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 9/14/18
 * Time: 4:58 AM
 */
include_once ('../layout/header.php');
include_once ('testhtml.html');
//include_once ('testintranet.html');
?>

<script>

    var editor; // use a global for the submit and return data rendering in the examples

    $(document).ready(function() {
        $(document).on('shown.bs.tab', 'a[data-toggle="tab"]', function (e) {
            $.fn.dataTable.tables({ visible: true, api: true }).columns.adjust();
        });
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
