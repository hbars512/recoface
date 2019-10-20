<!DOCTYPE html>
<html>
    <head>
        <meta charset="iso-8859-1"/>
        <title>Profesores</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="shortcat icon" href="img/shortcat.png">
        <link rel="stylesheet" href="css/mystilo.css" type="text/css"/>
        <script type="text/javascript" src="js/mijs.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <script>
            function cedula(valor) {
                var parametros = {
                    "valor": valor
                };
                $.ajax({
                    data: parametros,
                    url: './function/cedula.php',
                    type: 'post',
                    success: function (response) {
                        $("#validar").html(response);
                    }
                });
            }
        </script>

        <style>
            @media screen and (max-width:768px){
                #ocultar {
                    display: none;
                    visibility: hidden;
                }
            }
        </style>

    </head>

    <body class="container-fluid">
