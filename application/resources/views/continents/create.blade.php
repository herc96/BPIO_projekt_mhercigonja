@extends('layouts.app')

@section('content')


@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/continents">
@csrf

<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Name">
</div>
<div class="form-group">
    <input class="form-control" name="number_of_countries" type="text" placeholder="Number of countries">
</div>
<div class="form-group">
    <input class="form-control" name="native_name" type="text" placeholder="Native name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
<div class="form-group">
    <select class="form-control" name="student_name">
        @foreach($students as $student)
        <option value="{{ $student->name }}">{{ $student->name }}</option>
        @endforeach
    </select>
</div>
</form>

@endsection