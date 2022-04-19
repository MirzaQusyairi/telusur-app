@extends('admin.admin')

@section('page_name', 'Manage Users')
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
            <a href="{{ route('Create User') }}" type="button" class="btn btn-primary">Create New User</a>
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
                    <th>name</th>
                    <th>username</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>role</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($data as $index => $dt)    
                  <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $dt->name }}</td>
                    <td>{{ $dt->username }}</td>
                    <td>{{ $dt->email }}</td>
                    <td>{{ $dt->phone }}</td>
                    <td>{{ $dt->role }}</td>
                    <td>
                        <a href="/admin/users/{{ $dt->id }}/edit" class="btn btn-warning"><i class="fa fa-pen"></i></a>
                        <form action="/admin/users/{{ $dt->id }}" method="POST" class="d-inline">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-danger" onclick="return confirm('Are you sure ?');"><i class="fa fa-trash"></i></button>
                        </form>
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
