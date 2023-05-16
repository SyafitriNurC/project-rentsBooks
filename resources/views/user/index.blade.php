@extends('layouts.user')
@section('title.Dashboard')
@section('content')

<h1>Hi! Welcome Back</h1>

<div class="row mt-4 ms-5" style="display:flex; flex-wrap:wrap;">
    @foreach ($data as $book)
<div class="col-lg-4 mb-3" style="margin-top: 50px; width:25%;">
<div class="card" style="padding-bottom:20px;width: 26.5rem; text-align:center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">
    <img src="/image/{{ $book['image'] }}" class="card-img-top" alt="..." style="min-height: 250px;max-height:400px; width:100%; object-fit:cover;">
    <div class="card-body">
      <h2 class="card-title"><b>{{$book['title']}}</b></h2>
      <p class="card-text">{{$book['writer']}}</p>
      <a href="#" class="btn btn-primary">Reading</a>
    </div>
  </div>
</div>
@endforeach

</div>
{{-- <div class="container mt-3">
    <div class="row my-4 ms-5">
        <div class="col-lg-3 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="assets/img/buku/book2.jpg" class="card-img-top" alt="..." style="max-height: 300px">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="assets/img/buku/book2.jpg" class="card-img-top" alt="..." style="max-height: 300px">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="assets/img/buku/book2.jpg" class="card-img-top" alt="..." style="max-height: 300px">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="assets/img/buku/book2.jpg" class="card-img-top" alt="..." style="max-height: 300px">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}


@endsection
