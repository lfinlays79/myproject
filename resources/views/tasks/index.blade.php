@extends('layouts.app')

@section('content')

<p><a href="{{ route('tasks.create')}}"> Add a Task </a></p>
<form action="{{ route('tasks.add') }}" method="GET">
@csrf
<input type="submit" name="addme" value="Add Dummy Tasks" />
</form>
<table>
<tr>
<th>ID</th>
<th>Details</th>
<th>Completed</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
</tr>

@foreach ($tasks as $task)
<tr>
<td>{{ $task->id }}</td>
<td>{{ $task->details }}</td>
<td>{{ $task->completed }}</td>
<td>
<form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
@csrf
@method('DELETE')
<input type="submit" name="deleteme" value="delete" />
</form>
</td>
<td>
<form action="{{ route('tasks.edit', $task->id) }}" method="GET">
@csrf
<input type="submit" name="editme" value="edit" />
</form>
</td>
</tr>
@endforeach

</table>

@endsection