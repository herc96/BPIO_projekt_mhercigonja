
@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/students/new">Novi</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">first_name</th>
      <th scope="col">last_name</th>
      <th scope="col">dateofbirth</th>
      <th scope="col">address</th>
      <th scope="col">sign</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($students as $student)
    <tr>
      <td><?= $student->id ?></td>
      <td><?= $student->first_name ?></td>
      <td><?= $student->last_name ?></td>
      <td><?= $student->dateofbirth ?></td>
      <td><?= $student->address ?></td>
      <td><?= $student->sign ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection