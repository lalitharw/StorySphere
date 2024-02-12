@extends("layouts.main")


@section("title")
  Blogs
@endsection

@section("main-section")
<section class="page-header section-sm">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="section-title h2 mb-3">
          <span>All posts</span>
        </h1>
        <ul class="list-inline breadcrumb-menu mb-3">
          <li class="list-inline-item"><a href='{{url("/")}}'><i class="ti ti-home"></i>  <span>Home</span></a></li>
          <li class="list-inline-item">• &nbsp; <a href='/qurno/blog'><span>All posts</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row gy-5 gx-4 g-xl-5">
    @foreach ($blogs as $blog)
    <div class="col-lg-6">
      <article class="card post-card h-100 border-0 bg-transparent">
        <div class="card-body">
          <a class='d-block' href='{{ url("/specific-blog/{$blog->id}")}}' title='{{$blog->title}}'>
            <div class="post-image position-relative">
              <img class="w-100 h-auto rounded" src="assets/images/blog/08.jpg" alt="{{$blog->title}}" width="970" height="500">
            </div>
          </a>
          <ul class="card-meta list-inline mb-3">
            <li class="list-inline-item mt-2">
              <i class="ti ti-calendar-event"></i>
              <span>12 Aug, 2020</span>
            </li>
            <li class="list-inline-item mt-2">—</li>
            <li class="list-inline-item mt-2">
              <i class="ti ti-clock"></i>
              <span>03 min read</span>
            </li>
          </ul>
          <a class='d-block' href='/qurno/blog-single' title='{{$blog->title}}'><h3 class="mb-3 post-title">
          {{$blog->title}}
          </h3></a>
          <p>{{$blog->description}}</p>
        </div>
        <div class="card-footer border-top-0 bg-transparent p-0">
          <ul class="card-meta list-inline">
            <li class="list-inline-item mt-2">
              <a class='card-meta-author' href='/qurno/author-single' title='Read all posts by - {{$blog->user->firstname}} {{$blog->user->lastname}}'>
                <img class="w-auto" src="assets/images/author/chris-impey.jpg" alt="Chris Impey" width="26" height="26"> by <span>{{$blog->user->firstname}} {{$blog->user->lastname}}</span>
              </a>
            </li>
            <li class="list-inline-item mt-2">•</li>
            <li class="list-inline-item mt-2">
              <ul class="card-meta-tag list-inline">
                <li class="list-inline-item small"><a href='/qurno/tag-single'>Work</a></li>
                <li class="list-inline-item small"><a href='/qurno/tag-single'>Lifestyle</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </article>
    </div>
    @endforeach
  
    
    <div class="col-12">
      <!-- pagination -->
      <nav class="text-center mt-5">
        <ul class="pagination justify-content-center border border-white rounded d-inline-flex">
          <li class="page-item"><a aria-label='Pagination Arrow' class='page-link rounded w-auto px-4' href='/qurno/blog'>Prev</a></li>
          <li class="page-item active ">
            <a class='page-link rounded' href='/qurno/blog'>1</a>
          </li>
          <li class="page-item">
            <a class='page-link rounded' href='/qurno/blog'>2</a>
          </li>
          <li class="page-item mt-2 mx-2">...</li>
          <li class="page-item"><a aria-label='Pagination Arrow' class='page-link rounded' href='/qurno/blog'>16</a></li>
          <li class="page-item"><a aria-label='Pagination Arrow' class='page-link rounded w-auto px-4' href='/qurno/blog'>Next</a></li>
        </ul>
      </nav>
      
    </div>
  </div>
</div>
@endsection