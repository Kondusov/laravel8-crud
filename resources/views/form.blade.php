@extends('layout')
@section('title', isset($user) ? 'Update ' .$user->name : 'Create user')
@section('content')
<a href="{{route('users.index')}}" type="button" class="btn btn-secondary mb-3">Back to Users list</a>
<form method="POST"
    @if (isset($user))
    action="{{route('users.update', $user)}}"
    @else
    action="{{route('users.store')}}"
    @endif
    >
    @csrf
    @isset($user)
        @method('PUT')
    @endisset
    <div class="row mb-3">
      <label for="inputName" class="col-sm-1 col-form-label">Name</label>
      <div class="col-sm-11">
        <input value="{{isset($user) ? $user->name : null}}"
        name="name" type="text" class="form-control" placeholder="Name" aria-label="Name">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputEmail" class="col-sm-1 col-form-label">Email</label>
      <div class="col-sm-11">
        <input value="{{isset($user) ? $user->email : null}}"
        name="email" type="email" class="form-control" placeholder="Email" aria-label="Email">
      </div>
    </div>
    <div class="row mb-3">
    </div>
    <button type="submit" class="btn btn-success">{{ isset($user) ? 'Update ' : 'Create' }}</button>
  </form>
@endsection