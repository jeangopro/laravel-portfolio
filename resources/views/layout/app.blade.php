<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="https://apis.google.com/js/platform.js"></script>

  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body class="antialiased text-gray-800 dark:text-gray-200">
  <div class="min-h-screen pt-24 bg-gray-100 dark:bg-gray-900">
    <x-layout.navbar></x-layout.navbar>

    {{ $slot }}

    <x-layout.footer></x-layout.footer>
  </div>
</body>

</html>
