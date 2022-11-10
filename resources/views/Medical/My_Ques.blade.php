

@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="color:rgb(255, 0, 0)"> <b>My Questions</b>
                    </h4>
                    <h6>Answers will be given within 24 hours.</h6>
                    <h6>Call our hotline number for emergency.</h6>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Customer's Name</th>
                                <th>Question</th>
                                <th>Answer</th> 
                                
                               
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($user as $item)
                            <tr>
                                <td><b>{{ $item->name }}</b></td>
                                <td>{{ $item->ques }}</td>
                                <td style="color:navy"><b>{{ $item->ans }}</b></td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
               
            </div>
        </div>
    </div>
</div>



