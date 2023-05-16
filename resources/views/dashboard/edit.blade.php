@extends('layouts.main')

@section('title', 'Edit')
@section('content')

<form id="create-form" action="{{route('update', $user->id)}}" method="POST">
    @csrf
    @method('PATCH')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" value={{ $user->name}} class="form-control" id="name" placeholder="name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" value={{ $user->email}} class="form-control" id="email" placeholder="email">
    </div>
    <div class="mb-3">
        <label for="noHp" class="form-label">No Hp</label>
        <input type="number" name="no_hp" value={{ $user->no_hp}} class="form-control" id="noHp" placeholder="+62">
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" name="address" value={{ $user->address}} class="form-control" id="address"
            placeholder="address">
    </div>
    <button type="submit" class="btn w-25 btn-primary">Save</button>
</form>

@endsection
