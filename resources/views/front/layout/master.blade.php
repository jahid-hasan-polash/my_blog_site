<!DOCTYPE html>
<html lang="en">
@include('front.include.header')
@include('front.include.menubar')
@yield('style')
<body>
@yield('content')
@include('front.include.footer')
@yield('script')
</body>
</html>