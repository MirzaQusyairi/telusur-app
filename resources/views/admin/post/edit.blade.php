@extends('admin.admin')

@section('page_name', 'Edit Post')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title"></h3>
          </div>

          <form action="/admin/posts/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
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
                <label for="customFile">Gambar Postingan</label>
                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                @if($post->image)
                  <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                  <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif
                <div class="custom-file">
                  <input type="file" class="custom-file-input  @error('image') is-invalid @enderror" id="customFile" id="image" name="image" onchange="previewImage(this)">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                  @error('image')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
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

    function previewImage(img){
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display='block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(img.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result; 
      }
    };
  </script>
@endsection