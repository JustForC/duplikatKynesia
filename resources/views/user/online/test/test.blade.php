@extends('user.layout.app')

@section('title', 'Test Online')
    
@section('content') 
    @include('user.components.header')
    @include('user.components.sidebar')
    @include('user.online.test.content')
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    @include('user.components.footer')
@endsection

@section('javascript')
    @include('user.online.test.javascript')
@endsection