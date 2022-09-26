@extends('adminlte::page')
@section('title')
    Vacation
@endsection
@section('content_header')
    <h1 style="text-align: center"><i class="fa fa-user"></i> Employee {{$employe->fullname}}</h1>
@endsection
@section('content')
<div class="row mt-2">
    <div class="col col-md-10 m-auto">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h1 class="text-center">Employee Time-Off Request Form</h1> <br>
                <p class="lead">
                    Today’s Date : <b> {{ date('Y-m-d') }}</b>
                </p>
                <p class="lead">
                    Employee’s Name : <b>{{$employe->fullname}}</b>
                </p>
                <p class="lead">
                    Time-Off Request: <b> _____ ☐ Days ☐ Hours</b>
                </p>
                <p class="lead">
                    Beginning on: <b>________________________</b>
                </p>
                <p class="lead">
                    Ending on: <b>________________________</b>
                </p>
                <h2>Reason for Request</h2><br>
                <p class="lead">
                    ☐ - Vacation ☐ - Personal Leave ☐ - Funeral / Bereavement
                    ☐ - Jury Duty ☐ - Family Reasons ☐ - Medical Leave
                    ☐ - To Vote ☐ - Other: _____________________________________<br>
                </p>
                <h3>I understand that this request is subject to approval by my employer.</h3><br>
                <p class="lead">
                    Employee’s Signature:<b> ________________________ Date: ___________</b>
                </p>
                <h4>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</h4>
                <h2>Employer’s Decision</h2><br>
                <p class="lead">
                    ☐ - Approved ☐ - Rejected
                </p>
                <p class="lead">
                    Employer’s Signature: <b>________________________ Date: ____________</b>
                </p>
                <div class="my-2">
                    <a href="#"  onclick="document.getElementById('printLink').style.display='none';setTimeout(function(){document.getElementById('printLink').style.display='inline-block'},2000); window.print()" id="printLink" class="btn btn-primary">
                        <i class="fa fa-print"></i>
                    </a>
                </div>
            </div>
    </div>
    </div>
</div>
@endsection




