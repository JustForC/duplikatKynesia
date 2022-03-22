@extends('admin.layout.app')

@section('title', 'Tahap 1')
    
@section('content') 
    @include('admin.components.header')
    @include('admin.components.sidebar')
    @include('admin.stepOne.content')
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    @include('admin.components.footer')
@endsection

@section('javascript')
    @include('admin.stepOne.javascript')
@endsection