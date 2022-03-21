@extends('user.layout.app')

@section('title', 'Homepage')
    
@section('content') 
    @include('user.components.header')
    @include('user.components.sidebar')
    @include('user.homepage.content')
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    @include('user.components.footer')
@endsection

@section('javascript')
    @include('user.homepage.javascript')
@endsection