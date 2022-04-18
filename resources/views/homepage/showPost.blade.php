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
                      <li><a href="#"><i class="fa fa-user"></i> {{ $post->author->username }}</a></li>
                      {{-- <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li> --}}
                   </ul>
                   <article class="my-3 text-justify">
                     {!! $post->body !!}
                   </article>
                   
                </div>
             </div>
             
             <div class="comments-area">
                <h4>01 Comments</h4>
                <div class="comment-list">
                   <div class="single-comment justify-content-between d-flex">
                      <div class="user justify-content-between d-flex">
                         <div class="thumb">
                            <img src="{{ asset('assets/img/Sample_User_Icon_2.png') }}" alt="">
                         </div>
                         <div class="desc">
                            <p class="comment">
                               Menarik sekali, terimakasih atas postingannya saya jadi 
                               dapet informasi sebelum mengunjungi tempatnya
                            </p>
                            <div class="d-flex justify-content-between">
                               <div class="d-flex align-items-center">
                                  <h5>
                                     <a href="#">Adi Wahyudi</a>
                                  </h5>
                                  {{-- <p class="date">December 4, 2017 at 3:12 pm </p> --}}
                               </div>
                               {{-- <div class="reply-btn">
                                  <a href="#" class="btn-reply text-uppercase">reply</a>
                               </div> --}}
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="comment-form">
                <h4>Leave a Reply</h4>
                <form class="form-contact comment_form" action="#" id="commentForm">
                   <div class="row">
                      <div class="col-12">
                         <div class="form-group">
                            <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                               placeholder="Write Comment"></textarea>
                         </div>
                      </div>
                      <div class="col-sm-6">
                         <div class="form-group">
                            <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                         </div>
                      </div>
                      <div class="col-sm-6">
                         <div class="form-group">
                            <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                         </div>
                      </div>
                      <div class="col-12">
                         <div class="form-group">
                            <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                         </div>
                      </div>
                   </div>
                   <div class="form-group">
                      <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!--================ Blog Area end =================-->

@endsection