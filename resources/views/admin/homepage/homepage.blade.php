@extends('admin.layout.app')

@section('title', 'Homepage')
    
@section('content') 
    @include('admin.components.header')
    @include('admin.components.sidebar')
    @include('admin.homepage.content')
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    @include('admin.components.footer')
@endsection

@section('javascript')
    @include('admin.homepage.javascript')
@endsection