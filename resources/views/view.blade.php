<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Father Name</th>
      <th scope="col">image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
<tbody>
  @foreach($datas as $data)
  <tr>

       <td> {{$data->id}}</td>
       <td> {{$data->name}}</td>
       <td> {{$data->fname}}</td>
       <td> {{$data->image}}</td>

       <td>
           <a class="btn btn-primary"  href="{{route('edit',$data->id)}}">Edit</a>
           <a class="btn btn-danger" href="{{route('delete',$data->id)}}">Delete</a>
       </td>
  </tr>
  @endforeach
</tbody>
</table>

