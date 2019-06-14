@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session()->get('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-error alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dimiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{session('error')}}
    </div>
@endif