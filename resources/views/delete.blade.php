@extends('template')
@section('contenido')
  <!-- añadimos un condicional para que sirva como
        un notificador en caso de que se ejecute la condicion -->
  @if (session()->has('success'))
    {!! 
    "<script> Swal.fire(
      'Correcto!',
      'Tu recuerdo se guardo correctamente!',
      'success'
    )</script> "
    !!}
  @endif

<div class="container col-md-6">
    <h1 class="display-4 text-center mt-5 mb-5"> Confirma!! </h1>
    <!-- en caso de que no se cumpla la condión de
      los inputs se ejecuta lo siguiente-->
    @if($errors -> any())
      @foreach ($errors->all() as $error)
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Formulario incompleto</strong>
        <!-- <strong> {{ $error }} </strong> -->
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endforeach
    @endif

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>¿Seguro que eliminaraas el siguiente recuerdo?</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="card text-center mb-5">
        <div class="display-7 card-header">
            <label class="display-8 form-label"> {!! $consultaId -> created_at !!} </label>
        </div>
        <div class="card-body">
            <!--<form method="post" action="{{route('recuerdo.delete', $consultaId -> idRecuerdo)}}">-->
                @csrf
                {!!method_field('PUT')!!}
                <div class="mb-3">
                  <label class="display-8 form-label"> {!! $consultaId -> titulo !!} </label>
                  <!--
                  <input type="text" class="form-control" name="txtTitulo" value = "{{$consultaId -> titulo}}">
                  -->
                    <!-- aqui otra opcion para visualizar los errores -->
                  
                </div>

                <div class="mb-3">
                    <label class="display-8 form-label"> {!! $consultaId -> recuerdo !!} </label>
                    <!--
                  <input type="text" class="form-control" name="txtRecuerdo"  value = "{{ $consultaId -> recuerdo}}" >
                  -->
                  
                </div>
        </div>
        <div class="card-footer">
            <form action="{{route('recuerdo.destroy', $consultaId -> idRecuerdo)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                <a href="{{route('recuerdo.index', $consultaId -> idRecuerdo)}}" class="btn btn-danger m-1">Regresar</a>
            </form>
            
           
        </div>
      </div>
</div>
@stop