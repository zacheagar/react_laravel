<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel React application</title>
        <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
        <style>
    li{
        list-style-type:none;
    }
        </style>
    </head>
    <body>
    <h2 style="text-align: center"> Laravel and React application </h2>
    <h3 style="text-align: center">Products:</h3>
        <div id="root"style="text-align: center"></div>
        <script src="{{mix('js/app.js')}}" ></script>
    </body>
</html>