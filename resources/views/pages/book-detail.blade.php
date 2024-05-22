@extends ("layouts.main")

@section('head')

<title> {{ __('text.book_details') }} </title>

@endsection

@section('content')

@include('components.header')

@include('components.book-details.book-detail')

@include('components.footer')

@endsection