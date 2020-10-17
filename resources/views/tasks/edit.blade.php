@extends('layouts.app')

@section('content')

<p>This is the edit page</p>

<form action="{{ route('tasks.update', $tasks->id) }}" method="POST">
@csrf
@method('PUT')

<table>
<tr>
<td>{{ $tasks->id }}</td>
<td><input type="text" value="{{ $tasks->details }}" name="details" /></td>
<td><input type="text" value="{{ $tasks->completed }}" name="completed" /></td>
<td><input type="submit" name="updateme" value="update" /></td>

</tr>
</table>
</form>

@endsection