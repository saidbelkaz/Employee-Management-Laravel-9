
<div class="row my-4 center">
    <div class="col-md-6 text-center">
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
    </div>
</div>
