@extends('layout')

@section('content')

<h2>Edit Country</h2>

<form action="{{ route('country.update',$country->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" value="{{ $country->name }}" class="form-control">
</div>

<div class="mb-3">
<label>Code</label>
<input type="text" name="code" value="{{ $country->code }}" class="form-control">
</div>

<div class="mb-3">
<label>Capital</label>
<input type="text" name="capital" value="{{ $country->capital }}" class="form-control">
</div>

<div class="mb-3">
<label>Continent</label>
<input type="text" name="continent" value="{{ $country->continent }}" class="form-control">
</div>

<button class="btn btn-primary">Update</button>

<a href="{{ route('country.index') }}" class="btn btn-secondary">
Back
</a>

</form>

@endsection