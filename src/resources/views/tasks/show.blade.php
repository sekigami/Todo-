@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Task Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $task->title }}
        </div>
        <div class="card-body">
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
