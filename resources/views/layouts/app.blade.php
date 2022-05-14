<!doctype html>

<html>

<head>

   @include('includes.head')

</head>

<body>

<div class="container">

   <header class="row">

       @include('includes.header')

   </header>

   <div id="main" class="row">

           @yield('body')

   </div>

 
</div>
<script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>
@livewireScripts
</body>

</html>