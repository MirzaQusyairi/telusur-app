@extends('admin.admin')

@section('page_name', 'Create Post')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('Store Data Post') }}" method="POST">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="">Judul</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="title" name="title" placeholder="Enter title" value="{{ old('name') }}">
                      @error('name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="">Isi</label>
                      <textarea id="body" name="body">
                        {{ old('body') }}
                      </textarea>
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
        </div>
    </div>
@endsection