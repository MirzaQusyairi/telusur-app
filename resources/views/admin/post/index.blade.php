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
            <a href="/admin/posts/create" type="button" class="btn btn-primary">Create New Post</a>
        </div>
    </div>
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th class="all">no.</th>
                    <th class="all">thumbnail</th>
                    <th class="all">title</th>
                    <th class="all">slug</th>
                    <th class="all">action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($data as $index => $dt)    
                  <tr>
                    <td>{{ $index+1 }}</td>
                    <td>
                      @if ($dt->image)
                        <img src="{{ asset('storage/' . $dt->image) }}" alt="" class="img-fluid" style=" display: block; max-width:150px; max-height:150px; width: auto; height: auto;">
                      @else
                        <img src="https://source.unsplash.com/150x150?travel" alt="" class="img-fluid" style=" display: block; max-width:150px; min-height:150px; width: auto; height: auto;">
                      @endif
                    </td>
                    <td>{{ $dt->title }}</td>
                    <td>{{ $dt->slug }}</td>
                    <td>
                      <a href="/admin/posts/{{ $dt->slug }}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                      <a href="/admin/posts/{{ $dt->slug }}/edit" class="btn btn-warning"><i class="fa fa-pen"></i></a>
                      <form action="/admin/posts/{{ $dt->slug }}" method="POST" class="d-inline">
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

        <script>
          // function confirm(){
          //   Swal.fire({
          //     title: 'Are you sure?',
          //     text: "You won't be able to revert this!",
          //     icon: 'warning',
          //     showCancelButton: true,
          //     confirmButtonColor: '#3085d6',
          //     cancelButtonColor: '#d33',
          //     confirmButtonText: 'Yes, delete it!'
          //   }).then((result) => {
          //     if (result.isConfirmed) {
          //       Swal.fire(
          //         'Deleted!',
          //         'Your post has been deleted.',
          //         'success'
          //       )
          //     }
          //   })
          }
        </script>

@endsection
