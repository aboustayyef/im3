<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>Invoice Maker, By Blue Gallery Ghana</title>

    <!-- Styles -->
    <link href="{{ mix('css/im.css') }}" rel="stylesheet">
    
</head>

<body>
    
    <div id="app">
        <invoicemaker></invoicemaker>
    </div>
    <script src="{{ mix('js/im.js') }}"></script>

    <!-- Scripts -->

</body>
</html>
