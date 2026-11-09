<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('vite')
    <title>Document</title>
</head>
<body>
<main class="fixed bg-[#F5EFE7] h-screen w-screen top-0">
<x-layouts.header></x-layouts.header>
    <div class="scrolled bg-transparent z-10 flex relative flex-col">
        @yield('content')
    </div>
</main>


</body>
</html>
