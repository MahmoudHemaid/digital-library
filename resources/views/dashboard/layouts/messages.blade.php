@if(Session::has('success'))
    <div class="alert alert-solid-success alert-bold" role="alert">
        <div class="alert-text">{{Session::get('success')}}</div>
        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="la la-close"></i></span>
            </button>
        </div>
    </div>
@endif

@if(Session::has('error'))
    <div class="alert alert-solid-danger alert-bold" role="alert">
        <div class="alert-text">{{Session::get('error')}}</div>
        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="la la-close"></i></span>
            </button>
        </div>
    </div>
@endif

@if($errors->any())
    <div class="alert alert-solid-danger alert-bold" role="alert">
        <div class="alert-text">
            @foreach($errors->all() as $error)
                {{$error}} </br>
            @endforeach
        </div>
        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="la la-close"></i></span>
            </button>
        </div>
    </div>
@endif
