@extends('admin.layout.app')

@section('title', 'Profile')
    
@section('content') 
    @include('admin.components.header')
    @include('admin.components.sidebar')
    @include('admin.profile.content')
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    @include('admin.components.footer')
@endsection

@section('javascript')
    @include('admin.profile.javascript')
@endsection