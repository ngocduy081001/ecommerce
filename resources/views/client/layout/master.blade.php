<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ngoc Duy Ecommerce</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Ngoc Duy Ecommerce" name=" Ngoc Duy">
    <meta content="Ngoc Duy Ecommerces" name="Website ban hang">
    <meta name="token" content="{{csrf_token()}}">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

     <!--css -->
     @include('client.partial.css')
</head>

<body>

    <!--header -->
    @include('client.partial.header')

    <!--content -->
    @yield('content')

    <!--footer -->
    @include('client.partial.footer')
   
    <!--scritp -->
    @include('client.partial.script')
</body>

</html>
