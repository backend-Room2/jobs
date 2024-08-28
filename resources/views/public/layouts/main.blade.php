<!DOCTYPE html>
<html lang="en">

  @include('public/includes.head')

 <body>
  @include('public/includes.spinner')

  @include('public/includes.navbar')



  @yield('content')




 @include('public/includes.footer')

 @include('public/includes.javascript')

</body>

</html>