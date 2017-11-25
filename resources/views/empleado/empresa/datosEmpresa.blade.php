@extends('layout')

@section('content')

<div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Datos de empresa "{{ $task->nombre }}"</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <!--<span aria-hidden="true">&times;</span>-->
            </button>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Nombre</label>
                <p>{{ $task->nombre }}</p>
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Razón Social</label>
                <p>{{ $task->razon_social }}</p>
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">RFC</label>
                <p>{{ $task->rfc }}</p>
              </div>

              <p><b>Dirección:</b></p>

              <div class="half left cf">
              <label for="recipient-name" class="form-control-label">Calle</label>
                <input type="text" class="form-control" id="calleEmpresa" name="calle_empresa" minlength="5" maxlength="50" required>
              </div>
              <div class="half right cf">
                <label form="recipient-name" class="form-control-label">Número</label>                
                <input type="number" class="form-control" id="numeroEmpresa" name="numero_empresa" minlength="1" maxlength="50" required>
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Colonia</label>
                <input type="text" class="form-control" name="colonia_empresa" minlength="10" maxlength="50" required>
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Código Postal</label>
                <input type="text" class="form-control" name="codigo_postal" minlength="2" maxlength="50" required>
              </div>

              <div class="form-group">
                <label form="recipient-name" class="form-control-label">País</label>
                <select name="pais_empresa" class="countries order-alpha form-control" id="countryId" required>
                <option value="">Selecciona el país</option>
                </select>
              </div>

              <div class="half left cf">
              <label for="recipient-name" class="form-control-label">Ciudad</label>
                <input type="text" class="form-control" name="ciudad_empresa" minlength="5" maxlength="20" required>
              </div>

              <div class="half right cf">
                <label form="recipient-name" class="form-control-label">Estado</label> 
                <select name="estado_empresa" class="states order-alpha form-control" id="stateId" required>
                <option value="">Selecciona el estado</option>
                </select>
              </div>
          </div>
        </div>
    </div>

@stop