<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <title>StorySphere - @yield("title")</title>

    <meta name="author" content="Platol">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="description" content="Minimal Blog HTML Template">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- CSS Plugins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Work+Sans:wght@500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("plugins/bootstrap/bootstrap.min.css")}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{url("assets/css/style.css")}}">

    {{-- adding toastify.js --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    @yield("links")
</head>

<body>

    <div class="header-height-fix"></div>
    <header class="header-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <!-- logo -->
                        <a class='navbar-brand font-weight-bold mb-0' href='{{route("home")}}' title='Qurno'>
                            <img class="img-fluid" width="110" height="35" src="{{url('assets/images/logo.png')}}" alt="Qurno">
                        </a>

                        

                        @if(Session::has("loginid"))
                        <div class="dropdown  d-sm-inline-block d-lg-none ms-auto ">
                            <a class=" dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i  class="text-dark fs-1 ti ti-user-circle"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{route("publish")}}"><i class="ti ti-notebook"></i> Publish New Blog</a>
                                <a class="dropdown-item" href="{{url("manage")}}"><i class="ti ti-focus-centered"></i> Manage Blogs</a>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf <!-- CSRF protection for POST requests -->
                                    <button type="submit" class="dropdown-item btn btn-primary text-white">
                                        <i class="ti ti-logout"></i> Logout
                                    </button>
                                </form>
                              </div>
                          </div>
                        @else
                        <a href="{{url("/login")}}" type="button" class=" d-inline-block d-lg-none ms-auto btn-sm  btn btn-primary text-white">Login</a>
                            
                        @endif

                        <button class="search-toggle d-inline-block  ms-auto me-1 me-sm-3" data-toggle="search" aria-label="Search Toggle">
                            <span>Search</span>
                            <svg width="22" height="22" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.5 15.5L19 19" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M5 11C5 14.3137 7.68629 17 11 17C12.6597 17 14.1621 16.3261 15.2483 15.237C16.3308 14.1517 17 12.654 17 11C17 7.68629 14.3137 5 11 5C7.68629 5 5 7.68629 5 11Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navHeader" aria-controls="navHeader" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ti ti-menu-2 menu-open"></i>
                            <i class="ti ti-x menu-close"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navHeader">
                            <ul class="navbar-nav mx-auto">

                                <li class="nav-item {{(request()->url() == url("/"))?"active":""}}">
                                    <a class='nav-link' href='{{url("/")}}'>Home</a>
                                </li>
                                {{-- <li class="nav-item {{(request()->url()== url("/about"))?"active":""}}">
                                    <a class='nav-link' href='{{url("about")}}'>About</a>
                                </li> --}}
                                <li class="nav-item {{(request()->url()== url("/blogs"))?"active":""}}">
                                    <a class='nav-link' href='{{url("blogs")}}'>Blogs</a>
                                </li>
                                @if(!Session::has("is_author"))
                                <li class="nav-item {{(request()->url()== url("/author"))?"active":""}}">
                                    <a class='nav-link' href='{{url("author")}}'>Become an Author</a>
                                </li>
                               
                                @endif

                               
                            </ul>


                            <button class="search-toggle d-inline-block d-lg-none  ms-auto me-1 me-sm-3" data-toggle="search" aria-label="Search Toggle">
                                <span>Search</span>
                                <svg width="22" height="22" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5 15.5L19 19" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5 11C5 14.3137 7.68629 17 11 17C12.6597 17 14.1621 16.3261 15.2483 15.237C16.3308 14.1517 17 12.654 17 11C17 7.68629 14.3137 5 11 5C7.68629 5 5 7.68629 5 11Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <div class="navbar-right d-none d-lg-inline-block">
                                <ul class="social-links list-unstyled list-inline">
                                  <li class="list-inline-item ms-4 d-none d-lg-inline-block">
                                    @if(Session::has("data"))
                                    <div class="dropdown  d-sm-none d-lg-inline-block ms-auto ">
                                      <a class=" dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i  class="text-dark fs-1 ti ti-user-circle"></i>
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{route("publish")}}"><i class="ti ti-notebook"></i> Publish New Blog</a>
                                        <a class="dropdown-item" href="{{url("manage")}}"><i class="ti ti-focus-centered"></i> Manage Blogs</a>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf <!-- CSRF protection for POST requests -->
                                            <button type="submit" class="dropdown-item btn btn-primary text-white">
                                                <i class="ti ti-logout"></i> Logout
                                            </button>
                                        </form>
                                      </div>
                                    </div>
                                    @else
                                    <a href="{{route("login")}}" class="btn btn-primary text-white" >Login</a>
                            @endif
                  


                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="search-block">
        <div data-toggle="search-close">
            <span class="ti ti-x text-primary"></span>
        </div>

        <input type="text" id="js-search-input" placeholder="Type to search blog.." aria-label="search-query">

        <div class="mt-4 card-meta">
            <p class="h4 mb-3">See posts by tags</p>
            <ul class="card-meta-tag list-inline">
                @yield("tags-section")
            </ul>
        </div>

        
    </div>
