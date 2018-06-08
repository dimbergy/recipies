<!DOCTYPE HTML>

<html>

<head>

  <title>{{ $site }}</title>

  <link href="/css/app.css" rel="stylesheet" type="text/css">
  <link href="/css/styles.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="/favicon.png" type="image/png"/>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>


</head>


<body>


  @include('layouts.nav')


  @yield('content')


  @include('layouts.footer')

  @include('layouts.scripts')
</body>







</html>
