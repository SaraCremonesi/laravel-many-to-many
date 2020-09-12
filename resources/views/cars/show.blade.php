<h1>Dettagli Auto</h1>

<h2> {{ $car->manifacturer}} - Motore: {{ $car->engine }}</h2>
<div>
  @foreach ($car->tags as $tag)
    <span>Tags: {{$tag->name}}</span>
  @endforeach
</div>
<ul>
  <li>Year: {{ $car->year }}</li>
  <li>Plate: {{ $car->plate }}</li>
</ul>

<h3>Owner details</h3>
<p>
  <b>{{ $car->user->name}}</b>
</p>
<p>
  Contacts: <br>
  <i>{{ $car->user->email}}</i>
</p>
<a href="{{ route('cars.index')}}">Back</a>
