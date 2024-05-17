@extends ("layouts.main")

@section('head')

<title> Authorship </title>

@endsection

@section('content')

@include('components.header')

@include('components.authorship.leadership')

@include('components.authorship.article')

@include('components.footer')

@endsection