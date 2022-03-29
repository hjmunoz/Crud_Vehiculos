

<div class="container">
<br><br>
<label for="Nombre" class="form-label">Placa:</label>
<input type="text" class="form-control" name="Placa" value="{{isset ($vehiculo->Placa)?$vehiculo->Placa:''}}" id="Placa"><br><br>

<label for="ApellidoPaterno" class="form-label">Nombre:</label>
<input type="text" class="form-control" name="Nombre" value="{{isset($vehiculo->Nombre)?$vehiculo->Nombre:''}}" id="Nombre"><br><br>

<label for="ApellidoMaterno" class="form-label">Fecha:</label>
<input type="date" class="form-control" name="Fecha" value="{{isset($vehiculo->Fecha)?$vehiculo->Fecha:''}}" id="Fecha"><br><br>
    
<input type="submit" class="btn btn-dark" value="Guardar datos"><br><br> 
</div>
