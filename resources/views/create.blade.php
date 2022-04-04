@extends('components.layout')

@section('content')
    @php
        $text = 'Create a Blog';   
    @endphp
    <site-header :title='@json($text)'></site-header>
    <div id="app">
        <create-blog :categories='@json($blogCategories)'> </create-blog>
    </div>
@endsection