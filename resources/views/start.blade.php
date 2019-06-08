@extends('layouts.app')

@section('content')
            <h1>Välkommen till World19</h1>
            <h4>En tävling kring fotbolls-VM i Frankrike 2019</h4>
            <p>Här gäller det att plocka ut fyra lag, fem utespelare och en målvakt för att samla poäng. Genom att lagen vinner, utespelarna gör mål och målvakten håller nollan så får du en poäng per sådan händelse.</p>
            <h3>Grupperingar</h3>
            <p>Spelarna och lagen är indelade i olika grupperingar, där de bästa målskyttarna och mest förväntade vinstrika lagen finns i den högsta, och de lite mindre förväntade i de lägre. Men du får bara plocka ett lag från varje gruppering, så det gäller att välja mellan <a href="/teams/23">USA</a> och <a href="teams/1">Frankrike</a>, mellan <a href="players/1">Eugénie Le Sommer</a> och <a href="players/2">Sam Kerr.</a></p>
            <p>Den som behöver förkovra sig lite mer i vilka spelare som har vana av att göra mål, kan med fördel kika på <a href="https://en.wikipedia.org/wiki/2019_FIFA_Women%27s_World_Cup_squads">denna wikipedia-sida</a>.
            </p>
            <h2>Nyheter</h2>
            <p>
                Nu räknar algoritmerna rätt på vår tabell (menyvalet "ställning"). <i>Det var en miss i SQL-frågan som inte tydligt nog skiljde på lag och spelare.</i>
            </p>
            <p>Gör som {{ $numberOfUsers }} andra, 
            <a href="/register">registrera dig</a> eller
            <a href="/login">logga in.</a>
            </p>           
@endsection