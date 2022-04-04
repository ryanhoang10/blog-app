@extends('components.layout')

@section('content')
    @php
        $text = 'Login or Register';   
    @endphp
    <site-header :title='@json($text)'></site-header>
    <user-page></user-page>
@endsection