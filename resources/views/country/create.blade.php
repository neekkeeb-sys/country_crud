@extends('layout')

@section('content')

<h2>Add Country</h2>

<form action="{{ route('country.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Country Name</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="mb-3">
        <label>Code</label>
        <input type="text" name="code" class="form-control">
    </div>

    <div class="mb-3">
        <label>Capital</label>
        <input type="text" name="capital" class="form-control">
    </div>

    <div class="mb-3">
        <label>Continent</label>
        <input type="text" name="continent" class="form-control">
    </div>

    <button class="btn btn-success">Save</button>

    <a href="{{ route('country.index') }}" class="btn btn-secondary">
        Back
    </a>

</form>

@endsection
