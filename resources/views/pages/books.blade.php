@extends ("layouts.main")

@section('head')

<title> Books </title>

@endsection

@section('content')

@include('components.header')

@include('components.books.books')

@include('components.footer')

@endsection