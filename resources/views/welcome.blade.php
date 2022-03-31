@extends('components.layout')

@section('content')
    @php
        $text = 'Welcome to the Blog page';   
    @endphp
    <site-header :categories='@json($blogCategories)' :title='@json($text)'></site-header>
    <home :blogs='@json($blogs)'></home>
@endsection
