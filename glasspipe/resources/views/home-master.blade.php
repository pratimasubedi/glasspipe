
  <!doctype html>
<html lang="{{ app()->getLocale() }}">
    
    @include('partials.header')
    @yield('headercss')

    <body>
   
    
    @yield('content')
    
    @include('partials.footer')
    @yield('script')

    </body>
</html> 