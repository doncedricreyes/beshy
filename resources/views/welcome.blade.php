<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @livewireStyles()
</head>
<body>
<nav class="flex flex-col content-center w-full px-6 py-2 font-sans text-center bg-blue-100 shadow sm:flex-row sm:text-left sm:justify-between sm:items-baseline">
  <div class="mb-2 sm:mb-0 inner">

    <a href="/home" class="font-sans text-7xl font-bold no-underline text-grey-darkest hover:text-blue-dark">🤸</a><br>
    <span class="text-lg text-grey-dark">Bored🤸Ang🤸Lola🤸Mo</span>

  </div>

  <div class="self-center sm:mb-0">
    <!-- <div class="h-10" style="display: table-cell, vertical-align: middle;"> -->
    <a href="#" class="px-1 ml-2 text-black no-underline text-xl hover:text-blue-dark">Home</a>
    <a href="#" class="px-1 ml-2 no-underline text-xl text-grey-darker hover:text-blue-dark">About</a>
    <!-- <a href="/two" class="ml-2 text-lg no-underline text-grey-darkest hover:text-blue-dark">About Us</a> -->
    <!-- </div> -->

  </div>
</nav>
<livewire:beshy>
@livewireScripts()
</body>
</html>
