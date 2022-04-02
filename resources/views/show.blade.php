@extends('components.layout')

@section('content')
<div id="app">

</div>
    <show-blog :blog='@json($blog)'></show-blog>
@endsection