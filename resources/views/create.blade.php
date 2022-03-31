@extends('components.layout')

@section('content')
    <h3 class="leading-tight text-5xl mt-0 mb-2 text-emerald-700 mb-2 text-center">Create a Blog</h3>
    <div id="app">
        <create-blog :categories='@json($blogCategories)'> </create-blog>
    </div>
@endsection