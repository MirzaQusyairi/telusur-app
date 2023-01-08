<header>
    <!-- Header Start -->
   <div class="header-area header-sticky shadow">
        <div class="main-header ">
            <div class="container">
                <div class="row align-items-center">
                    <!-- logo -->
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                           <a href="/"><img src="{{ asset('assets/img/logo.png') }}" alt="" width="250"></a>
                        </div>
                    </div>
                <div class="col-xl-10 col-lg-10">
                        <!-- main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">                                                                                                                                     
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/">Blog</a></li>
                                    @auth
                                        @if(auth()->user()->role === 'administrator' || auth()->user()->role === 'author')
                                        <li><a href="/admin">Dashboard</a></li>
                                        @endif
                                    @endauth
                                    </li>
                                    @auth
                                        <li><a href="#" class="p-0"><img src="{{ asset('assets/img/Sample_User_Icon.png') }}" alt="Icon User" width="40"></a>
                                            <ul class="submenu">
                                                <li>
                                                    <form action="/logout" method="POST">
                                                        @csrf
                                                        <button type="submit" class="dropdown-item">Logout</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    @else     
                                        <li>
                                            <a href="/login" class="btn btn1 d-none d-lg-block p-4" style="color: white">Masuk / Daftar</a>
                                        </li>
                                    @endauth
                                </ul>
                            </nav>
                        </div>
                    </div>             
                    <div class="col-xl-2 col-lg-2">
                        <!-- header-btn -->
                        @auth
                        <nav>
                            <div class="main-menu f-right d-none d-lg-block">
                            <ul id="navigation">
                                
                            </ul>
                            </div>
                        </nav>
                        @else 
                            
                        @endauth
                        
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
   </div>
    <!-- Header End -->
</header>