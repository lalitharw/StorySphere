@extends("layouts.main")

@section("title")
 {{$author_info->user->firstname}}
@endsection

@section("main-section")

<section class="page-header section-sm">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="row g-4 g-lg-5 text-center text-lg-start justify-content-center justify-content-lg-start">
          <div class="col-lg-3 col-md-4 col-sm-5 col-6">
            <img class="img-fluid rounded" src="{{asset('storage'.$author_info->avatar)}}" alt="{{$author_info->user->firstname}} {{$author_info->user->lastname}}" style="max-width: 200px; max-height: 200px; ">
          </div>
          <div class="col-lg-9 col-md-12">
            <p class="mb-2"><span class="fw-bold text-black">{{count($blogs)}}</span> Published {{(count($blogs)>1)?"posts":"post"}}</p>
            <h1 class="h3 text-dark mb-3">{{$author_info->user->firstname}} {{$author_info->user->lastname}}</h1>
            <div class="content">
              <p>{{$author_info->description}}</p>
            </div>
          </div>
        </div>
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
          <a class='d-block' href='{{url("/specific-blog/{$blog->id}")}}' title='{{$blog->title}}'>
            <div class="post-image position-relative">
              <img class="w-100 h-100 rounded" src="{{extractImage("{$blog->description}")}}" alt="{{$blog->title}}" width="970" height="500">
            </div>
          </a>
          <ul class="card-meta list-inline mb-3">
            <li class="list-inline-item mt-2">
              <i class="ti ti-calendar-event"></i>
              <span>{{optional($blog->created_at)->format('M j, Y')}}</span>
            </li>
            <li class="list-inline-item mt-2">—</li>
            <li class="list-inline-item mt-2">
              <i class="ti ti-clock"></i>
              <span>{{caculateReadingTime("{$blog->description}")}} min read</span>
            </li>
          </ul>
          <a class='d-block' href='{{url("/specific-blog/{$blog->id}")}}'>
            <h3 class="mb-3 post-title">
              {{$blog->title}}
              {{-- {{extractPara("{$blog->description}")}} --}}
            </h3>
          </a>
          <p>{{limitChar("{$blog->description}")}}</p>
        </div>
        <div class="card-footer border-top-0 bg-transparent p-0">
          <ul class="card-meta list-inline">
            <li class="list-inline-item mt-2">
              <a class='card-meta-author' href='{{url("/author/{$blog->authorId}")}}' title='Read all posts by - {{$author_info->user->firstname}} {{$author_info->user->lastname}}'>
                <img class="w-auto" src="{{asset('storage'.$author_info->avatar)}}" alt="{{$author_info->user->firstname}} {{$author_info->user->lastname}}" width="26" height="26"> by <span>{{$author_info->user->firstname}} {{$author_info->user->lastname}}</span>
              </a>
            </li>
            <li class="list-inline-item mt-2">•</li>
            <li class="list-inline-item mt-2">
              <ul class="card-meta-tag list-inline">
                <li class="list-inline-item small"><a href='{{url("/tag/{$blog->tager->id}")}}'>{{$blog->tager->tag_name}}</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </article>
    </div>
    @endforeach
 
  </div>
</div>
  
@endsection