@extends('index')

@section('content')
  <div class="content-wrapper">
    <form action="{{route('categoryStore')}}" method="POST" id="category">
      @csrf
      <div class="row">
        <div class="offset-md-3 col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              @if(Session::has('successCategory'))
              <div class="alert alert-info" role="alert">
                {{ Session::get('successCategory') }}
              </div>
              @endif
              @if(Session::has('errorCategory'))
              <div class="alert alert-danger" role="alert">
                {{ Session::get('errorCategory') }}
              </div>
              @endif
              <h4 class="card-title">Category</h4>
              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputUsername1">Name <span style="color: red">*</span> </label>
                  <input type="text" class="form-control" id="name" name="name" data-role="tagsinput" placeholder="Name">
                </div>
                {{-- @error('name')
                  <span class="text-white" style="color: crimson">{{ $message }}</span>
                @enderror --}}
                @error('name')
                  <span style="color: crimson">{{ $message }}</span>
                @enderror
                <div class="form-check form-check-success">
                  <p class="mb-2">Status</p>
                  <label class="toggle-switch toggle-switch-success">
                    <input type="checkbox" id="status" name="status" checked>
                    <span class="toggle-slider round"></span>
                  </label>  
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection