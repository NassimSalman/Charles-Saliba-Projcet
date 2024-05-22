@extends ("layouts.main")

@section('head')

<title> {{ __('text.authorship') }} </title>

@endsection

@section('content')

@include('components.header')

@include('components.authorship.authorship')

@include('components.authorship.article')

@include('components.footer')

@endsection