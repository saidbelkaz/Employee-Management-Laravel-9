@extends('adminlte::page')
@section('title')
    Update Employee
@endsection
@section('content_header')
    <h1 style="text-align: center"><i class="fa fa-user"></i> Employee {{$employe->fullname}}</h1>
@endsection
@section('content')
<div class="row mt-2">
    <div class="col col-md-8 m-auto">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <div class="mb-3 text-center">
                     <a href="{{route('employe.vacation',$employe->registration_number)}}" class="btn btn-outline-dark m-2">Vacation Request</a>
                     <a href="{{route('employe.certificate',$employe->registration_number)}}" class="btn btn-outline-danger m-2 ">Work Certificate</a>
                </div>
                <hr>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Registration Number :</label>
                    <input type="text" class="form-control" id="registration_number"  name="registration_number" value="{{$employe->registration_number}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label"> Full Name :</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" value="{{$employe->fullname}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">	Departement :</label>
                    <input type="text" class="form-control" id="depart"  name="depart" value="{{$employe->depart}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Hire Date :</label>
                    <input type="date" class="form-control" id="hire_date" name="hire_date" value="{{$employe->hire_date}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Phone :</label>
                    <input type="text" class="form-control" id="phone"  name="phone" value="{{$employe->phone}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Address :</label>
                    <input type="text" class="form-control" id="address"  name="address" value="{{$employe->address}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">City :</label>
                    <input type="text" class="form-control" id="city"  name="city" value="{{$employe->city}}" disabled>
                </div>
            </div>
    </div>
    </div>
</div>
@endsection
