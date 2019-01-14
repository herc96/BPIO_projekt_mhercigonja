@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/signs">
@csrf

<div class="form-group">
    <input class="form-control" name="test1date" type="text" placeholder="Test 1 date">
</div>
<div class="form-group">
    <input class="form-control" name="test1grade" type="text" placeholder="Test 1 grade">
</div>
<div class="form-group">
    <input class="form-control" name="test2date" type="text" placeholder="Test 2 date">
</div>
<div class="form-group">
    <input class="form-control" name="test2grade" type="text" placeholder="Test 2 grade">
</div>
<div class="form-group">
    <input class="form-control" name="testdate" type="text" placeholder="Test date">
</div>
<div class="form-group">
    <input class="form-control" name="testgrade" type="text" placeholder="Test grade">
</div>
<div class="form-group">
    <input class="form-control" name="presence" type="text" placeholder="Presence">
</div>
<div class="form-group">
    <select class="form-control" name="student_id">
        @foreach($students as $student)
        <option value="{{ $student->id }}">{{ $student->first_name }} {{ $student->last_name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <select class="form-control" name="subject_id">
        @foreach($subjects as $subject)
        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
        @endforeach
    </select>
</div>


<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection