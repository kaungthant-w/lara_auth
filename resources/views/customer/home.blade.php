<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
            
        {{-- bootstrap  --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h4>Customer Home Page</h4>
    {{-- <form action=" {{route('register')}} "></form> --}}
    {{-- <form action=" {{route('login')}} "></form> --}}

    {{-- login register logout  --}}

    @if (session('authMessage')) 
        <p class="text-danger"> {{session("authMessage")}} </p>
        
    @endif

    <span> <a href="{{url('customer/home')}}">home</a>  </span>
    <span> <a href="{{url('customer/about')}}"> about</a> </span>
    <span> <a href="{{url('customer/service')}}"> service</a></span>
    <span> <a href="{{url('userPage')}}"> Customer Page</a></span>
    <h3>
        Role - {{Auth::user()->role}}
    </h3>
    <form action=" {{route('logout')}} " method="post">
        @csrf
        <input type="submit" value="logout">
    </form>
</body>
</html>