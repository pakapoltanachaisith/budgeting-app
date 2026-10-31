@props(['title' => null])

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title ? "$title - Simple Budget" : 'Simple Budget' }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body hx-boost="true" class="bg-base-200">
  <div class="h-full flex items-center justify-center">
    <main class="bg-base-100 rounded-box p-6 w-[90%] max-w-150 shadow">{{ $slot }}</main>
  </div>
</body>

</html>
