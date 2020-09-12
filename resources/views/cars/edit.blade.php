<h1>EDIT YOUR CAR</h1>

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('cars.update', $car) }}" method="put">
  @csrf
  @method('PUT')

  <div>
    <div>
      <label>Manufacturer</label>
      <input type="text" name="model" value="{{ old('manifacturer') ? old('manifacturer') : $car->manifacturer }}">
    </div>

    <div>
      <label>Year</label>
      <input type="text" name="color" value="{{ old('year') ? old('year') : $car->year }}">
    </div>

    <div>
      <label>Engine</label>
      <input type="text" name="size" value="{{ old('engine') ? old('engine') : $car->engine }}">
    </div>

    <div>
      <label>Plate</label>
      <input type="text" name="price" value="{{ old('plate') ? old('plate') : $car->plate }}">
    </div>


    <div>
      <input type="submit" value="Edit">
    </div>
  </div>
</form>
