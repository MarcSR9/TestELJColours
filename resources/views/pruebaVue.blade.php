<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Prueba técnica Europe Language Jobs</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet"> <!--Añadimos el css generado con webpack-->z
    </head>
    <body>
        <h1>prueba</h1>
            <div id="app" class="content"><!--La equita id debe ser app, como hemos visto en app.js-->
                <colour-finder></colour-finder><!--Añadimos nuestro componente vuejs-->
            </div>
        <script src="{{asset('js/app.js')}}"></script> <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
    </body>
</html>