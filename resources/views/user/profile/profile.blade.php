@extends('user.layout.app')

@section('title', 'Profile')
    
@section('content') 
    @include('user.components.header')
    @include('user.components.sidebar')
    @include('user.profile.content')
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    @include('user.components.footer')
@endsection

@section('javascript')
    @include('user.profile.javascript')
@endsection