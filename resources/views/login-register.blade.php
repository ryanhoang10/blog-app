@extends('components.layout')

@section('content')
    @php
        $user_name = (! empty(session('user'))) ? session('name') : '';

        $text = 'Login or Register';   
    @endphp
    <site-header :title='@json($text)' :user='@json($user_name)'></site-header>
    <user-page></user-page>
@endsection