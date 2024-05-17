@extends ("layouts.main")

@section('head')
    
    <title> Home </title>

@endsection

@section('content')

@include('components.header')

@include('components.home.welcome-to-site')

@include('components.home.authorship')

@include('components.home.home-media')

@include('components.home.home-book')

@include('components.home.quote')

@include('components.home.journey')

@include('components.home.expertise-detail')

@include('components.footer')

@endsection