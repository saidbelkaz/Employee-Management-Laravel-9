@extends('adminlte::page')
@section('title')
    home
@endsection
@section('content_header')
    <h1>dashboard</h1>
@endsection
@section('content')

<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>{{\App\Models\Employe::count()}}</h3>
            <p>Employee</p>
            </div>
            <div class="icon">
            <i class="fa fa-users" aria-hidden="true"></i>
            </div>
            <a href="{{url('admin/employes')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
@endsection
