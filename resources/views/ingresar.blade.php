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
    <h1 class="display-4 text-center mt-5 mb-5"> Ingresar </h1>
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

    <div class="card text-center mb-5">
        <div class="display-7 card-header">
          Querido diario !! 
        </div>
        <div class="card-body">
            <form method="post" action="{{route('recuerdo.store')}}">
                @csrf
                <div class="mb-3">
                  <label class="display-8 form-label">Titulo: </label>
                  <input type="text" class="form-control" name="txtTitulo">
                    <!-- aqui otra opcion para visualizar los errores -->
                    <p class = "text-danger fst-italic"> {{ $errors -> first('txtTitulo') }} </p>
                </div>

                <div class="mb-3">
                  <label class="display-8 form-label">Recuerdo: </label>
                  <input type="text" class="form-control" name="txtRecuerdo">
                  <p class = "text-danger fst-italic"> {{ $errors -> first('txtRecuerdo') }} </p>
                </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Guardar recuerdo</button>
            </form>
        </div>
      </div>
</div>
@stop