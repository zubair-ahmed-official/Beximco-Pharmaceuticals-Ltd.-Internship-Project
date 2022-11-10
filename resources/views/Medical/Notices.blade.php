
@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">
        @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 style="color:rgb(45, 45, 134)"><b>Notices</b>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                
                                <th>Headline</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notices as $item)
                            <tr>
                                
                                <td><b><h4>{{ $item->headline }}</b></h4>
                                Date: {{ $item->created_at }}</td>
                                
                                
                                @if(Session::has('aname'))
                                <td>
                                    <a href="{{ url('update_notice/'.$item->id) }}" class="btn btn-outline-success btn-sm"><b>Edit</b></a>
                                </td> 
                                
                                <td>
                                    <a href="{{ url('delete-notice/'.$item->id) }}" class="btn btn-outline-danger btn-sm"><b>Delete</b></a>
                                </td>  
                                                            
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
