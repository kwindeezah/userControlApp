<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>User Management Apps</title>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-dark bg-info position-relative">
        <span class="navbar-brand mb-0 h1 position-absolute top-50 start-0 translate-middle">User Management App</span>
        <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> -->
          <!-- <div class="navbar-nav position-absolute top-50 start-50 translate-middle"> -->
            <a class="nav-item nav-link position-absolute top-50 start-50 translate-middle" href="{{ route('users.create') }}">Create User</a>
          <!-- </div> -->
        <!-- </div> -->
    </nav>
    <!-- Navigation Bar End -->
    <!-- Bread Crumb -->
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>
<div class="container-fluid">
 @if (Session::has('status'))
  <div class="row alert alert-success">
      {{ Session::get('status') }}
  </div>
 @endif