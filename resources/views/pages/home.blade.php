@extends ("layouts.main")

@section('head')
    
    <title> Home </title>

@endsection

@section('content')

@include('components.header')

@include('components.home.welcome-to-site')

@include('components.home.authorship')

@include('components.home.home-media')

@include('components.home.home-books')

@include('components.home.quote')

@include('components.home.journey')

@include('components.home.expertise')

@include('components.footer')

@endsection