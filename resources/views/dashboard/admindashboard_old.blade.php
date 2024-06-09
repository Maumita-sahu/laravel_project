<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASBOARD</title>
    <link rel="stylesheet" href="{{url('public/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('public/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <style>
        body{font-family: 'Barlow', sans-serif;}
        a:hover{text-decoration: none;}
        .border-left{border-left: 2px solid var(--primary) !important;}
        .sidebar{top: 0;left : 0;z-index : 100;overflow-y: auto;}
        .overlay{background-color: rgb(0 0 0 / 45%);z-index: 99;}

        /* sidebar for small screens */
        @media screen and (max-width: 767px){
        .sidebar{max-width: 18rem;transform : translateX(-100%);transition : transform 0.4s ease-out;}
        .sidebar.active{transform : translateX(0);}
        }
</style>
</head>

<body>

<div id="sidebar-overlay" class="overlay w-100 vh-100 position-fixed d-none"></div>

<!-- sidebar -->
<div class="col-md-3 col-lg-2 px-0 position-fixed h-100 bg-white shadow-sm sidebar" id="sidebar">
  <h1 class="fa fa-bootstrap text-primary d-flex my-4 justify-content-center"></h1>
  <div class="list-group rounded-0">
    <a href="#" class="list-group-item list-group-item-action active border-0 d-flex align-items-center">
      <span class="fa fa-th-large"></span>
      <span class="ml-2">Dashboard</span>
    </a>
    <a href="#" class="list-group-item list-group-item-action border-0 align-items-center">
      <span class="fa fa-file-image-o"></span>
      <span class="ml-2">PhotoGallery</span>
    </a>

    <a href="{{Route('manage')}}" class="list-group-item list-group-item-action border-0 align-items-center">
      <span class="fa fa-file-image-o"></span>
      <span class="ml-2">Manage</span>
    </a>

    <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#sale-collapse">
      <div>
        <span class="fa fa-camera"></span>
        <span class="ml-2">Image</span>
      </div>
      <span class="fa fa-chevron-down small"></span>
    </button>
    <div class="collapse" id="sale-collapse" data-parent="#sidebar">
      <div class="list-group">
        <a href="{{Route('Addimage')}}" class="list-group-item list-group-item-action border-0 pl-5">Add_Image</a>
        <a href="" class="list-group-item list-group-item-action border-0 pl-5">Edit_Image</a>
        <a href="#" class="list-group-item list-group-item-action border-0 pl-5">ListOf_Image</a>
      </div>
    </div>

    <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#purchase-collapse">
      <div>
        <span class="fa fa-cart-plus"></span>
        <span class="ml-2">Purchase</span>
      </div>
      <span class="fa fa-chevron-down small"></span>
    </button>
    <div class="collapse" id="purchase-collapse" data-parent="#sidebar">
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Sellers</a>
        <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Purchases</a>
      </div>
    </div>
  </div>
</div>
<!-- close sidebar -->

<div class="col-md-9 col-lg-10 ml-md-auto px-0 ms-md-auto">
  <!-- top nav -->
  <nav class="w-100 d-flex px-4 py-2 mb-4 shadow-sm">
    
    <button class="btn py-0 d-lg-none" id="open-sidebar">
      <span class="bi bi-list text-primary h3"></span>
    </button>
    <div class="dropdown ml-auto">
      <button class="btn py-0 d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
        <span class="fa fa-user text-primary h4"></span>
        <span class="fa fa-chevron-down ml-1 mb-2 small"></span>
      </button>
      <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
        <a class="dropdown-item" href="#">Logout</a>
        <a class="dropdown-item" href="#">Settings</a>
      </div>
    </div>
  </nav>

  <!-- main content -->
  <main class="p-4 min-vh-100">
    <section class="row">
      <div class="col-md-6 col-lg-4">
        <!-- card -->
        <article class="p-4 rounded shadow-sm border-left
       mb-4">
          <a href="#" class="d-flex align-items-center">
            <span class="bi bi-box h5"></span>
            <h5 class="ml-2">Products</h5>
          </a>
        </article>
      </div>
      <div class="col-md-6 col-lg-4">
        <article class="p-4 rounded shadow-sm border-left mb-4">
          <a href="#" class="d-flex align-items-center">
            <span class="bi bi-person h5"></span>
            <h5 class="ml-2">Customers</h5>
          </a>
        </article>
      </div>
      <div class="col-md-6 col-lg-4">
        <article class="p-4 rounded shadow-sm border-left mb-4">
          <a href="#" class="d-flex align-items-center">
            <span class="bi bi-person-check h5"></span>
            <h5 class="ml-2">Sellers</h5>
          </a>
        </article>
      </div>
    </section>

    
  </main>
</div>

<script src="{{url('public/js/jquery-3.6.4.min.js')}}"></script>
<script src="{{url('public/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('public/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script>
    $(document).ready(()=>{
  
  $('#open-sidebar').click(()=>{
     
      // add class active on #sidebar
      $('#sidebar').addClass('active');
      
      // show sidebar overlay
      $('#sidebar-overlay').removeClass('d-none');
    
   });
  
  
   $('#sidebar-overlay').click(function(){
     
      // add class active on #sidebar
      $('#sidebar').removeClass('active');
      
      // show sidebar overlay
      $(this).addClass('d-none');
    
   });
  
});
</script>
</body>
</html>