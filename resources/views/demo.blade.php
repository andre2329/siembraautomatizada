@extends('layout')

@section('title', 'Demo')
@section('content')

    <header class="px-100 bg-primary text-white d-flex align-items-center justify-content-center">
        
      <div class="main">
        <div class="cultivo">

        </div>
        <div class="cultivo2">

        </div>
        <div class="papas">
          @for($i = 1; $i < 56; $i++)
          <div class="papa">

          </div>
        @endfor
          
        </div>
        
        <div class="conjunto">
          <div class="brazoprincipal">

          </div>
          <div class="plantador">

          </div>
        </div>
        </div>
        
        <div class="seleccion bg-dark">
          <div class="contenedor">
            <div>
              <div class="title">
                DEMO
              </div>
            </div>
            

            <div class="botones">
              <button class="btn ml-3 mr-3 mt-2 btn-primary" id="iniciar">Iniciar</button>
              {{-- <button class="btn ml-3 mr-3 mt-2 btn-danger" id="parar">Parar</button><br> --}}
              <button class="btn ml-3 mr-3 mt-2 btn-success" onClick="window.location.reload();">Reiniciar</button>
            </div>
            
          </div>
        </div>
    </header>

@endsection