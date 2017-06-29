<!DOCTYPE html>

<html lang="en">

  <head>

    @include('partials._head')

  </head>

  <body>

    @include('partials._nav')

    <div class="container">

      @include('partials._message')

      @yield('main')

    </div>

    @include('partials._footer')

    @include('partials._scripts')

  </body>

</html>