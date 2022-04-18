@extends('homepage.index')

@section('page_name', 'Home')
@section('content')
<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="slider-active dot-style">
        <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="{{ asset('assets/img/Mandalika-banner.jpg') }}" >
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-9">
                        <div class="h1-slider-caption">
                            <h1 data-animation="fadeInUp" data-delay=".4s">Sirkuit Internasional Mandalika</h1>
                            <h3 data-animation="fadeInDown" data-delay=".4s">Explore Lombok</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="{{ asset('assets/img/balireopening-id-ver2.jpg') }}" >
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-9">
                        <div class="h1-slider-caption">
                            {{-- <h1 data-animation="fadeInUp" data-delay=".4s">Title</h1>
                            <h3 data-animation="fadeInDown" data-delay=".4s">Desc</h3> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="{{ asset('assets/img/trial1.jpg') }}" >
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-9">
                        <div class="h1-slider-caption">
                            {{-- <h1 data-animation="fadeInUp" data-delay=".4s">Title</h1>
                            <h3 data-animation="fadeInDown" data-delay=".4s">Desc</h3> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!-- Destination Start -->
<section class="room-area mt-5 pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <!--font-back-tittle  -->
                <div class="font-back-tittle mb-45">
                    <div class="archivment-front">
                        <h3>Destinasi</h3>
                    </div>
                    <h3 class="archivment-back">Destinasi</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-6">
                <!-- Single Room -->
                <div class="single-room mb-50">
                    <div class="room-img">
                       <a href="#"><img src="{{ asset('assets/img/Lake-Toba-Thumbnail-v1.jpg') }}" alt=""></a>
                    </div>
                    <div class="room-caption">
                        <h3><a href="#">Danau Toba</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- Single Room -->
                <div class="single-room mb-50">
                    <div class="room-img">
                       <a href="#"><img src="{{ asset('assets/img/Bali_Thumbnail-v1.jpg') }}" alt=""></a>
                    </div>
                    <div class="room-caption">
                        <h3><a href="#">Bali</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- Single Room -->
                <div class="single-room mb-50">
                    <div class="room-img">
                       <a href="#"> <img src="{{ asset('assets/img/Bandung_Thumbnail-v1.jpg') }}" alt=""></a>
                    </div>
                    <div class="room-caption">
                        <h3><a href="#">Bandung</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- Single Room -->
                <div class="single-room mb-50">
                    <div class="room-img">
                        <a href="#"><img src="{{ asset('assets/img/Jakarta_thumbnail-v1.jpg') }}" alt=""></a>
                    </div>
                    <div class="room-caption">
                        <h3><a href="#">Jakarta</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Destination End -->

<!-- Blog Start -->
<div class="blog-area blog-padding mt-5 pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <!-- Seciton Tittle  -->
                <div class="font-back-tittle mb-50">
                    <div class="archivment-front">
                        <h3>Blog Kami</h3>
                    </div>
                    <h3 class="archivment-back">Recent News</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Single Blog -->
                    <div class="single-blog mb-30">
                        <div class="blog-img">
                            <a href="{{ route('show', $post->slug )}}">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid" style=" display: block; max-width:370px; max-height:211px; width: auto; height: auto;">
                                @else
                                    <img src="https://source.unsplash.com/1200x400?travel" alt="" class="img-fluid" style=" display: block; max-width:370px; min-height:211px; width: auto; height: auto;">
                                    {{-- <img src="{{ asset('marian/assets/img/our_blog/blog-img1.jpg') }}" alt=""> --}}
                                @endif
                            </a>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-cap-top d-flex justify-content-between mb-40">
                                <span>blog</span>
                                <ul><li>by<a href="#"> {{ $post->author->name }}</a></li></ul>
                            </div>
                            <div class="blog-cap-mid">
                                <p><a href="{{ route('show', $post->slug )}}">{{ $post->title }}</a></p>
                                <p class="text-justify">{!! Str::limit(strip_tags($post->body), 150, '...') !!}</p>
                            </div>
                            <!-- Comments -->
                            {{-- <div class="blog-cap-bottom d-flex justify-content-between">
                                <span>Feb 28, 2020</span>
                                <span><img src="{{ asset('marian/assets/img/our_blog/blog-comments-icon.jpg') }}" alt="">3</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog End -->

<!-- Gallery img Start-->
<div class="gallery-area fix">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-12">
                <div class="gallery-active owl-carousel">
                    <div class="gallery-img">
                        <a href="#"><img src="{{ asset('assets/img/trial1.jpg') }}" alt=""></a>
                    </div>
                    <div class="gallery-img">
                        <a href="#"><img src="{{ asset('assets/img/balireopening-id-ver2.jpg') }}" alt=""></a>
                    </div>
                    <div class="gallery-img">
                        <a href="#"><img src="{{ asset('assets/img/Mandalika-banner.jpg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery img End-->

@endsection