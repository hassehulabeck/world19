@extends('layouts.app')

@section('content')
            <h1>Välkommen till Lotta</h1>
            <h4>En tävling kring fotbolls-VM i Frankrike 2019</h4>
            <p>Här gäller det att plocka ut fyra lag, fem utespelare och en målvakt för att samla poäng. Genom att lagen vinner, utespelarna gör mål och målvakten håller nollan så får du en poäng per sådan händelse.</p>
            <h3>Grupperingar</h3>
            <p>Spelarna och lagen är indelade i olika grupperingar, där de bästa målskyttarna och mest förväntade vinstrika lagen finns i den högsta, och de lite mindre förväntade i de lägre. Men du får bara plocka ett lag från varje gruppering, så det gäller att välja mellan USA och Frankrike, mellan Eugénie Le Sommer och Sam Kerr.</p>
            <a href="/entries/create">Ta ut ditt lag</a>
@endsection
@section('foot')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                En tävling från Hulabeck Mediabyrå.
            </div>
        </div>
    </div>
@endsection