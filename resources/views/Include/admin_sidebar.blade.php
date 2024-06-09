<div id="sidebar-overlay" class="overlay w-100 vh-100 position-fixed d-none"></div>

<!-- sidebar -->
<div class="col-md-3 col-lg-2 px-0 position-fixed h-100 bg-white shadow-sm sidebar" id="sidebar">
  <!-- <h1 class="fa fa-bootstrap text-primary d-flex my-4 justify-content-center">maumita</h1> -->
  <div class="meanu_logo ml-5">
		  <img src="{{url('public/photoes/admin.jpg')}}" class="imag d-block">
	  </div>
  <div class="list-group rounded-0">
    <a href="{{route('admindashboard')}}" class="list-group-item list-group-item-action active border-0 d-flex align-items-center">
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
        <a href="{{Route('add_catagory')}}" class="list-group-item list-group-item-action border-0 pl-5">Add_Catagory</a>
        <a href="{{Route('all_catagory')}}" class="list-group-item list-group-item-action border-0 pl-5">All_Catagory</a>
        <!-- <a href="" class="list-group-item list-group-item-action border-0 pl-5">Edit_Image</a> -->
        <a href="#" class="list-group-item list-group-item-action border-0 pl-5">ListOf_Image</a>
      </div>
    </div>

    <!-- <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#purchase-collapse">
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
    </div> -->
  </div>
</div>
<!-- close sidebar -->


<div class="col-md-9 col-lg-10 ml-md-auto px-0 ms-md-auto">
  <!-- top nav -->
  <nav class="w-100 d-flex px-4 py-2 mb-4 shadow-sm">
    
    <button class="btn py-0 d-lg-none" id="open-sidebar">
      <span class="bi bi-list text-danger h3"></span>
    </button>
    
    <div class="dropdown ml-auto">
      <button class="btn py-0 d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
        <span class="fa fa-user text-primary h4"></span>
        <span class="fa fa-chevron-down ml-1 mb-2 small"></span>
      </button>

      <h6 class="text-success text-center">{{Auth::guard('admin')->user()->name}}</h6>
      <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
        <a class="dropdown-item" href="{{Route('admin.profie.view')}}">Profile</a>
        <a class="dropdown-item" href="#">Password Change</a>
        <a class="dropdown-item" href="#">Logout</a>
      </div>
    </div>
  </nav>
</div>