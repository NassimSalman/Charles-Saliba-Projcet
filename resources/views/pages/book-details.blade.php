@extends ("layouts.main")

@section('head')

<title> Book Details </title>

@endsection

@section('content')

@include('components.header')

@include('components.book-details.book-details')

@include('components.footer')

@endsection