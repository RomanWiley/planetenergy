<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <base href="{{URL::asset('/')}}" target="_top">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>PC Shop - @yield('title')</title>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
        {{-- <link rel="stylesheet" href="{{{ URL::asset('css/bootstrap.min.css')}}}" />
        <link rel="stylesheet" href="{{{ URL::asset('css/shop-homepage.css')}}}" /> --}}
    </head>
    <body>
        @include('partials.header')
        <!-- Page Content -->
        <div class="container">
            @yield('content')
        </div>
        <!-- /.container -->

        @include('partials.footer')

        {{-- <script type="text/javascript" src="{{{ URL::asset('js/jquery.js')}}}"></script>
        <script src="{{{ URL::asset('js/bootstrap.min.js')}}}"></script> --}}
    </body>
</html>
