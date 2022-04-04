@extends('components.layout')

@section('content')
    @if (! empty(session('user')))
        hi {{ session('user') }}
    @endif
    @php
        $text = 'Welcome to the Blog page';   
    @endphp
    <site-header :title='@json($text)'></site-header>
    <searchbar :categories='@json($blogCategories)'></searchbar>
    <home :blogs='@json($blogs)'></home>
@endsection
