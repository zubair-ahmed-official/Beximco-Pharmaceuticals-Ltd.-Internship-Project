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
            <a href="{{ url('My_Questions') }}" class="btn btn-secondary float-end"><b>My Questions</b></a>
                Add Questions
                </b></h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('add-ques') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for=""><b>Name</b></label>

                            @foreach ($uname as $item)
                            <input type="text" name="name" 
                            value="{{ $item->name }}" 
                            class="form-control" readonly>
                            @endforeach

                            @error('name')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" name="email" 
                            value="{{ $item->email }}" 
                            class="form-control" readonly hidden>
                            @error('email')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                       

                        <div class="form-group mb-3">
                            <label for=""><b>Question</b></label>
                            <input type="text" name="ques" value="{{old('ques')}}" class="form-control">
                            @error('ques')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        
                        
                        
                        <button type="submit" class="btn btn-success"><b>Add</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>