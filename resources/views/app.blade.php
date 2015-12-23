<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Adelie</title>
    <link rel="stylesheet" href="css/app.css">
    <script src="https://use.typekit.net/ghk7jiq.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
  </head>
  <body>
    <div class="color-bar"></div>
    @include('partials.navbar')
    <div class="container">
      @yield('content')
    </div>
    <!-- jQuery + Foundation Import -->
    <script src="js/jquery.js"></script>
    <!-- Compressed JavaScript -->
    <script src="js/vendor.js"></script>
    <script src="js/app.js"></script>
    <script>$(document).foundation();</script>
  </body>
</html>