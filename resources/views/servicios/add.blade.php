@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_content">

        <form method="post" action="{{ route('servicios.store') }}" enctype="multipart/form-data" class="form-horizontal form-label-left"  novalidate="">
          {{ csrf_field() }}
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <span class="section"></span>
          @include('partials.messages')

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-car"></i> Agregar Servicio</h3>
            </div>
              <div class="panel-body">
              </div>
          </div>

          <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre del Servicio: <span class="required" style="color:red"> *</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="nombre" placeholder="Año del Vehículo" type="text" name="nombre" value="{{ old('nombre') }}" required="required" data-validate-minmax="6" class="form-control col-md-7 col-xs-12">
              @if ($errors->has('nombre'))
                <span class="help-block">
                  <strong>{{ $errors->first('nombre') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group{{ $errors->has('tipo_actividad') ? ' has-error' : '' }}">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo_actividad">tipo_actividad del Servicio: <span class="required" style="color:red"> *</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="tipo_actividad" placeholder="Año del Vehículo" type="text" name="tipo_actividad" value="{{ old('tipo_actividad') }}" required="required" data-validate-minmax="6" class="form-control col-md-7 col-xs-12">
              @if ($errors->has('tipo_actividad'))
                <span class="help-block">
                  <strong>{{ $errors->first('tipo_actividad') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">descripcion del Servicio: <span class="required" style="color:red"> *</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="descripcion" placeholder="Año del Vehículo" type="text" name="descripcion" value="{{ old('descripcion') }}" required="required" data-validate-minmax="6" class="form-control col-md-7 col-xs-12">
              @if ($errors->has('descripcion'))
                <span class="help-block">
                  <strong>{{ $errors->first('descripcion') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-4 col-md-offset-8">
              <input type=submit name="Submit" value="Registrar vehículo" class="btn btn-success"> 
              <input type="reset" class="btn btn-info big">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection