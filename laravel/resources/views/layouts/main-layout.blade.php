<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <script src="{{asset('/js/app.js')}}" charset="utf-8"></script>
    <title>laravel-one-to-many</title>
  </head>
  <body>

    @include('components.header')
    @yield('section')
    @include('components.footer')

  </body>
</html>
