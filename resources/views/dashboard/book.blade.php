@extends('layouts.main')

@section('title', 'books')
@section('content')
    <h1>Ini halaman book</h1>
    <section class="section">
        <div class="row">
            <div class="col-lg-11">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route ('add')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Penulis</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="writer">
                                </div>
                            </div>
                        
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Penerbit</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="publisher">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="category">
                                </div>
                            </div>
                        
                            {{-- <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="kategori">
                                        <option>Pilih Kategori</option>
                                        @foreach($category as $cate)
                                        <option value="{{ $cate->categoryID}}">{{ $cate['category_name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                    
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Sinopsis</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px" name="synopsis"></textarea>
                                </div>
                            </div>
                    
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" name="image">
                                </div>
                            </div>
                    
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>        
        </div>
    </section>

    <div class="row my-5">
        <div class="col">
            <table class="table bg-white rounded shadow-sm-table-hover text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Sinopsis</th>
                        <th>Kategori</th>
                        <th>Cover</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($book as $number => $book)
                    <tr>
                        <td>{{ $number+1}}</td>
                        <td>{{ $book['title']}}</td>
                        <td>{{ $book['writer']}}</td>
                        <td>{{ $book['publisher']}}</td>
                        <td>{{ $book['category']}}</td>
                        <td>{{ $book['synopsis']}}</td>
                        <td><img width="100px" src="/image/{{$book['image']}}" alt=""></td>
                        <td><form action="{{route ('editBooks', $book->id)}}" method="GET" class="d-inlin">
                            @csrf
                            <button class="bg-transparent" style="border: none; color: rgb(229, 83, 83)"><i class="bi bi-pencil-square"></i></a></button>
                            {{-- <button class="bg-transparent" style="border: none; color: rgb(229, 83, 83)"><i class="bi bi-trash-fill"></i></a></button> --}}
                        </form>

                        
                            <a href="{{route('delete', $book->id)}}"><button class="bg-transparent" style="border: none; color: rgb(229, 83, 83)" type="submit"><i class="bi bi-trash-fill"></i></button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> 
@endsection

