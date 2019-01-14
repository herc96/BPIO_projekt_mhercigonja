@extends('layouts.app')

@section('content')

<a class="btn btn-primary float-right" href="/subjects/new">Novi</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">year</th>
      <th scope="col">hour_lesson</th>
      <th scope="col">hour_exercise</th>
      <th scope="col">teacher_id</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($subjects as $subject)
    <tr>
      <td><?= $subject->id ?></td>
      <td><?= $subject->name ?></td>
      <td><?= $subject->description ?></td>
      <td><?= $subject->year ?></td>
      <td><?= $subject->hour_lesson ?></td>
      <td><?= $subject->hour_exercise ?></td>
      <td><?= $subject->teacher->first_name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection