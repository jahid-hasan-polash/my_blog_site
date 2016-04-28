<!DOCTYPE html>
<html lang="en">
@include('front.include.header')
@include('front.include.menubar')
@yield('style')
<body>
@yield('content')
@include('front.include.footer')
@yield('script')
@include('front.include.disqus_comment')
</body>
</html>