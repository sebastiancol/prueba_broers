@extends('layout')

@section('crud')

<div class="row md-9">
    <div class="col-12 mx-auto">
        <div class="card">
            <h5 class="card-header text-center">CRUD CON LARAVEL </h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        @if ($mensaje = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{ $mensaje }}
                            </div>
                        @endif
        
                        
                    </div>
                </div>
                               
                <div class="col md-5">
                    <p>
                        <a href="{{ route('crud_create') }}" class="btn btn-primary">
                            <span class="fas fa-user-plus"></span> AGREGAR USUARIO
                        </a>
                        <h3 class="card-title text-center">BUSQUEDA INFORMACION </h3>
                        <form action="" method="get">
                            
                        </form>
                        <input class="form-control me-2" type="search" name="search" id="search" placeholder="buscar usuario" aria-label="Search">
                      
                        <button type="button" class="btn btn-danger" id="searchButton" >
                            BUSCAR
                         </button>
                        <p id="value" hidden></p> 
                    </p>
                </div>
                <hr>
            
                <div class="row md-5">
                    <div class="col md-6">
                <h5 class="card-title text-center">LISTADO USUARIOS</h5>

                        <table class="table text-center text-uppercase table-bordered ">
                            <thead class="">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Rol</th> 
                                    <th scope="col">Status</th> 
                                    <th scope="col">Operaciones</th>
                                </tr>
                            </thead>
                            <tbody id="dataTable">
                                @foreach ($user as $item)
                                <tr>
                                    <td>{{ $item->name}}</td>
                                    <td>{{ $item->email}}</td>
                                    <td>{{ $item->role}}</td>
                                    <td>{{ $item->status ? "Activo" : "Inactivo"}}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-">
                                            <a class="" href="{{ route('crud_edit', $item->id) }}">EDITAR<i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                        </button>
                                                                                    
                                        
                                        <button type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#deleteUser" id="delete">
                                           ELIMINAR
                                        </button>

                                         <button type="button" class="btn btn-secondary"  data-bs-toggle="modal" id="changue" >
                                           CAMBIAR ESTADO
                                        </button>
                                        
                                        <div class="modal fade" data-animation="slideInOutLeft" tabindex="-1" aria-labelledby="modal-title" id="deleteUser">
                                        
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                
                                                    <div class="modal-body">
                                                        <p>¿DESEA ELIMINAR EL REGISTRO?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                                                        <button type="button" class="btn btn-primary">
                                                            <a class="" href="{{ route('crud_delete', $item->id) }}">CONFIRMAR<i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" data-animation="slideInOutLeft" tabindex="-1" aria-labelledby="modal-title" id="changestate">
                                        
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                
                                                    <div class="modal-body">
                                                        <p>¿DESEA CAMBIAR EL ESTADO?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                                                        <button type="button" class="btn btn-primary">
                                                            <a class="" {{ $item->status ? "Desactivar" : "Activar"}}>CONFIRMAR<i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                            
                                        </div>
                                        
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        {{ $user->links() }}
                    </div>
                </div>
            </div>
         
        </div>
    </div>
</div>        



@endsection
