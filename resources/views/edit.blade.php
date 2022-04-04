@extends('components.layout')

@section('content')
    @php
        $text = 'Edit This Blog';   
    @endphp
    <site-header :title='@json($text)'></site-header>
    <div id="app">
        <edit-blog :categories='@json($blogCategories)' :blog='@json($blog)'> </edit-blog>
    </div>
@endsection
