  @extends('layouts.master')
  @section('content')
       
  		<div class="container">
  <div class="row">
  	<h4>Generar Indicador</h4>
  </div>

  <div class="row">
    {!! Form::open(['url' => '/imss/mapas/buscar/'.$entidad->id_entidad, 'method' => 'post'] ) !!}
    {{ csrf_field() }}
    <div class="row">
      
      <div class="input-field col s3">
        {!! Form::select('clave_de_la_institucion', [''=> 'TODOS','CRO'=> 'CRUZ ROJA', 'DIF' => 'DIF', 'IMSS' => 'IMSS', 'IMSS-PROSPERA' => 'IMSS-PROSPERA', 'SSA'=> 'SSA', 'ISSSTE'=> 'ISSSTE', 'SEDENA' => 'SEDENA'], 'TODOS')  !!} 
        {!! Form::label('clave_de_la_institucion', 'Tipo', ["class" => "control-label"]) !!}

      </div>
      <div class="input-field col s3">
      {!! Form::select('nivel_atencion', [ ''=> 'TODOS', 6=> 'NO APLICA',  1=> 'PRIMER NIVEL',  2=> 'SEGUNDO NIVEL', 3=>'TERCER NIVEL' ])  !!} 

        {!! Form::label('nivel_atencion', 'NIVEL DE ATENCIÓN', ["class" => "control-label"]) !!}
        
      </div>
      <div class="input-field col s3">
        {!! Form::select('status_de_operacion', [''=> 'TODOS',1 => 'EN OPERACION', 2 => 'PENDIENTE DE INICIO DE OPERACIONES',  3=> 'FUERA DE OPERACION' ])  !!} 

        {!! Form::label('status_de_operacion', 'Estatus', ["class" => "control-label"]) !!}
      </div>
      <div class="input-field col s3 right">
      <button type="submit" class="btn waves-effect waves-light light-green darken-4">Buscar</button>
    </div>
</div>

   
  {!! Form::close() !!}
</div>

     
      @if($establecimientos->count() > 1 )         
      <div class="row">
      {{$establecimientos->count()}}
      </div>
<div class="row">
      <div class="col s12 m10 l10">
                <ul class="collapsible" data-collapsible="accordion">
                  <li>
                    <div class="collapsible-header active"><i class="mdi-maps-local-hospital"></i>Ubicaciones</div>
                    <div class="collapsible-body">
                      
                        
                      <div style="width: 700px; height: 450px; margin: 0 auto;">
                        {!! $mapa !!}
                      </div>  
                      
              

                    
                  </li>
                  <li>
                    <div class="collapsible-header ">Lista Hospitales</div>
                    <div class="collapsible-body">
                      
     
                  @include('mapas._lista', ['establecimientos'=> $establecimientos ] ) 
    
                    
                    </div>
                  </li>
                  
                </ul>
              </div>
            </div>
      @endif           
      
     

</div>

<script type="text/javascript">
    $(document).ready( function () {
        $('#table_establecimientos').DataTable();
    } );
</script>

  @endsection