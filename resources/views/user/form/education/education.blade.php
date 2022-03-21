@extends('user.layout.app')

@section('title', 'Form Pendidikan')
    
@section('content') 
    @include('user.components.header')
    @include('user.components.sidebar')
    @include('user.form.education.content')
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    @include('user.components.footer')
@endsection

@section('javascript')
    @include('user.form.education.javascript')
@endsection