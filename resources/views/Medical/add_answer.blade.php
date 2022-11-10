@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
            <div class="card-header">
            <h4 style="color:green"><b> 
            <a href="{{ url('All_Questions') }}" class="btn btn-outline-dark float-end"><b>All Questions</b></a>
                 Answer
                </b></h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('answer/'.$med->id) }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for=""><b>Name</b></label>
                            <input type="text" name="name" value="{{$med->name}}" class="form-control" readonly>
                            @error('name')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for=""><b>Question</b></label>
                            <input type="text" name="ques" value="{{$med->ques}}" class="form-control" readonly>
                            @error('ques')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for=""><b>Answer</label>
                            <input type="text" name="ans" value="{{$med->ans}}" class="form-control">
                            @error('ans')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        
                        
                        
                        <button type="submit" class="btn btn-success float-end"><b>Answer</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>