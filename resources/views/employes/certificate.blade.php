@extends('adminlte::page')
@section('title')
    Certificate Of Employment
@endsection
@section('content_header')
    <h1 style="text-align: center"><i class="fa fa-user"></i> Employee {{$employe->fullname}}</h1>
    @endsection
    @section('content')
    <div class="row mt-2">
        <div class="col col-md-10 m-auto">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h1 class="text-center"><strong> Certificate Of Employment</strong></h1> <br> <br>
                    <p class="lead text-center">
                        This is to certify that <b>{{$employe->fullname}}</b> was an employee of <b>DevSAID7</b> <br> <br>
                        from <b>{{$employe->hire_date}}</b> up to <b>{{date('Y-m-d')}}</b> as <b>{{$employe->depart}}</b> <br> <br>
                    </p>
                    <p class="lead text-center ">
                        This Certificate is being issued to Mr(s) <b> {{$employe->fullname}} </b> for whatever legal purpose it may serve . <br> <br>
                    </p>
                    <p class="lead text-right">
                        President Said Belkaz
                    </p>
                    <p class="lead text-right">
                        Signature <b> ____________</b><br> <br>
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





