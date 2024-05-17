@extends ("layouts.main")

@section('head')

<title> Books </title>

@endsection

@section('content')

@include('components.header')

@include('components.books.book')

@include('components.footer')

@endsection