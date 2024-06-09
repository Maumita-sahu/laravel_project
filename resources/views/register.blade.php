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
        <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #f093fb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
            }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
            }
        .card-registration .select-arrow {
            top: 13px;
            }
        
        </style>
        <!-- Styles -->
    </head>
    <body>
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form action="{{route('register.action')}}" method="post">
              @csrf
              @if(session('error'))
              <div class="alert-danger">
                  {{session('error')}}
              </div>
              @endif
              @if(session('success'))
              <div class="alert-success">
                  {{session('success')}}
              </div>
              @endif
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="firstName">UserName</label>
                    <input type="text" id="name" class="form-control form-control-lg" name="name" value="{{old('name')}}" />
                    
                    
                  </div>
                </div>
    
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <label class="form-label" for="emailAddress">Email</label>
                    <input type="email" id="email" class="form-control form-control-lg"name="email" value="{{old('email')}}"/>
                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" name="phone" value="{{old('phone')}}"/>
                    <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="Password" value="{{old('password')}}">
                  <span class="text-danger">@error('password'){{$message}}@enderror</span>
                </div>
                </div>
              
                <div class="col-md-6 mb-4 pb-2">

                  <h6 class="mb-2 ">Gender</h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="female" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="male" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender"
                      value="other" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>
                  <span class="text-danger">@error('gender'){{$message}}@enderror</span>
                </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>
              

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </body>
</html>
