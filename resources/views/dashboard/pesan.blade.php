@extends('layouts.main')

@section('title', 'messege')
@section('content')
<br>
    <h2 style="margin-left: 20px">Message from User</h2>
    <div class="card vh-100">
    <table class="table">
     <thead class="table-secondary text-center">
       <tr>
         <th scope="col">No</th>
         <th scope="col">Name</th>
         <th scope="col">Message</th>
         <th scope="col">Action</th>
       </tr>
     </thead>
     <tbody class="table-group-divider text-center">
          <tr>
               @foreach($pesan as $number => $ps)
               @if ($ps['status'] == 0)
               <th scope="row">{{$number +1}}</th>
               <td>{{$ps->name}}</td>
               <td>{{$ps->pesan}}</td>
               <td>
                   <form action="{{route('delete', $ps->id)}}" method="POST" class="d-inline">
                       @csrf
                       <button type="submit" class="bi bi-trash"></button>
                   </form>
               </td>
               @endif
           </tr>
          @endforeach
     </tbody>
   </table>
    </div>
@endsection