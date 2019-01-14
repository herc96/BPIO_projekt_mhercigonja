@extends('layouts.app')

@section('content')
@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/subjects">
@csrf

<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Name">
</div>
<div class="form-group">
    <input class="form-control" name="description" type="text" placeholder="Description">
</div>
<div class="form-group">
    <input class="form-control" name="year" type="text" placeholder="Year">
</div>
<div class="form-group">
    <input class="form-control" name="hour_lesson" type="text" placeholder="Hour lesson">
</div>
<div class="form-group">
    <input class="form-control" name="hour_exercise" type="text" placeholder="Hour exercise">
</div>
<div class="form-group">
    <select class="form-control" name="teacher_id">
        @foreach($teachers as $teacher)
        <option value="{{ $teacher->id }}">{{ $teacher->first_name }} {{ $teacher->last_name }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection