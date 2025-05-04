@extends('layouts.admin')
@section('title', 'Create Task')
@section('content')
<div class="container mt-5">
    <h1 class="h4 mb-4 fw-bold">Create Task</h1>
    <form action="#" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" rows="4" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select" required>
                <option value="pending">Pending</option>
                <option value="in_progress">In Progress</option>
                <option value="completed">Completed</option>
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Create Task</button>
        </div>
    </form>
    <a href="#" class="text-primary text-decoration-underline">Back to Task List</a>
</div>
@endsection