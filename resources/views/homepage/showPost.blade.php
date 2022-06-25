@extends('homepage.index')

@section('page_name', 'Post')
@section('content')
<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                     @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid" >
                        {{-- style=" display: block; max-width:730px; max-height:400px; width: auto; height: auto;" --}}
                     @else
                        <img src="https://source.unsplash.com/1200x600?travel" alt="" class="img-fluid" >
                        {{-- style=" display: block; max-width:730px; min-height:400px; width: auto; height: auto;" --}}
                     @endif
                </div>
                <div class="blog_details">
                   <h2>{{ $post->title }}</h2>
                   <ul class="blog-info-link mt-3 mb-4">
                      <li><a href="#"><i class="fa fa-user"></i> {{ $post->author->name }} | {{ date('d F Y', strtotime($post->created_at)); }}</a></li>
                      {{-- <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li> --}}
                   </ul>
                   <article class="my-3 text-justify">
                     {!! $post->body !!}
                   </article>
                   
                </div>
             </div>
             
             @include('homepage.comments')

             <div class="comment-form">
                <h4>Leave a Reply</h4>
                <form class="form-contact comment_form" action="{{ route('comments.store') }}" method="POST">
                   @csrf
                   <div class="row">
                      <div class="col-12">
                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
                         <div class="form-group">
                            <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                               placeholder="Write Comment"></textarea>
                         </div>
                      </div>
                   </div>
                   <div class="form-group">
                      <button type="submit" class="button button-contactForm btn_1 boxed-btn">Add Comment</button>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!--================ Blog Area end =================-->

@endsection