@extends('admin.admin')

@section('page_name', 'Manage Posts')
@section('content')
    <div class="row mb-3">
        {{-- @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif --}}
        <div class="col-12">
            <a href="{{ route('Create Post') }}" type="button" class="btn btn-primary">Create Post</a>
        </div>
    </div>
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>no.</th>
                    <th>thumbnail</th>
                    <th>title</th>
                    <th>slug</th>
                    <th>body</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($data as $index => $dt)    
                  <tr>
                    <td>{{ $index+1 }}</td>
                    <td><img src="{{ $dt->thumbnail }}" height="150" width="150"></td>
                    <td>{{ $dt->title }}</td>
                    <td>{{ $dt->slug }}</td>
                    <td>{{ $dt->body }}</td>
                    <td>
                        <button type="button" class="btn btn-warning"><i class="fa fa-pen"></i></button>
                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
    

@endsection