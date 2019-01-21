@extends('layouts.login')

@section('content')
<div class="container">
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
 <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
        
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="login"  name="username" value="{{ old('username') }}" required autofocus>

             @if ($errors->has('username'))
            <span class="help-block">
            <strong>{{ $errors->first('username') }}</strong>
            </span>
            @endif

          
            <label for="login" class="center-align">Usuario</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" name="password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
              <button type="submit" class="waves-effect waves-light btn ">Ingresa </button>
          </div>
        </div>
      </form>
    </div>
  </div>



</div>
@endsection
