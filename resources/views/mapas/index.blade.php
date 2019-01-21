@extends('layouts.master')
@section('content')



       
        <div class="row">
			
        	<div class="col s10 m10 l10 card-panel z-depth-1">
                <div class="container">
                	<div class="row">
						<h4>Entidades</h4>
				</div>
                    <div class="row">
                            <div class="col m12">
                                <table class="striped" id="table_entidades">
                                    <thead>
                                        <tr class="row">
                                           <th class="">ID</th>
                                            <th class="">Entidad</th>
                                            <th class="">Clave</th>
                                            <th class="">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($entidades as $entidad)
                                            <tr class="row">
                                                <td class="">{{ucfirst($entidad->clave_elector)}}</td>
                                                <td class="">{{strtoupper($entidad->entidad) }}</td>
                                                <td class="">{{strtoupper($entidad->clave)}}</td>
                                                <td class="">
                                                   
                                                    <a href="{{url('imss/mapas/'.$entidad->id_entidad)}}" class="btn-floating btn-large waves-effect waves-light light-green darken-3">+</a>
                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


                </div>
            </div>
          </div>
  



@endsection