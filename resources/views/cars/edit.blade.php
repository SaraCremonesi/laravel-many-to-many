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

<form action="{{ route('cars.update', $car) }}" method="post">
  @csrf
  @method('PUT')

  <div>
    <div>
      <label>Manufacturer</label>
      <input type="text" name="manifacturer" value="{{ old('manifacturer') ? old('manifacturer') : $car->manifacturer }}">
    </div>

    <div>
      <label>Year</label>
      <input type="text" name="year" value="{{ old('year') ? old('year') : $car->year }}">
    </div>

    <div>
      <label>Engine</label>
      <input type="text" name="engine" value="{{ old('engine') ? old('engine') : $car->engine }}">
    </div>

    <div>
      <label>Plate</label>
      <input type="text" name="plate" value="{{ old('plate') ? old('plate') : $car->plate }}">
    </div>

    <div>
      <span>Tags:</span>
      @foreach ($tags as $tag)
        <div>
          <input type="checkbox" name="tags[]" {{ $car->tags->contains($tag) ? 'checked' : '' }} value="{{$tag->id}}">
          <label>{{$tag->name}}</label>
        </div>
      @endforeach
    </div>

    <div>
      <select name="user_id">
        @foreach ($users as $user)
          <option value="{{$user->id}}" {{ $user->id == $car->user->id ? 'selected' : '' }}>{{$user->name}}</option>
        @endforeach
      </select>
    </div>

    <div>
      <input type="submit" value="Edit">
    </div>
  </div>
</form>
