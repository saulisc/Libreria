@extends('template')

@section('contenido')
    
@if (session()->has('Actualizado'))
{!! 
"<script> Swal.fire(
  'Correcto!',
  'Tu recuerdo se actualizo correctamente!',
  'success'
)</script> "
!!}
@endif

@if (session()->has('Eliminado'))
{!! 
"<script> Swal.fire(
  'Correcto!',
  'Tu recuerdo se elimino correctamente!',
  'success'
)</script> "
!!}
@endif

@foreach($resultRec as $consulta)

    <div class="container col-md-6">

        <div class="card text-center mt-5 mb-5">
            <div class="display-7 card-header">
                {{$consulta -> fecha }}
            </div>

            <div class="card-body">
                {{$consulta -> titulo}}
                {{$consulta -> recuerdo}}
            </div>

            <div class="card-footer">
                <a href="{{route('recuerdo.edit', $consulta -> idRecuerdo)}}" class="btn btn-warning m-1">Actualizar</a>
                <a href="{{route('recuerdo.delete', $consulta -> idRecuerdo)}}" class="btn btn-danger m-1">Eliminar</a>

            </div>
        </div>
    </div>
@endforeach
@stop
