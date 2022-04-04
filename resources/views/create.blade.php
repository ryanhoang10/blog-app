@extends('components.layout')

@section('content')
    @php
        $user_name = (! empty(session('user'))) ? session('name') : '';

        $text = 'Create a Blog';   
    @endphp
    <site-header :title='@json($text)' :user='@json($user_name)'></site-header>
    <div id="app">
        <create-blog :categories='@json($blogCategories)'> </create-blog>
    </div>
@endsection