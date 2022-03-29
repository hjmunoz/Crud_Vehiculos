
@include('vehiculos.nav')

<div class="container">
<table class="table table-striped">
    <thead class="thead-light">
        <tr>
            <th>Codigo</th>
            <th>Placa</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach($vehiculos as $vehiculo)
        <tr>
            <td>{{$vehiculo->id}}</td>
            <td>{{$vehiculo->Placa}}</td>
            <td>{{$vehiculo->Nombre}}</td>
            <td>{{$vehiculo->Fecha}}</td>
                      
            <td>
                <button type="button" class="btn btn-primary"><a style="color:white;" href="{{ url('/vehiculos/'.$vehiculo->id.'/edit') }}">
                Editar
            </a></button>
            
            </td>
             
                <td>
                <form action="{{url('/vehiculos/'.$vehiculo->id)}}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" class="btn btn-danger " onclick="return confirm('¿Quieres Borrar?')"
                    value="Borrar"> 
                </form>

                

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>