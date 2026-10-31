@props(['title' => null])

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title ? "$title - Simple Budget" : 'Simple Budget' }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
  hx-headers:inherited='{"X-CSRF-TOKEN": "{{ csrf_token() }}"}'
  hx-boost="true"
  class="bg-base-200"
>
  {{ $slot }}
</body>

</html>
