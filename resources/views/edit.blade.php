@extends('layout')

@section('content')
    <h3 class="leading-tight text-5xl mt-0 mb-2 text-emerald-700 mb-2 text-center">Edit This Blog</h3>
    <div id="app">
        <edit-blog :categories='@json($blogCategories)' :blog='@json($blog)'> </edit-blog>
    </div>
@endsection
