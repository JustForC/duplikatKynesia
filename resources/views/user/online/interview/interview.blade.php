@extends('user.layout.app')

@section('title', 'Online Interview')
    
@section('content') 
    @include('user.components.header')
    @include('user.components.sidebar')
    @include('user.online.interview.content')
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    @include('user.components.footer')
@endsection

@section('javascript')
    @include('user.online.interview.javascript')
@endsection