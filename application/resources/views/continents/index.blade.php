@extends('layouts.app')

@section('content')

<a class="btn btn-primary float-right" href="/continents/new">Novi</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">number_of_countries</th>
      <th scope="col">native_name</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($continents as $continent)
    <tr>
      <td><?= $continent->name ?></td>
      <td><?= $continent->number_of_countries ?></td>
      <td><?= $continent->native_name ?></td>

      
    </tr>
  @endforeach
  </tbody>
</table>

@endsection