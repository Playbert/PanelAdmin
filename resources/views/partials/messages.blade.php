@if (Session::has('store'))
  <div class="alert alert-success">
    <strong>{{ session('store') }}</strong>
  </div>
@endif

@if (Session::has('update'))
  <div class="alert alert-success">
    <strong>{{ session('update') }}</strong>
  </div>
@endif


@if (Session::has('delete'))
  <div class="alert alert-danger">
    <strong>{{ session('delete') }}</strong>
  </div>
@endif
