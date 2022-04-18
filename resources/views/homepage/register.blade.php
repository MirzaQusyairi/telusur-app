@extends('homepage.index')

@section('page_name', 'Daftar')
@section('content')
<!--================Blog Area =================-->
<section class="blog_area single-post-area mt-5 pt-5 pb-5 mb-5">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-lg-8 posts-list">
                <h2 class="text-center mb-5">Daftar</h2>
                <form class="form-contact" action="/register" method="POST">
                  @csrf
                   <div class="row justify-content-center">
                      <div class="col-xl-7">
                         <div class="form-group">
                           <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" placeholder="Nama" value="{{ old('name') }}">
                           @error('name')
                              <div class="invalid-feedback">
                                 {{ $message }}
                              </div>
                           @enderror
                         </div>
                         <div class="form-group">
                            <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email" placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                              <div class="invalid-feedback">
                                 {{ $message }}
                              </div>
                           @enderror
                         </div>
                         <div class="form-group">
                            <input class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" type="text" placeholder="Telepon" value="{{ old('phone') }}">
                            @error('phone')
                              <div class="invalid-feedback">
                                 {{ $message }}
                              </div>
                           @enderror
                         </div>
                         <div class="form-group">
                           <input class="form-control @error('username') is-invalid @enderror" name="username" id="username" type="text" placeholder="Username" value="{{ old('username') }}">
                           @error('username')
                              <div class="invalid-feedback">
                                 {{ $message }}
                              </div>
                           @enderror
                         </div>
                         <div class="form-group">
                            <input class="form-control @error('password') is-invalid @enderror" name="password" id="password" type="password" placeholder="Password" value="{{ old('password') }}">
                            @error('password')
                              <div class="invalid-feedback">
                                 {{ $message }}
                              </div>
                           @enderror
                         </div>
                         <div class="form-group">
                           <p>Sudah Punya Akun? <a href="/login" style="color: blue !important">Masuk disini</a></p>
                         </div>
                         <div class="form-group">
                            <button type="submit" class="button button-contactForm btn_1 boxed-btn">Register</button>
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