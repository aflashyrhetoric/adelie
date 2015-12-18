<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Adelie</title>
    <!-- Compressed CSS -->
    <link rel="stylesheet" href="css/app.css">
    <!--TypeKit -->
    <script src="https://use.typekit.net/ghk7jiq.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
  </head>
  <body>
    <div class="container">

      <!--Navigation -->
      @include('partials._navbar')

      @yield('content')

    </div>

    <!--Footer -->
    @yield('footer')

    <!-- jQuery + Foundation Import -->
    <script src="js/jquery.js"></script>
    <!-- Compressed JavaScript -->
    <script src="js/vendor.js"></script>
    <script src="js/app.js"></script>
    <script>$(document).foundation();</script>
  </body>
</html>