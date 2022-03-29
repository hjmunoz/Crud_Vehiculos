@include('vehiculos.nav')
<form action="{{url('/vehiculos')}}" method="post">
@csrf
@include('vehiculos.form')

</form>