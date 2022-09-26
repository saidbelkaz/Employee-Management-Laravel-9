@extends('layouts.app')
@section('title')
    welcome
@endsection
@section('content')
<div class="row">
    <div class="col-md-6 m-auto mt-5">
    <div class="card">
        <div class="card-body">
        <h5 class="card-title">Welcome</h5>
        <p class="card-text">To Employee management application</p>
        @guest
        <a href="{{url('/login')}}" class="btn btn-outline-primary">Login</a>
        @endguest
        @auth
            <a href="{{url('/admin/home')}}" class="btn btn-outline-primary">Home</a>
        @endauth
        </div>
    </div>
</div>
@endsection
