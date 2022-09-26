@extends('adminlte::page')
@section('title')
    List of employes
@endsection
@section('content_header')
    <h1>List Of Employes</h1>
@endsection
@section('content')
<div class="row mt-2 ml-5 mr-5">
    <div class="card" style="width: 100%;">

        <div class="card-body">
            <table id="myTable" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Depatement</th>
                        <th scope="col">Hire Date</th>
                        <th scope="col">button</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($employes as $key=>$employe)
                    <tr>
                        <th scope="row">{{$key+=1}}</th>
                        <td>{{$employe->fullname}}</td>
                        <td>{{$employe->depart}}</td>
                        <td>{{$employe->hire_date}}</td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="{{route('employes.show',$employe->registration_number)}}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                            <a href="{{route('employes.edit',$employe->registration_number)}}" class="btn btn-sm btn-warning ml-2 mr-2"><i class="fa fa-edit"></i></a>
                            <form id="{{$employe->registration_number}}" action="{{route('employes.destroy',$employe->registration_number)}}" method="post">
                                @method('DELETE')
                                @csrf
                            </form>
                            <button type='submit'
                                    onclick="notification({{$employe->registration_number}})"
                                    class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            dom:'Bfrtip',
            buttons:[
                'copy','excel','csv','pdf','print','colvis'
            ]
        });
    });
    
    function notification(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(id).submit();
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    }
</script>

@if (session()->has('success'))
    <script>
        Swal.fire({
            title:  "{{session()->get('success')}}",
            icon: "success",
            showConfirmButton:false,
            timer: 2500
        });
    </script>
@endif

@endsection

