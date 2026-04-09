@extends('layout')

@section('content')

<div class="d-flex justify-content-between mb-3">

<h2>Country List</h2>

<a class="btn btn-success" href="{{ route('country.create') }}">
Add Country
</a>

</div>

@if ($message = Session::get('success'))

<div class="alert alert-success">
{{ $message }}
</div>

@endif

<table class="table table-bordered table-striped">

<tr>
<th>ID</th>
<th>Name</th>
<th>Code</th>
<th>Capital</th>
<th>Continent</th>
<th width="200px">Action</th>
</tr>

@foreach ($countries as $country)

<tr>

<td>{{ $country->id }}</td>
<td>{{ $country->name }}</td>
<td>{{ $country->code }}</td>
<td>{{ $country->capital }}</td>
<td>{{ $country->continent }}</td>

<td>

<a class="btn btn-primary btn-sm"
href="{{ route('country.edit',$country->id) }}">
Edit
</a>

<form action="{{ route('country.destroy',$country->id) }}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
Delete
</button>

</form>

</td>

</tr>

@endforeach

</table>

{{ $countries->links() }}

@endsection