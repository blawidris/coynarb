@if($message = Session::get('success'))
    <div x-show="{show: true}" x-init="setTimeout(()=> show = false)" x-show="show" class="position-absolute top-0 right-0 px-3 py-3 mt-4">
        <p>{{$message}}</p>
    </div>
@endif

@if($message = Session::get('error'))
    <div x-show="{show: true}" x-init="setTimeout(()=> show = false)" x-show="show" class="position-absolute top-0 right-0 px-3 py-3 mt-4">
        <p>{{$message}}</p>
    </div>
@endif



@if($message = Session::get('warning'))
    <div x-show="{show: true}" x-init="setTimeout(()=> show = false)" x-show="show" class="position-absolute top-0 right-0 px-3 py-3 mt-4">
        <p>{{$message}}</p>
    </div>
@endif


@if($message = Session::get('info'))
    <div x-show="{show: true}" x-init="setTimeout(()=> show = false)" x-show="show" class="position-absolute top-0 right-0 px-3 py-3 mt-4">
        <p>{{$message}}</p>
    </div>
@endif

@if( $errors->any())
    <div x-show="{show: true}" x-init="setTimeout(()=> show = false)" x-show="show" class="position-absolute top-0 right-0 px-3 py-3 mt-4">
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
