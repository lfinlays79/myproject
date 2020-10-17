@extends('layouts.app')

@section('content')

<p>This is the create page</p>

<form action="{{route('tasks.store')}}" method="POST">
@csrf

Details<input type="text" name="details" />
Completed<input type="text" name="completed" />

<input type="submit" name="submitme" value="Add" />
</form>


@endsection