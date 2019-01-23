@extends('layouts.master')
@section('content')



<div class="row">
        <div class="col s6 m1 l1">
            <p class="header">Entidades</p>
        </div>
        <div class="col s12 m11 l11">
            <ul class="collection">
            @foreach ($entidades as $entidad)

                    <li class="collection-item avatar">
                    <i class="mdi-maps-local-hospital"></i>
                    <span class="title">{{strtoupper($entidad->entidad)}}</span>
                    <p>{{strtoupper($entidad->clave)}}
                      <br> {{strtoupper($entidad->id_entidad)}}
                      <br>
                       <b>Total Consultorios </b>
                       <b>Total Camas </b> 
                    </p>
                    <a href="{{url('imss/mapas/'.$entidad->id_entidad)}}" class="secondary-content"><i class="mdi-content-send"></i></a>
                  </li>    
            @endforeach     
                </ul>

              </div>
  </div>



@endsection