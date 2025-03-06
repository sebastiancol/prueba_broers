@extends('layout')

@section('crud')



<div class="row md-5">
    <div class="col-8 mx-auto">
        <div class="card">
            <h3 class="card-title text-center">REGISTRAR</h3>
            <div class="card-body">
                <form  method="post" action="{{ route('crud_store')}}" class="color" id="register">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
          
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="fnom" name="first_name" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="Lname" name="last_name" placeholder="Correo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="password" id="nom" name="address" placeholder="Password" class="form-control">
                    </div>
                   
                    
                    <div class="form-group mt-5">
                        <button type="submit"  class="btn btn-success btn-block entry">REGISTRO</button>
                        <a class="btn btn-danger btn-block" href="{{ route('cancel')}}">CANCELAR</a>        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection