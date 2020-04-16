

<!DOCTYPE html>
<html>
   <head>
    <title>@yield('title','weibo App') -海沃國際教育</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
   </head>
<body>
    @include('layouts._header')

<div class="container">  
    <div class="offset-md-1 col-md-10">
                   
        @yield('content')
        @include('shared._messages')  
        @include('layouts._footer')
    </div>
</div>    
</body>

</html>