@extends('admin.admin')

@section('page_name', 'Edit Post')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title"></h3>
          </div>

          <form action="/admin/posts/{{ $post->slug }}" method="POST">
            @method('PUT')
            @csrf
            <div class="card-body">
              
              <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="slug" value="{{ old('name', $post->slug) }}">
                @error('slug')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="form-group">
                <label for="">Judul</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter title" value="{{ old('title', $post->title) }}" autofocus>
                @error('title')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="form-group">
                <label for="">Isi</label>
                @error('body')
                  <div class="text-danger">
                    {{ $message }}
                  </div>
                @enderror
                <textarea id="body" name="body">
                  {{ old('body', $post->body) }}
                </textarea>
              </div>

            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Update</button>
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