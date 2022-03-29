@include('vehiculos.nav');
<form action="{{ url('/vehiculos/'.$vehiculo->id )}}" method="POST">
@csrf
{{method_field('PATCH')}}

@include('vehiculos.form');


</form>


