<!DOCTYPE html>
<html lang="en">
@include('Include.admin_header')
<body>
@include('Include.admin_sidebar')
  <table id="dtBasicExample" class="table table-striped table-bordered table-sm manage" cellspacing="0">
    <thead>
      <tr>
        <th class="th-sm">SL
        </th>
        <th class="th-sm">Title
        </th>
        <th class="th-sm">Sub Title
        </th>
        <th class="th-sm">Description
        </th>
        <th class="th-sm">Image
        </th>
        <th class="th-sm">Action
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach($image_data AS $key=>$data)
      <tr >
        <td style="width:5px;">{{ ($key+1) }}</td>
        <td style="width:5px;">{{$data->title}}</td>
        <td style="width:10px;">{{$data->sub_title}}</td>
        <td style="width:30px;">{{$data->description}}</td>
        <td style="width:10px;"><img src="{{url('public/image/'.$data->image)}}" alt="{{$data->title}}"  style="height: 70px;"/></td>
        <td style="width:5px;">
           <a href="{{route('iamge.edit.view', $data->id)}}" name="edit" class="btn btn-sm rounded bg-warning text-white"><i class="fa fa-pencil"></i></a> &nbsp;
           <a href="{{route('user.delete', ['id' => $data->id])}}" name="delete" class="btn btn-sm rounded bg-danger text-white"
            onclick="return confirm('Are you sure to Delete this Catagory?');"><i class="fa fa-trash"></i></a>
        </td>

      </tr>
      @endforeach

    </tbody>
  </table>
  <script>
    $(document).ready(function() {
      $('#dtBasicExample').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
  </script>
    @include('Include.admin_footer')
</body>
</html>