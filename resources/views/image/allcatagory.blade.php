<!DOCTYPE html>
<html lang="en">
@include('Include.admin_header')
<body>
@include('Include.admin_sidebar')
  <table id="dtBasicExample" class="table table-striped table-bordered table-sm allcatagory" cellspacing="0">
    <thead>
      <tr>
        <th class="th-sm">SL
        </th>
        <th class="th-sm">catagory_name	
        </th>
        <th class="th-sm">Image
        </th>
        <th class="th-sm">Action
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach($catagory AS $key=>$data)
      <tr>
        <td>{{ ($key+1) }}</td>
        <td>{{$data->catagory_name}}</td>
        <!-- <td>{{$data->sub_title}}</td>
        <td>{{$data->description}}</td> -->
        <td><img src="{{url('public/image/'.$data->image)}}" alt="{{$data->title}}"  style="height: 70px;"/></td>
        <td>
           <a href="" name="edit" class="btn btn-sm rounded bg-warning text-white"><i class="fa fa-pencil"></i></a> &nbsp;
           <a href="{{route('catagory.delete', ['id' => $data->id])}}" name="delete" class="btn btn-sm rounded bg-danger text-white"
            onclick="return confirm('Are you sure to Delete this Catagory?');"><i class="fa fa-trash"></i></a>
        </td>

      </tr>
      @endforeach

    </tbody>
  </table>
  @include('Include.admin_footer')
  <script>
    $(document).ready(function() {
      $('#dtBasicExample').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
  </script>
</body>
</html>