@extends('layouts.master')
@section('content')
     <div class="row">
			@include('ambulance._menuAmbulance')	
        	<div class="col s10 m10 l10 card-panel z-depth-1">
		<div class="container">
<div class="row">
	<h4>Registrar Nueva Ambulancia</h4>
</div>

                              <div class="row">
                                {!! Form::open(['url' => 'ambulances', 'method' => 'post'] ) !!}
                                {{ csrf_field() }}
                                  <div class="row">
                                    <div class="input-field col s3">
                                        {!! Form::text('economico', old('economico'), ["class" => "form-control", 'placeholder' => '' ] ) !!} 
                                        {!! Form::label('economico', 'economico', ["class" => "control-label"]) !!}
                                        @if (isset  ($errors->messages()['economico']))
                                            @include('errors/mensaje', ['mensaje' => $errors->messages()['economico'][0]])
                                        @endif  
                                    </div>
                                    <div class="input-field col s3">
                                        {!! Form::text('marca', old('marca'), ["class" => "form-control", 'placeholder' => '' ] ) !!} 
                                        {!! Form::label('marca', 'Marca', ["class" => "control-label"]) !!}
                                        @if (isset ($errors->messages()['clues']))
                                        @include('errors/mensaje', ['mensaje' => $errors->messages()['marca'][0]])
                                        @endif  
                                    </div>
                                    <div class="input-field col s3">
                                        {!! Form::text('modelo', old('modelo'), ["class" => "form-control", 'placeholder' => '' ] ) !!} 
                                        {!! Form::label('modelo', 'Modelo', ["class" => "control-label"]) !!}
                                        @if (isset ($errors->messages()['clues']))
                                        @include('errors/mensaje', ['mensaje' => $errors->messages()['clues'][0]])
                                        @endif  
                                    </div>

                                       <div class="input-field col s3">
                                             {!! Form::text('clave', old('clave'), ["class" => "form-control", 'placeholder' => '' ] ) !!} 
                                        {!! Form::label('clave', 'Clave Asignada', ["class" => "control-label"]) !!}
                                        @if (isset ($errors->messages()['clave']))
                                        @include('errors/mensaje', ['mensaje' => $errors->messages()['clave'][0]])
                                        @endif 
                                    </div>

                                  </div>

                                  <div class="row">
                                    <div class="input-field col s6 right">
                                        <button type="submit" class="btn">Guardar</button>
                                    </div>
                                  </div>
                                {!! Form::close() !!}
                              </div>
                     	</div>
             
   </div>             
@endsection