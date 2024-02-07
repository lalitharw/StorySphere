@extends("layouts.main")

@section("title")
    Manage Blogs
@endsection

@section("main-section")
<section class="page-header section-sm">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="section-title h2 mb-3">
            <span>Manage Post</span>
          </h1>
          <ul class="list-inline breadcrumb-menu mb-3">
            <li class="list-inline-item"><a href="{{url("/")}}"><i class="ti ti-home"></i>  <span>Home</span></a></li>
            <li class="list-inline-item">• &nbsp; <a href="/qurno/blog"><span>Manage Posts</span></a></li>
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
              <a class='d-block' href='{{urL("specific-blog/{$blog->id}")}}' title='The AGI hype train is running out of steam'>
                <div class="post-image position-relative">
                  <img class="w-100 h-auto rounded" src="assets/images/blog/02.jpg" alt="The AGI hype train is running out of steam" width="970" height="500">
                </div>
              </a>
              <ul class="card-meta list-inline mb-3">
                <li class="list-inline-item mt-2">
                  <i class="ti ti-calendar-event"></i>
                  <span>{{$blog->created_at}}</span>
                </li>
                <li class="list-inline-item mt-2">—</li>
                <li class="list-inline-item mt-2">
                  <i class="ti ti-clock"></i>
                  <span>02 min read</span>
                </li>
              </ul>
              <a class='d-block' href='{{urL("specific-blog/{$blog->id}")}}' title='The AGI hype train is running out of steam'>
                <h3 class="mb-3 post-title">
                 {{$blog->title}}
                 
                </h3>
              </a>
              <p>The AGI hype train has hit some heavy traffic. While futurists and fundraisers used to make bullish predictions about artificial general intelligence, …</p>
            </div>
            <div class="card-footer border-top-0 bg-transparent p-0">
              <ul class="card-meta list-inline">
                <li class="list-inline-item mt-2">
                  <a class='card-meta-author' href='{{url("author/{$blog->authorId}")}}' title='Read all posts by -   {{$blog->user->firstname}} {{$blog->user->lastname}}'>
                    <img class="w-auto" src="assets/images/author/thomas-macaulay.jpg" alt="Thomas Macaulay" width="26" height="26"> by <span>{{$blog->user->firstname}} {{$blog->user->lastname}}</span>
                  </a>
                </li>
                <li class="list-inline-item mt-2">•</li>
                <li class="list-inline-item mt-2">
                  <ul class="card-meta-tag list-inline">
                    <li class="list-inline-item small"><a href='/qurno/tag-single'>Machine</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </article>
        </div>
        @endforeach
     
       
      
      </div>
    </div>
  </section>
@endsection