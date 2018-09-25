<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <title>Editor example - REST interface</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.17/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.6/css/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="Editor-PHP-1.7.3/css/editor.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="Editor-PHP-1.7.3/examples/resources/syntax/shCore.css">
    <link rel="stylesheet" type="text/css" href="Editor-PHP-1.7.3/examples/resources/demo.css">
    <style type="text/css" class="init">

    </style>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.17/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/select/1.2.6/js/dataTables.select.min.js"></script>
    <script type="text/javascript" language="javascript" src="Editor-PHP-1.7.3/js/dataTables.editor.min.js"></script>
    <script type="text/javascript" language="javascript" src="Editor-PHP-1.7.3/examples/resources/syntax/shCore.js"></script>
    <script type="text/javascript" language="javascript" src="Editor-PHP-1.7.3/examples/resources/demo.js"></script>
    <script type="text/javascript" language="javascript" src="Editor-PHP-1.7.3/examples/resources/editor-demo.js"></script>
    <script type="text/javascript" language="javascript" class="init">



        var editor; // use a global for the submit and return data rendering in the examples

        $(document).ready(function() {
            editor = new $.fn.dataTable.Editor( {
                ajax: {
                    create: {
                        type: 'POST',
                        // url: ' Editor-PHP-1.7.3/examples/php/rest/create.php'
                        url:  '../php/rest/create.php'
                    },
                    edit: {
                        type: 'PUT',
                        url:  '../php/rest/edit.php?id=_id_'
                    },
                    remove: {
                        type: 'DELETE',
                        url:  '../php/rest/remove.php?id=_id_'
                    }
                },
                table: "#example",
                fields: [
                    {
                        "label": "Kundenummer:",
                        "name": "kundenr"
                    },
                    {
                        "label": "Navn:",
                        "name": "navn",
                        /*"type": "datetime",
                        "format": "ddd, D MMM YY"*/
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
                        "label": "Kontakt:",
                        "name": "kontaktperson"
                    },
                    {
                        "label": "Stats:",
                        "name": "statsuat"
                    }

                ]
            } );

            $('#example').DataTable( {
                dom: "Bfrtip",
                ajax: "backend/intranetback.php",
                columns: [
                    {
                        "data": "kundenr"
                    },
                    {
                        "data": "navn"
                    },
                    {
                        "data": "adresse_nr"
                    },
                    {
                        "data": "postnrby"
                    },
                    {
                        "data": "kontaktperson"
                    },
                    {
                        "data": "statsuat"
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
</head>
<body class="dt-example">
<div class="container">
    <section>
        <h1>Editor example <span>REST interface</span></h1>
        <div class="demo-html"></div>
        <table id="example" class="display" style="width:100%">
            <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
            </tfoot>
        </table>
    </section>
</div>

</body>
</html>