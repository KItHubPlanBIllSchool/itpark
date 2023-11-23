<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>@yield('title', 'auth')</title>
</head>
<body>
@include('include.header')
@yield('content')
</body>
</html>