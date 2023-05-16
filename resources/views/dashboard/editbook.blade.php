@extends('layouts.main')

@section('title', 'Edit Book')
@section('content')

<section class="section">
     <div class="row">
         <div class="col-lg-11">
             <div class="card">
                 <div class="card-body">
                     <form method="POST" action="{{route('update', $book->id)}}" enctype="multipart/form-data">
                         @csrf
                         @method('PATCH')
                         <div class="row mb-3">
                             <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                             <div class="col-sm-10">
                                 <input type="text" class="form-control" name="title" value={{ $book->title}} >
                             </div>
                         </div>
                         
                         <div class="row mb-3">
                             <label for="inputText" class="col-sm-2 col-form-label">Penulis</label>
                             <div class="col-sm-10">
                                 <input type="text" class="form-control" name="writer" value={{ $book->writer}} >
                             </div>
                         </div>
                     
                         <div class="row mb-3">
                             <label for="inputText" class="col-sm-2 col-form-label">Penerbit</label>
                             <div class="col-sm-10">
                                 <input type="text" class="form-control" name="publisher" value={{ $book->publisher}} >
                             </div>
                         </div>

                         <div class="row mb-3">
                             <label for="inputText" class="col-sm-2 col-form-label">Kategori</label>
                             <div class="col-sm-10">
                                 <input type="text" class="form-control" name="category" value={{ $book->category}}>
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
                                 <textarea class="form-control" style="height: 100px" name="synopsis">{{ $book->synopsis}}</textarea>
                             </div>
                         </div>
                 
                         <div class="row mb-3">
                             <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                             <div class="col-sm-10">
                                 <input class="form-control" type="file" id="formFile" name="image" value={{ $book->image}}>
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

@endsection
