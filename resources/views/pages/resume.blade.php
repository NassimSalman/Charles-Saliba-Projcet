@extends ("layouts.main")

@section('head')
    
    <title> Resume </title>

@endsection

@section('content')

@include('components.header')

@include('components.resume.resume-image')

@include('components.resume.resume-details')

@include('components.footer')

@endsection