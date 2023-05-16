<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Rents Book</title>
  </head>
  <body style="background-color:rgb(248, 243, 243)">
  <form method="POST" action="{{route('registerAccount')}}">
    @csrf
    <div class="container">
      <div class="container" style="width: 450px; height:70px ">
        <div class="content p-4">
          <div class="card container" style="margin-top: 60px">
            <br>
            <h2 style="text-align: center"><b>Register</b></h2>
              <div class="mb-3 mt-4">
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Name">
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="E-Mail">
              </div>
              <div class="mb-3">
                <input type="number" class="form-control" name="no_hp" id="exampleInputPassword1" placeholder="+62">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" i name="address" d="exampleInputPassword1" placeholder="Address">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control"name="password" id="exampleInputPassword1" placeholder="Password">
              </div>
              <button type="submit" class="btn w-50 btn-primary">Submit</button>
              <p class="small mt-2 pt-1 mb-0 text-center">Do you have an account? <a href="/login">SigIn</a></p>
              {{-- <a style="text-align: center" href="/login">Login</a> --}}
              <br>
          </div>
        </div>
      </div>
    </div>
  </form>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>