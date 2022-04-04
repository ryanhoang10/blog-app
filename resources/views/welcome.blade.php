@extends('components.layout')

@section('content')
    @php
        $user_name = (! empty(session('user'))) ? session('name') : '';

        $text = 'Welcome to the Blog page';   
    @endphp

    <site-header :title='@json($text)' :user='@json($user_name)'></site-header>
    <searchbar :categories='@json($blogCategories)'></searchbar>
    <home :blogs='@json($blogs)'></home>
@endsection
