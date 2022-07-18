@extends('layout.master')

@section('content')

    <h1>Edit User</h1>
    <form method="POST" action="{{ route('users.update', ['user'=>$user->id]) }}">
        @method('PUT')
        @csrf 
        <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="{{ $user->name }}">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="phone" class="form-control" name="phone" id="phone" value="{{ $user->phone }}">
  </div>
  <button type="submit" class="btn btn-success">Save</button>
    </form>
    @endsection