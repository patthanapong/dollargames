<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dollagame</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    
        {{-- ปฏิทิน เริ่ม --}}
  <link rel="stylesheet" media="all" type="text/css" href="{{asset('date/jquery-ui.css')}}" />
  <link rel="stylesheet" media="all" type="text/css" href="{{asset('date/jquery-ui-timepicker-addon.css')}}" />

  <script src="{{asset('date/jquery-1.10.2.min.js')}}"></script>
  <script  src="{{asset('date/jquery-ui.min.js')}}"></script>

  <script  src="{{asset('date/jquery-ui-timepicker-addon.js')}}"></script>
  <script  src="{{asset('date/jquery-ui-sliderAccess.js')}}"></script>

        {{-- ปฏิทินจบ --}}
</head>
<body>
    <div class="container">
    <h3>Dollagame</h3>

    @include('link')

    @section('content')
    @show
    
    
    
    
    </div>
</body>
</html>