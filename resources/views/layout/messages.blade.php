@if(count($errors)>0)
    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success alert-dismissible text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4>{{session('success')}}</h4>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4>{{session('error')}}</h4>
    </div>
@endif