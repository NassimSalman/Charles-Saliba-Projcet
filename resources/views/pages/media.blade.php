@extends ("layouts.main")

@section('head')
    
    <title> {{ __('text.media') }} </title>

@endsection

@section('content')

@include('components.header')

@include('components.media.media')

@include('components.footer')

@endsection