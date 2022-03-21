@extends('user.layout.app')

@section('title', 'Form Keluarga')
    
@section('content') 
    @include('user.components.header')
    @include('user.components.sidebar')
    @include('user.form.family.content')
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    @include('user.components.footer')
@endsection

@section('javascript')
    @include('user.form.family.javascript')
@endsection