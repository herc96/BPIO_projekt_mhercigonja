@extends('layouts.app')

@section('content')
@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/teachers">
@csrf

<div class="form-group">
    <input class="form-control" name="first_name" type="text" placeholder="First Name">
</div>
<div class="form-group">
    <input class="form-control" name="last_name" type="text" placeholder="Last Name">
</div>
<div class="form-group">
    <input class="form-control" name="title" type="text" placeholder="Title">
</div>



<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection