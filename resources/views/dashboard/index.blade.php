@extends('layouts.main')

@section('title', 'dashbord')
@section('content')
<br>
    <h2 style="margin-left: 20px">Hallo, Admin</h2>

    <div class="row my-5">
     <div class="col-lg-4">
          <div class="card-data book">
               <div class="row">
                    <div class="col-lg-6">
                         <i class="bi bi-book-half"></i>
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                         <div class="card-desc">
                              Books
                         </div>
                         <div class="card-count">
                              5
                         </div>
                    </div>
                    
               </div>
          </div>
     </div>

     <div class="col-lg-4">
          <div class="card-data category">
               <div class="row">
                    <div class="col-lg-6">
                         <i class="bi bi-tags-fill"></i>
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                         <div class="card-desc">
                              Category
                         </div>
                         <div class="card-count">
                              5
                         </div>
                    </div>
                    
               </div>
          </div>
     </div>

     <div class="col-lg-4">
          <div class="card-data user">
               <div class="row">
                    <div class="col-lg-6">
                         <i class="bi bi-person-fill"></i>
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                         <div class="card-desc">
                              User
                         </div>
                         <div class="card-count">
                              5
                         </div>
                    </div>
                    
               </div>
          </div>
     </div>

    </div>
@endsection