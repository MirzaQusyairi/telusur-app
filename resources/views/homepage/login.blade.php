@extends('homepage.index')

@section('page_name', 'Masuk')
@section('content')
<!--================Blog Area =================-->
<section class="blog_area single-post-area mt-5 pt-5 pb-5 mb-5">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-lg-8 posts-list">
                <h2 class="text-center mb-5">Masuk</h2>
                <form class="form-contact" action="#" id="">
                   <div class="row justify-content-center">
                      <div class="col-xl-7">
                         <div class="form-group">
                            <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                         </div>
                         <div class="form-group">
                            <input class="form-control" name="password" id="password" type="password" placeholder="Password">
                         </div>
                         <div class="form-group">
                            <p>Belum Punya Akun? <a href="/register">Daftar disini</a></p>
                         </div>
                         <div class="form-group">
                            <button type="submit" class="button button-contactForm btn_1 boxed-btn">Login</button>
                         </div>
                      </div>
                   </div>
                   
                </form>
          </div>
       </div>
    </div>
 </section>
 <!--================ Blog Area end =================-->

@endsection