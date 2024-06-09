<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        
        

        <!-- Styles -->
    </head>
    <body>
<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          <form action="" method="post">
        @csrf
        @if(session('error'))
        <div class="alert-danger">
            {{session('error')}}
        </div>
        @endif

            <h3 class="mb-5">Sign in</h3>

            <div class="form-outline mb-4">
              <label class="form-label" for="typePasswordX-2">Name</label>
              <input type="text" id="typePasswordX-2" class="form-control form-control-lg"
               name="name" value="{{Auth::guard('admin')->user()->name}}">
            </div>
            <div class="form-outline mb-4">
              <label>Email</label>
              <input type="email" id="typeEmailX-2" class="form-control form-control-lg" 
               name="email" value="{{Auth::guard('admin')->user()->email}}">
            </div>
            <div>
            <a href="{{Route('admin_profile.update')}}">Update</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </body>
</html>
