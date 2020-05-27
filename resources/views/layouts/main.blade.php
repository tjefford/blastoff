<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blastoff</title>

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

        @if(env('APP_ENV') == 'production')
        <script async defer data-domain="blastoff.tylerjefford.com" src="https://plausible.io/js/plausible.js"></script>
        @endif
    </head>
    <body class="bg-gray-100">
      <div class="container mx-auto flex justify-center items-center p-6">
        <img src="{{ asset('images/logo.png') }}" width="128" />
      </div>

      @yield('content')

      <div class="container mx-auto flex justify-center items-center p-6 text-gray-500">
        <p>Website by <a class="underline" href="https://tylerjefford.com">Tyler Jefford</a>
          | API @ <a class="underline" href="https://launchlibrary.net/docs/1.3/api.html">Launch Library</a></p>
      </div>
    </body>
</html>
