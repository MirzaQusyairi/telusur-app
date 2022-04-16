@extends('admin.admin')

@section('page_name', 'Create New User')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('Store Data User') }}" method="POST">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter name" value="{{ old('name') }}">
                      @error('name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="">Username</label>
                      <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Enter name" value="{{ old('username') }}">
                      @error('username')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
                      @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" value="{{ old('password') }}">
                      @error('password')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="">Phone</label>
                      <input type="text" class="form-control  @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Enter phone" value="{{ old('phone') }}">
                      @error('phone')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Role</label>
                      <select class="form-control" id="role" name="role">
                        <option value="administrator">Administrator</option>
                        <option value="writer">Author</option>
                        <option value="staff">Staff</option>
                      </select>
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