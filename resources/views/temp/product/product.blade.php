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
              <h4 class="card-title">Product</h4>
              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputUsername1">Name <span style="color: red">*</span> </label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                {{-- @error('name')
                  <span class="text-white" style="color: crimson">{{ $message }}</span>
                @enderror --}}
                @error('name')
                  <span style="color: crimson">{{ $message }}</span>
                @enderror
                <div class="form-group">
                  <label class="col-form-label">Category</label>
                  <div class="">
                    <select class="form-control">
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                </div>
                <div class="form-check form-check-success">
                  <p class="mb-2">Status</p>
                  <label class="toggle-switch toggle-switch-success">
                    <input type="checkbox" id="status" name="status" checked>
                    <span class="toggle-slider round"></span>
                  </label>  
                </div>
                <div class="form-group">
                    <label class="col-form-label">Unit</label>
                    <div class="">
                      <select class="form-control">
                        @foreach ($units as $key => $unit)
                            <option value="{{ $key }}">{{ $unit }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                <div class="form-group">
                    <label class="col-form-label">Price</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-white">$</span>
                    </div>
                    <input type="text" class="form-control" name="price" id="price" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                      <span class="input-group-text">.00</span>
                    </div>
                  </div>
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