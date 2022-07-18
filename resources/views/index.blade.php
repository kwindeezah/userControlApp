@extends('layout.master')

@section('content')

        <h1>User Info</h1>
        @foreach($users as $user)
        <section>
        <ul class="list-group">
            <li class="list-group-item">
                <h2>{{ $user->name }}</h2>
                <p>{{ $user->email }}</p>
                <span>{{ $user->phone }}</span>
                <a href="{{ route('users.edit', ['user'=>$user->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                <form method="POST" action="{{ route('users.destroy', ['user'=>$user->id]) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                </form>
            </li>
        </ul>
        </section>
        @endforeach
<div class="row">
    {{ $users->links() }}
</div>
@endsection