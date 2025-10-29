<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Taller Mecánico') }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    body {
      background-image: url('{{ asset('images/fondo-taller 2.png') }}');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
  </style>
</head>

<body class="font-sans text-gray-900 antialiased min-h-screen flex flex-col items-center justify-center">

  {{-- LOGO --}}
  <div class="mb-6">
    <img src="{{ asset('images/logo-taller.jpg') }}" alt="Logo del taller" class="h-20 w-auto mx-auto">
  </div>

  {{-- CONTENIDO DEL FORMULARIO --}}
  <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white bg-opacity-90 backdrop-blur-sm shadow-lg rounded-2xl">
    {{ $slot }}
  </div>

</body>
</html>
