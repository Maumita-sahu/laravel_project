<script type="text/javascript" src="{{url('public/js/jquery-3.6.4.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/bootstrap/js/bootstrap.min.js')}}"></script>

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
