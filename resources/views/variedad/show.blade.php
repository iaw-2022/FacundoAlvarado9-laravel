@extends('layouts.base')

@section('content')

<x-status-message />

<div class="container">
  <div class="row">
      <div class="col-md">
          <img src="{{ $variedad->imagen_url }}" class="img-fluid border" alt="...">
      </div>
      <div class="col-md">
          <h1>{{ $variedad->nombre }}</h1>
          <x-origen.clickable-badges :origenes="$variedad->origenes"/>
          <p><i>Tostador: <a href="{{ route('tostadurias.show', $variedad->tostaduria->id) }}">{{$variedad->tostaduria->nombre}}</a></i></p>
          <p>{{ $variedad->descripcion }}</p>
          <a href="{{$variedad->url}}" target="_blank" class="btn btn-primary">Ver en su sitio</a>

          <div class="row">
            <div class="col-2 col-md-3 col-lg-2">
              <x-boton-editar :rutaEdit="route('variedades.edit', $variedad->id)" />
            </div>
            <div class="col-2 col-md-3 col-lg-2">
              <x-form.boton-eliminar :action="route('variedades.destroy', $variedad->id)"/>
            </div>
          </div>

      </div>
  </div>

  <div class="row">
    <div class="col">
      <a class="btn btn-primary" href="{{ url()->previous() }}" role="button">Volver</a>
    </div>
  </div>

</div>

@endsection
