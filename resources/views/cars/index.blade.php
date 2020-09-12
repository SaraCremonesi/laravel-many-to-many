<h1>Cars list</h1>
<div>
  <a href="{{route('cars.create')}}">Add new car</a>
</div>
<br>
<br>
@foreach ($cars as $car)
  <div>
    <a href="{{ route('cars.show', $car)}}">{{$car->manifacturer}} - Motore: {{ $car->engine}}</a>
  </div>
  <div>
    <a href="{{ route('cars.edit', $car) }}">Edit</a>
    <form action="{{route('cars.destroy', $car)}}" method="post">
      @csrf
      @method('DELETE')
      <input type="submit" value="Delete">
    </form>
  </div>
@endforeach
