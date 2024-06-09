<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('public/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/bootstrap.bundle.min.css')}}">
    <title>photo gallery</title>
    <style>
         body {background: #f4f4f4;}
        
        .meanu_logo{margin-top: 0;}
        .imag{width:180px;height:100px;border-radius:50%}
		.show_img img{width:200px;height:200px;margin-left:18%;}
    .show_img i{font-size:20px;margin-left:20%;}
    </style>
</head>
<body>
<div class="container-fluid">

<nav class="navbar navbar-expand-lg navbar-light bg-info text-white">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

  <div class="px-lg-5 mt-5">
    <div class="row">
      <!-- Gallery item -->
	  @foreach($inner_data AS $key=>$data)
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm show_img"><a href="{{route('animal_inner.action',$data->id)}}">
			<img src="{{url('public/image/'.$data->image)}}" alt="" class="img-fluid card-img-top"></a>
          <div class="p-4">
            <h5> <a href="#" class="text-dark">{{$data->sub_title}}</a></h5>
            <p> <a href="#" class="text-dark">{{$data->description}}</a></p>
            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
            <!-- <form action= method="post">
                    @csrf
                    <button value="" class='like' type="submit"><i class="fas fa-fire"></i></button>
            </form> -->
            <i class="fa fa-download" aria-hidden="true"></i>
            <i class="fa fa-share" aria-hidden="true"></i>
             
          </div>
        </div>
		
      </div>
	  @endforeach
      <!-- End -->  
      
    </div>
    <div class="py-5 text-right"><a href="#" class="btn btn-dark px-5 py-3 text-uppercase">Show me more</a></div>
  </div>
</div>
<script src="{{url('public/js/jquery-3.6.4.min.js')}}"></script>
<script src="{{url('public/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('public/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script>
   $('.like').on('click', function(event) {
                console.log("clicked the button");

                $.ajax({
                    method: 'POST',
                    url:/{id}/addlike
                  })
                });
</script>
</body>
</html>