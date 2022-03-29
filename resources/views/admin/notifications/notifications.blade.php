@extends('admin.layout.app')

@section('title', 'Notifications')
    
@section('content') 
    @include('admin.components.header')
    @include('admin.components.sidebar')
    @include('admin.notifications.content')
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    @include('admin.components.footer')
@endsection

@section('javascript')
    @include('admin.notifications.javascript')
@endsection