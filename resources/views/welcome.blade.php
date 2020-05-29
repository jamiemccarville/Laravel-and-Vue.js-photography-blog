<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">



  <title>Vue.js and Laravel</title>


</head>

<body>
  <div id="app">
    <blog-article></blog-article>

  </div>
  <script src="/js/app.js"></script>
</body>

</html>