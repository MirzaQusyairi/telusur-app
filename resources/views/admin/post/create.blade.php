@extends('admin.admin')

@section('page_name', 'Create New Post')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title"></h3>
          </div>

          <form action="/admin/posts" method="POST">
            @csrf
            <div class="card-body">
              
              <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="slug" value="{{ old('name') }}">
                @error('slug')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="form-group">
                <label for="">Judul</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter title" value="{{ old('title') }}" autofocus>
                @error('title')
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

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
    </div>
  </div>

  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
      fetch('/admin/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
  </script>
@endsection