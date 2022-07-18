@extends('layout.master')

@section('content')

<h1>Create User</h1>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf  
        <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="phone" class="form-control" name="phone" id="phone">
  </div>
  <button type="submit" class="btn btn-success">Create</button>
    </form>

@endsection