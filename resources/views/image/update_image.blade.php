<!DOCTYPE html>
<html lang="en">
@include('Include.admin_header')
<style>
      body {font-family: 'Open Sans', sans-serif;}
      h1, h2, h3, h4, h5, h6 {font-weight: 300;}
      p {color: #999;}
      strong {color: #333;}
      #wrapper {width: 100%;max-width: 600px;margin: 0 auto;text-align: center;padding: 30px 0;}
      #form-trabalhe {margin-top: 30px;text-align: left;}
      label {font-weight: normal;margin-top: 15px;}
      input {border: 2px solid #CCC !important;height: 46px !important;border-radius: 3px;max-width: 100%;}
      .input-group-addon {border: 2px solid #CCC !important;border-right: 0px !important;}
      .btn {border: 0;border-radius: 3px; margin-top: 20px;}
      .form-group {margin-bottom: 0;text-align: left;}
      .page-head-image img{height: 200px;width: 200px;border-radius: 50%;object-fit: cover;margin-bottom: 5px;}
</style>
<body>
@include('Include.admin_sidebar')
<div id="wrapper" class="container">
  <figure class="page-head-image">
    <!-- <img src="public/image/addimage_default.jpg"> -->
    <img src="{{url('public/image/'.$item->image)}}" alt="" class="">
  </figure>
  
  <h1>UPDATE IMAGE</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro et necessitatibus exercitationem enim temporibus nobis facere? Quaerat aliquam.</p>
  <!-- <p><strong>Send your personal info to:</strong> <a href="mailto:workwithus@gmail.com">workwithus@gmail.com</a></p> -->

    <!-- <form id="form-work" class="" name="form-work" action="#"> -->
    <form action="{{Route('update_image.action')}}" method="post" enctype="multipart/form-data">
            @csrf
        @if(session('error'))
        <div class="alert-danger">
            {{session('error')}}
        </div>
        @endif
      
      <fieldset>
        <input type="hidden" name="id" value="{{$item->id}}">
      <div class="d-flex">
        <div class="form-group">
          <div class="col-md-12">
            <label class="control-label" for="nome">Title</label>
            <input name="title" class="form-control" type="text" value="{{$item->title}}">
            </div>
          </div>

        <div class="form-group">
            <div class="col-md-12">
              <label class="control-label" for="surname">Sub Title</label>
              <input name="sub_title" class="form-control" type="text"value="{{$item->sub_title}}">
            </div>
          </div>
      </div>

      <div class="d-flex">
          <div class="form-group">
            <div class="col-md-12">
              <label class="control-label" for="email">Description </label>
              <input name="description" class="form-control"  type="text"value="{{$item->description}}">
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-9">
            <label for="image">Image</label>
        <input type="hidden" name="old_image" value="{{$item->image}}">

            <input type="file" class="form-control" id="std_image" name="image" accept="image/jpg,image/jpeg,image/png"value="">
				    </div>
            
          </div>
      </div>
      <div class="form-group">
      <div class="col-md-10">
      <label for="image">Catagory</label>
      <select name="catagory" id="product_catagory" class="form-control">
      <option value="">Select a catagory</option>
      @foreach($catagory AS $data)
      <option value="{{$data->id}}">{{$data->catagory_name}}</option>

      @endforeach

      </select>
      </div>
	</div>
          <div class="form-groupn d-flex">
            <div class="col-md-3">
              <button type="submit" class="btn btn-primary btn-lg btn-block info">Submit</button>
            </div>
            <div class="col-md-2 mt-4">
             <a href="{{Route('manage')}}" class="delete-btn text-dark">go back</a>
            </div>
          </div>     
      </fieldset> 
    </form>
</div>
  
</body>
</html>