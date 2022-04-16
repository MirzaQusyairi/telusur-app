@extends('admin.admin')

@section('page_name', 'Manage Posts')
@section('content')
  <div class="row mt-3">
    <div class="col-lg-8 ml-3">
      <h1 class="font-weight-bold mb-3">{{ $post->title }}</h1>

      <a href="/admin/posts" class="btn btn-success"><i class="fa fa-arrow-left"></i> Back to all post</a>
      <a href="/admin/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
      <form action="/admin/posts/{{ $post->slug }}" method="POST" class="d-inline">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger" onclick="return confirm('Are you sure ?');">Delete</button>
      </form>

      <img src="https://source.unsplash.com/1200x400?pariwisata" alt="" class="img-fluid mt-3">

      <article class="my-3 fs-5 text-justify">
        {!! $post->body !!}
      </article>

    </div>
  </div>
    

@endsection
