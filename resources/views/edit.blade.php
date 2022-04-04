@extends('components.layout')

@section('content')
    @php
        $user_name = (! empty(session('user'))) ? session('name') : '';

        $text = 'Edit This Blog';   
    @endphp
    <site-header :title='@json($text)' :user='@json($user_name)'></site-header>
    <div id="app">
        <edit-blog :categories='@json($blogCategories)' :blog='@json($blog)'> </edit-blog>
    </div>
@endsection
