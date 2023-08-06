@extends('layouts.app')
@section('sidebar')
@parent
<div>Topics</div>
@endsection
@section('content')
<h2>Create Topic</h2>
<form action="/topic" method="POST">
    @csrf
    <div class="mb-3">
        <label for="topicTitle" class="form-label">Topic title:</label>
        <input type="text" class="form-control" id="topicTitle" name="title" placeholder="Enter topic title">
        <input type="submit" value="Create" class="btn btn-sm btn-primary mt-3">
    </div>
</form>
@endsection
