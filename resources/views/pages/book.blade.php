@extends ("layouts.main")

@section('head')

<title> {{ __('text.books') }} </title>

@endsection

@section('content')

@include('components.header')

@include('components.books.book')

@include('components.footer')

@endsection