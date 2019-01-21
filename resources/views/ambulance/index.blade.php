@extends('layouts.master')
@section('content')



       
        <div class="row">
			@include('ambulance._menuAmbulance')	
        	<div class="col s10 m10 l10 card-panel z-depth-1">
                <div class="container">
                	<div class="row">
						<h4>Ambulancias</h4>
				</div>
                    <div class="row">
                            <div class="col m12">
                                <table class="table table-striped table-bordered " id="table_ambulances">
                                    <thead>
                                        <tr class="row">
                                            <th class="">id</th>
                                            <th class="">unidad</th>
                                            <th class="">marca</th>
                                            <th class="">modelo</th>
                                            <th class="">clave</th>
                                            <th class="">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ambulances as $ambulance)
                                            <tr class="row">
                                                <td class="">{{$ambulance->id }}</td>
                                                <td class="">{{$ambulance->unidad}}</td>
                                                <td class="">{{$ambulance->marca}}</td>
                                                <td class="">{{$ambulance->modelo}}}</td>
                                                <td class="">{{$ambulance->clave}}}</td>
                                                <td class="">
                                                   
                                                    <a href="{{url('ambulances/'.$ambulance->id.'/edit')}}" class="btn ">Editar</a>
                                                    <a href="{{url('ambulances/'.$ambulance->id.'/delete')}}" class="btn ">Eliminar</a>
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
  


<script type="text/javascript">
    $(document).ready( function () {
        $('#table_ambulances').DataTable();
    } );

</script>
@endsection
