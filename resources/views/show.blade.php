@extends('components.layout')

@section('content')
    @php
        $user_name = (! empty(session('user'))) ? session('name') : '';

        $text = 'Blog Page';   
    @endphp
    <site-header :title='@json($text)' :user='@json($user_name)'></site-header>
    <show-blog :blog='@json($blog)'></show-blog>
@endsection