<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('bootstrap.min.css')}}" rel="stylesheet" >
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; /* Adjust the gap between cards */
            justify-content: center; /* Center cards horizontally */
        }
    </style>
</head>
<body>
    <div>
    @yield('contenu')</div>
</body>
</html>