
<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Coynarb</title>
  <link rel="icon" href="{{asset('assets/img/logo-light.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  {{-- <script src="https://unpkg.com/alpinejs" defer></script> --}}

</head>

<body id="dark">
  @include('layouts.header')

  @yield('content')

  @include('layouts.footer')
    
    
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62eb883437898912e9612e48/1g9k0o42k';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

  <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/amcharts-core.min.js')}}"></script>
  <script src="{{asset('assets/js/amcharts.min.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>