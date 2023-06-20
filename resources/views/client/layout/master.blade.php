<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title>@yield('title','Ngoc Duy Ecommerce')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Ngoc Duy Ecommerce" name=" Ngoc Duy">
  
    <meta name="token" content="{{ csrf_token() }}">
    <!-- Favicon -->
   
    <link rel="icon" type="image/x-icon" href="{{ asset('server/assets/img/favicon/favicon.ico') }}" />

    <!--css -->
    @include('client.partial.css')
    @yield('css')
</head>

<body>

    <!--header -->
    @yield('header')

    {{-- @include('client.partial.header') --}}

    <!--content -->
    @yield('content')

    <!--footer -->
    @include('client.partial.footer')

    <!--scritp -->
    @include('client.partial.script')
    @yield('js')
</body>

</html>
