<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/google_map.css')}}">
    <title>{{config('app.name')}}</title>
</head>
<body>
    <div id="map"></div>
    <script src="{{asset('js/google_map.js')}}"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBV2kO5IGFuo2vqR3jaq-G10pu4pZJRAxo&callback=initMap"></script>
</body>
</html>