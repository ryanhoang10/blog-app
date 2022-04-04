@extends('components.layout')

@section('content')
    @php
        $text = 'Blog Page';   
    @endphp
    <site-header :title='@json($text)'></site-header>
    <show-blog :blog='@json($blog)'></show-blog>
@endsection