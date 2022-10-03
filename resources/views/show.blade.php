@extends('layout')
@section('title', 'User ' . $user->name)
@section('content')
<a href="{{route('users.index')}}" type="button" class="btn btn-secondary mb-3">Back to Users list</a>
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">id: {{$user->id}}</li>
            <li class="list-group-item">Name: {{$user->name}}</li>
            <li class="list-group-item">Email: {{$user->email}}</li>
            <li class="list-group-item">Created: {{$user->created_at->format('d/m/y H:i:s')}}</li>
            <li class="list-group-item">Updated: {{$user->updated_at->format('d/m/y H:i:s')}}</li>
        </ul>
    </div>
    <a type="button" class="btn btn-warning mt-3" href="{{route('users.edit', $user)}}">Edit</a>
@endsection
