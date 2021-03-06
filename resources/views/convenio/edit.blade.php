
@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <title>Modificar Cliente</title>
</head>

        <body >
            @section('content')
                
            
                <div style="width:100%; max-width: 1100px; margin:0px auto;">
                
                    @include('intranet.menu')
                   
                <div style="width:100%; max-width: 1100px; float: right; position:relative;">
        <div class="panel panel-success" style="margin-top: 20px;">
                <div class="panel-heading">
                    <h4>Modificar Convenio</h4>
                </div>
               
                <div class="panel-body">
                <form action="{{ route('convenio.update', $ID_CONVENIO)}}" method="POST">
               
                          {{ csrf_field() }}
                          <input name="_method" type="hidden" value="PUT">
                          <p>
                             <input type="hidden" name="ID_CONVENIO" value="{{$ID_CONVENIO}}"> 
                       
                             <strong><h5>Cliente</h6></strong> <input type="text" name="cliente" readonly class="form-control" value="{{$convenio->NOMBRE_COMPLETO}}" id="">
                     		
                            </p>
                            <p>
                            <strong><h5>Fecha Inicio</h6></strong><input type="text" name="fecha_inicio" value="{{$convenio->FECHA_INICIO}}" placeholder="Fecha inicio de convenio" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" id="fecha_inicio" class="form-control" required>
                            </p>
                            <p>
                                    <strong><h5>Fecha Termino</h6></strong>    <input type="text" name="fecha_final" value="{{$convenio->FECHA_TERMINO}}" placeholder="Fecha final de convenio" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" id="fecha_inicio" class="form-control">
                
                            </p>
                            <p>
                                    <strong><h5>Numero Convenio</h6></strong>        <input type="text" name="n_convenio" value="{{$convenio->N_CONVENIO}}"placeholder="Numero de Convenio" class="form-control" required>
                                </p>
                            <p>
                                    <strong><h5>Condición de pago</h6></strong>   <input type="text" name="condicion_pago" value="{{$convenio->CONDICION_PAGO}}"placeholder="Condiciones de pago" class="form-control" required>
                            </p>
                            <p>
                                    <strong><h5>Nombre Persona a cargo</h6></strong>  <input type="text" name="nombre_persona" value="{{$convenio->NOMBRE_PERSONA_ACARGO}}" placeholder="Nombre de persona a cargo" class="form-control" required>
                            </p>
                            <p>
                                    <strong><h5>Telefono Persona a cargo</h6></strong>  <input type="text" name="telefono_persona" value="{{$convenio->NUMERO_PERSONA}}" placeholder="Télefono de persona a cargo" class="form-control" required>
                            </p>
                            <p>
                                    <strong><h5>Correo de Persona a cargo</h6></strong><input type="text" name="correo_persona" value="{{$convenio->CORREO_PERSONA}}" placeholder="Correo de persona a cargo" class="form-control" required>
                            </p>
                      <p>
                          <input type="submit" value="Actualizar" class="btn btn-success">
                          <a href="/convenio" class="btn btn-default">Regresar</a>
                      </p>
                      
               
              </div>
          </div>

          @if(Session::has('message'))
          <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
      @endif
                </div>
                </div>
  </form>
  @endsection
</body>
</html>