
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
                    <h4>Modificar cliente</h4>
                </div>
               
                <div class="panel-body">
                <form action="{{ route('clientes.update', $clientes->RUT_CLIENTE)}}" method="POST">
               
                          {{ csrf_field() }}
                          <input name="_method" type="hidden" value="PUT">
                      
                      <p>   
                        <strong><h5>Rut Cliente</h6></strong><input type="text" name="rut" value="{{ $clientes->RUT_CLIENTE }}" placeholder="Rut" class="form-control" onkeypress='return validaNumericos(event)' maxlength="9" minlength="9" required>
                      </p>
                      <p>
                        <strong><h5>Nombre Cliente</h6></strong><input type="text" name="nombre" value="{{ $clientes->NOMBRE_COMPLETO }}" placeholder="Nombre" maxlength="50" class="form-control" onkeypress='return validar(event)' required>
                      </p>
                      <p>
                            <strong><h5>Dirección Cliente</h6></strong>  <input type="text" name="direccion" value="{{ $clientes->DIRECCION }}" placeholder="Dirección" maxlength="50" class="form-control" required>
                      </p>	
                      <p>
                            <strong><h5>Ciudad Cliente</h6></strong>  <input type="text" name="ciudad" value="{{ $clientes->CIUDAD }}" placeholder="Ciudad" maxlength="50" class="form-control" onkeypress='return validar(event)'>
                      </p>
                      <p>
                            <strong><h5>Comuna Cliente</h6></strong>  <input type="text" name="comuna" placeholder="Comuna" value="{{ $clientes->COMUNA }}"class="form-control" onkeypress='return validar(event)'>
                      </p>
                      <p>
                            <strong><h5>Giro Cliente</h6></strong>  <input type="text" name="giro" placeholder="Giro" value="{{ $clientes->GIRO }}" class="form-control" onkeypress='return validar(event)' required>
                      </p>
                      <p>
                            <strong><h5>Telefono Cliente</h6></strong>  <input type="text" name="telefono" placeholder="Telefono" value="{{ $clientes->TELEFONO }}" maxlength="9" minlength="9" class="form-control" onkeypress='return validaNumericos(event)'>
      
                      </p>
                      <p>
                            <strong><h5>Nombre Contacto</h6></strong>   <input type="text" name="nombre_contacto" value="{{ $clientes->NOMBRE_CONTACTO }}" placeholder="Nombre Contacto" maxlength="50" class="form-control" onkeypress='return validar(event)' required>
                        </p>
                      <p>
                            <strong><h5>Telefono Contacto</h6></strong>   <input type="text" name="telefono_contacto" placeholder="Telefono Contacto" value="{{ $clientes->TELEFONO_CONTACTO }}" maxlength="9" minlength="9" class="form-control" onkeypress='return validaNumericos(event)'>
        
                        </p>
                      <p>
                            <strong><h5>Tipo de Cliente</h6></strong>
                            <select name="tipo" style="height: 35px;" class="form-control" >
                                    <option value="Fijo" @if($clientes->TIPO =='Fijo') selected @endif>Fijo</option>
                                    <option value="Esporadico" @if($clientes->TIPO =='Esporadico') selected @endif>Esporadico</option> 
                            </select>



                          
                      </p>
                      <p>
                          <input type="submit" value="Actualizar" class="btn btn-success">
                          <a href="/clientes" class="btn btn-default">Regresar</a>
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