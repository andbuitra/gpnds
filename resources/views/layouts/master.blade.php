<!DOCTYPE html>
<html>
  <head>
    @include('includes.head')
  </head>
  <body>
    <header>
      @include('includes.header')
    </header>
    @yield('content')

    <footer>
      @include('includes.footer')
    </footer>
    @include('includes.javascript')
  </body>
</html>
