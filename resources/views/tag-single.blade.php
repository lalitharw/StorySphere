@extends('layouts.main')

@section("title")
    {{$tag_name->tag_name}}
@endsection

@section("main-section")
<section class="page-header section-sm">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <p class="mb-2">Showing posts from</p>
        <h1 class="section-title h2 mb-3">
          <span>{{$tag_name->tag_name}}</span>
        </h1>
        <ul class="list-inline breadcrumb-menu mb-3">
          <li class="list-inline-item"><a href='{{url("/")}}'><i class="ti ti-home"></i>  <span>Home</span></a></li>
          <li class="list-inline-item">• &nbsp; <a href='{{url("/tags")}}'><span>Tags</span></a></li>
          <li class="list-inline-item">• &nbsp; <a href='/qurno/tag-single'><span>{{$tag_name->tag_name}}</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="row gy-5 gx-4 g-xl-5">
    @foreach($res as $blog)
    <div class="col-lg-6">
      <article class="card post-card h-100 border-0 bg-transparent">
        <div class="card-body">
          <a class='d-block' href='/qurno/blog-single' title=' {{$blog->title}}'>
            <div class="post-image position-relative">
              <img class="w-100 h-100 rounded" src="{{extractImage("{$blog->description}")}}" alt=" {{$blog->title}}" width="970" height="500">
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
          <a class='d-block' href='{{url("/specific-blog/{$blog->id}")}}' title=' {{$blog->title}}'>
            <h3 class="mb-3 post-title">
              {{$blog->title}}
            </h3>
          </a>
          <p>{{limitChar("{$blog->description}")}}
          </p>
        </div>
        <div class="card-footer border-top-0 bg-transparent p-0">
          <ul class="card-meta list-inline">
            <li class="list-inline-item mt-2">
              <a class='card-meta-author' href='{{url("/author/{$blog->author->id}")}}' title='Read all posts by - {{$blog->user->firstname}} {{$blog->user->lastname}}'>
                <img class="w-auto" src="{{asset("/storage/".$blog->author->avatar)}}" alt="{{$blog->user->firstname}} {{$blog->user->lastname}}" width="26" height="26"> by <span>{{$blog->user->firstname}} {{$blog->user->lastname}}</span>
              </a>
            </li>
            <li class="list-inline-item mt-2">•</li>
            <li class="list-inline-item mt-2">
              <ul class="card-meta-tag list-inline">
                <li class="list-inline-item small"><a href='{{url("/tag/".$blog->tager->id)}}'>{{$blog->tager->tag_name}}</a></li>
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


