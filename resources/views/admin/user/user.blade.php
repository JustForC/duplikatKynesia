@extends('admin.layout.app')

@section('title', 'List User')
    
@section('content') 
    @include('admin.components.header')
    @include('admin.components.sidebar')
    @include('admin.user.content')
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    @include('admin.components.footer')
@endsection

@section('javascript')
    @include('admin.user.javascript')
@endsection