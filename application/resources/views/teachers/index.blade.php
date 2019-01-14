@extends('layouts.app')

@section('content')

<a class="btn btn-primary float-right" href="/teachers/new">Novi</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">first_name</th>
      <th scope="col">last_name</th>
      <th scope="col">title</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($teachers as $teacher)
    <tr>
      <td><?= $teacher->first_name ?></td>
      <td><?= $teacher->last_name ?></td>
      <td><?= $teacher->title ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection