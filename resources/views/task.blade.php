@extends('layouts.master')

@section('content')
    <h1>To Do List</h1>
    <p>μμ:: {{ $task['name'] }}</p>
    <p>κΈ°ν:: {{ $task['due_date'] }}</p>
@endsection
