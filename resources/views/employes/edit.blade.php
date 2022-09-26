@extends('adminlte::page')
@section('title')
    Update Employee
@endsection
@section('content_header')
    <h1 style="text-align: center"><i class="fa fa-user-edit"></i> Update Employee</h1>
@endsection
@section('content')
<div class="row mt-2">
    <div class="col col-md-8 m-auto">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <form action="{{route('employes.update',$edit->registration_number)}}" method="POST">
                    @method("PUT")
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Registration Number :</label>
                        <input type="text" class="form-control" id="registration_number" placeHolder='Registration Number' name="registration_number" value="{{old('registration_number',$edit->registration_number)}}">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label"> Full Name :</label>
                        <input type="text" class="form-control" id="fullname" placeHolder='Full Name' name="fullname" value="{{old('fullname',$edit->fullname)}}">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">	Departement :</label>
                        <input type="text" class="form-control" id="depart" placeHolder='Departement' name="depart" value="{{old('depart',$edit->depart)}}">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Hire Date :</label>
                        <input type="date" class="form-control" id="hire_date" name="hire_date" value="{{old('hire_date',$edit->hire_date)}}">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Phone :</label>
                        <input type="text" class="form-control" id="phone" placeHolder='Phone' name="phone" value="{{old('phone',$edit->phone)}}">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Address :</label>
                        <input type="text" class="form-control" id="address" placeHolder='Address' name="address" value="{{old('address',$edit->address)}}">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">City :</label>
                        <input type="text" class="form-control" id="city" placeHolder='City' name="city" value="{{old('city',$edit->city)}}">
                    </div>
                    <button type="submit"  class="form-control btn-outline-success" >Update</button>
                </form>
            </div>
    </div>
    </div>
</div>
@endsection
