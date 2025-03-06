@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-body">
                        <!--<button type="submit"  class="btn btn-success btn-block entry">REGISTRO</button>-->
                        <H2>LISTADO DE USUARIOS</H2>
                        <a class="btn btn-info btn-block" href="{{ route('crud_get')}}">USUARIOS</a>        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
