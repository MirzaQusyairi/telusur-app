@extends('admin.admin')

@section('page_name', 'Manage Posts')
@section('content')
  <div class="row mt-3">
    <div class="col-lg-8 ml-3">
      <h1 class="font-weight-bold mb-3">{{ $post->title }}</h1>

      <a href="/admin/posts" class="btn btn-success"><i class="fa fa-arrow-left"></i> Back to all post</a>
      <a href="" class="btn btn-warning">Edit</a>
      <a href="" class="btn btn-danger">Delete</a>

      <img src="https://source.unsplash.com/1200x400?pariwisata" alt="" class="img-fluid mt-3">

      <article class="my-3 fs-5">
        {!! $post->body !!}
      </article>

    </div>
  </div>
    

@endsection
