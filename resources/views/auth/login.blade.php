<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Rents Book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
  </head>
  <body style="background-color: #EEEEEE">
    <section class="vh-100">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md- col-lg-6 col-xl-5">
            <form action="{{route('auth')}}" method="POST">
              @csrf
              <div class="container" style="margin-left: 140px">
                  <div class="content p-4">
                    <div class="container">
                         <br>
                         <h1 style="text-align: center">Rent's Book</h1>
                        <div class="mb-3 mt-4">
                          <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Input your name">
                        </div>
                        <div class="mb-3">
                          <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Input your password">
                        </div>
                        <button type="submit" class="btn w-50 btn-primary">Login<i class="bi bi-arrow-right-circle p-2"></i></button>
                        <p class="small mt-2 pt-1 mb-0 text-center">Don't have an account? <a href="/register">SignUp</a></p>
                        <br>
                    </div>
                  </div>
              </div>
            </form>
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style="margin-right: 150px">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid"
              alt="Sample image" style="margin-right: 60px;">
          </div>
        </div>
      </div>  
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>