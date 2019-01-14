@extends('layouts.app')

@section('content')
@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif
<form method="post" action="/students">
@csrf

<div class="form-group">
    <input class="form-control" name="first_name" type="text" placeholder="First name">
</div>
<div class="form-group">
    <input class="form-control" name="last_name" type="text" placeholder="Last name">
</div>
<div class="form-group">
    <input class="form-control" name="dateofbirth" type="text" placeholder="Date of birth">
</div>
<div class="form-group">
    <input class="form-control" name="address" type="text" placeholder="Address">
</div>
<div class="form-group">
    <input class="form-control" name="sign" type="text" placeholder="Sign">
</div>


<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection