@foreach(session()->get('errors') as $error)
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{ $error }}!</strong>
    </div>
@endforeach
