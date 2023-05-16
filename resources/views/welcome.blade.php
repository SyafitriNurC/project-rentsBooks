<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rents book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-secondary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo.png" width="40" height="30" class="d-inline-block align-text-top">
                <b>Rent Books</b>
            </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Horor</a></li>
                  <li><a class="dropdown-item" href="#">Comedy</a></li>
                  <li><a class="dropdown-item" href="#">Romance</a></li>
                  <li><a class="dropdown-item" href="#">Anime</a></li>
                </ul>
              </li>
              <li class="nav-item">
                @if (Auth::user())
                <a class="nav-link btn btn-white active" href="/logout">logout</a>
                @else
                <a class="nav-link btn btn-white active" href="/login">login</a>
                @endif
              </li>
            </ul>
          </div>
        </div>
      </nav>
      {{-- Akhir navbar --}}

    {{-- Carousel --}}
      <div id="carouselExampleInterval" class="carousel slide" style="max-height: 400px; max-width : 100%" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item" data-bs-interval="1000">
            <img src="assets/img/iklan2.jpg" class="d-block w-100" alt="..." style="max-height: 400px">
          </div>
          <div class="carousel-item active" data-bs-interval="1000">
            <img src="assets/img/iklan1.jpg" class="d-block w-100" alt="..." style="max-height: 400px">
          </div>
          <div class="carousel-item">
            <img src="assets/img/iklan3.jpg" class="d-block w-100" alt="..." style="max-height: 400px">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    {{-- akhir caoursel --}}

    {{-- Jumbotron --}}
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h1>Hallo syafitri</h1>
                <a href="#" class="btn btn-secondary">Ayo Daftarkan Sekarang</a>
            </div>
            <div class="col-md-8 mb-3">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                  It has survived not only five centuries, but also the leap into electronic typesetting, 
                  remaining essentially unchanged.
                </p>
            </div>
        </div>
    </div>
    {{-- Akhir jumbotron --}}

    {{-- card popuular book --}}
    <section style="background-color: #DDDDDD;">
    <div class="container mt-3">
        <div class="row text-center text-dark">
            <h2 class="mt-2">Popular Books</h2>
            <hr class="solid">
        </div>
        <div class="row my-4 ms-5">
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/buku/book1.jpg" class="card-img-top" alt="..." style="max-height: 400px">
                    <div class="card-body">
                      <h5 class="card-title">Scavengers</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-secondary w-100">Read More</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/buku/book2.jpg" class="card-img-top" alt="..." style="max-height: 400px">
                    <div class="card-body">
                      <h5 class="card-title">Around The Moon</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-secondary w-100">Read More</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/buku/book3.jpg" class="card-img-top" alt="..." style="max-height: 400px">
                    <div class="card-body">
                      <h5 class="card-title">The Upstairs Room</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-secondary w-100">Read More</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    </section>
    {{-- akhir popular book --}}

    {{-- contact --}}
    <div class="container">
        <div class="row text-center">
            <h2>Messege</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form method="POST" action="{{route('store')}}" class="row">
                  @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                      <label for="messege" class="form-label">Messege</label>   
                      <textarea name="pesan" class="form-control" id="messege"></textarea>
                    </div>
                    <button type="submit" class="btn w-25 btn-secondary">Send</button>
                </form>
            </div>
        </div>
    </div>
    {{-- akhir contact --}}
    {{-- footer --}}
   <footer class="mt-5 bg-secondary text-center align-items-center" style="height:40px;">
    <p>Created by <a href="#" style="text-decoration: none; color:white;" target="_blank">Syafitri</a></p>

   </footer>
    {{-- akhir footer --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</body>
</html>