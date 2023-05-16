@extends('layouts.main')

@section('title', 'user')
@section('content')
<br>
@if (Session('successDelete'))
<div class="alert alert-success">
  {{Session::get('successDelete')}}
</div>
@endif
@if (Session('successlogin'))
<div class="alert alert-success">
     {{Session::get('successlogin')}}
</div>
@endif
<h1 style="margin-left: 20px">Ini halaman user</h1>
<div class="card vh-100">
    <table class="table">
        <thead class="table-secondary text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">No Hp</th>
                <th scope="col">Address</th>
                <th scope="col" colspan="2">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider text-center">
            <tr>
                @foreach($data as $number => $dt)
                @if ($dt['status'] == 0)
                <th scope="row">{{$number +1}}</th>
                <td>{{$dt->name}}</td>
                <td>{{$dt->email}}</td>
                <td>{{$dt->no_hp}}</td>
                <td>{{$dt->address}}</td>
                <td>
                    <form action="{{route('delete', $dt->id)}}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="bi bi-trash"></button>
                    </form>
                    <a href="{{route('editUsers', $dt->id)}}"><button type="submit"
                      class="bi bi-pencil-square"></button></a>
                </td>
                @endif
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection
