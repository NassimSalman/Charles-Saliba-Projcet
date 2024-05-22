@extends ("layouts.main")

@section('head')
    
    <title> {{ __('text.resume') }} </title>

@endsection

@section('content')

@include('components.header')

@include('components.resume.resume-image')

@include('components.resume.resume-detail')

@include('components.footer')

@endsection