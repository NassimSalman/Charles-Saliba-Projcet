@extends ("layouts.main")

@section('head')

<title> {{ __('text.contact_us') }} </title>

@endsection

@section('content')

@include('components.header')

@include('components.contact-us.contact-us-content')

@include('components.footer')

@endsection