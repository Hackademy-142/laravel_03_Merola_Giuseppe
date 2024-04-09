<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog </title>
    @vite(['resources/css/app.css'])
  </head>
  <body>


    <x-navbar></x-navbar>
    {{$slot}}




    @vite(['resources/js/app.js'])
  </body>
</html>