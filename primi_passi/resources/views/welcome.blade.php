<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Laravel</title>
      <link rel="stylesheet" href="/css/app.css">
      <script src="/js/app.js" charset="utf-8"></script>
  </head>



  <body>
    <header>
      <div class="container">
      @include('header')
      </div>
    </header>
    <main>
      <div class="container">
      @include('main')
      </div>
    </main>
    <footer>
      <div class="container">
      @include('footer')
      </div>
    </footer>
    <script>
      function initMap() {

        var napoli = {lat: 40.5122, lng: 14.1447};

        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: napoli});

        var marker = new google.maps.Marker({position: napoli, map: map});
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYiOF689tAwd7Py1Whl4KooEb-nUkFPpQ&callback=initMap"
    async defer></script>
  </body>
</html>
