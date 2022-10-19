<div class="container">
    <h3>View all image</h3><hr>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Image id</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody>
        @foreach($imageData as $data)
        <tr>
          <td>{{$data->id}}</td>
          <td>
	     <img src="{{ url('public/Image/'.$data->image) }}"
            style="height: 100px; width: 150px;">
	    </td>
        
        <td>
        <a href="{{ url('delete-pics/'.$data->id) }}" class="btn btn-danger btn-sm">Delete</a>
        </td> 
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>