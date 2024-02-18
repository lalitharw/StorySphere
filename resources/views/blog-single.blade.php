@extends("layouts.main")

@section("title")
  single blog
@endsection

@section("main-section")
<section class="section-sm pb-0">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="mb-5">
          <h3 class="h1 mb-4 post-title">{{$blogs->title}}</h3>

          <ul class="card-meta list-inline mb-2">
            <li class="list-inline-item mt-2">
              <a class='card-meta-author' href='{{url("/author/{$blogs->authorId}")}}' title='Read all posts by - {{$blogs->user->firstname}}'>
                <img class="w-auto" src="assets/images/author/thomas-macaulay.jpg" alt="{{$blogs->user->firstname}} {{$blogs->user->lastname}}" width="26" height="26"> by <span style="text-transform: capitalize">{{$blogs->user->firstname}} {{$blogs->user->lastname}}</span>
              </a>
            </li>
            <li class="list-inline-item mt-2">—</li>
            <li class="list-inline-item mt-2">
              <i class="ti ti-clock"></i>
              <span>02 min read</span>
            </li>
            <li class="list-inline-item mt-2">—</li>
            <li class="list-inline-item mt-2">
              <i class="ti ti-calendar-event"></i>
              <span>{{optional($blogs->created_at)->format('M j, Y')}}</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="mb-5 text-center h-30">
          <img class="w-100 h-60 rounded" style="object-fit:cover"  src="{{extractImage("{$blogs->description}")}}" alt="{{$blogs->title}}" width="970" height="500">
        </div>
      </div>
      <div class="col-lg-2 post-share-block order-1 order-lg-0 mt-5 mt-lg-0">
        <div class="position-sticky" style="top:150px">
          <span class="d-inline-block mb-3 small">SHARE</span>
          <ul class="social-share icon-box">
            <li class="d-inline-block d-lg-block me-2 mb-2" onclick="return tbs_click()"><i class="ti ti-brand-twitter"></i></li>
            <li class="d-inline-block d-lg-block me-2 mb-2" onclick="return fbs_click()"><i class="ti ti-brand-facebook"></i></li>
            <li class="d-inline-block d-lg-block me-2 mb-2" onclick="return ins_click()"><i class="ti ti-brand-linkedin"></i></li>
            <li class="d-inline-block d-lg-block me-2 mb-2" onclick="return red_click()"><i class="ti ti-brand-reddit"></i></li>
            <li class="d-inline-block d-lg-block me-2 mb-2" onclick="return pin_click()"><i class="ti ti-brand-pinterest"></i></li>
          </ul>
        </div>
        <script type="text/javascript">
          var pageLink = window.location.href;
          var pageTitle = String(document.title).replace(/\&/g, '%26');
          function tbs_click(){pageLink = 'https://twitter.com/intent/tweet?text=${pageTitle}&url=${pageLink}';socialWindow(pageLink, 570, 570);}
          function fbs_click(){pageLink = 'https://www.facebook.com/sharer.php?u=${pageLink}&quote=${pageTitle}';socialWindow(pageLink, 570, 570);}
          function ins_click(){pageLink = 'https://www.linkedin.com/sharing/share-offsite/?url=${pageLink}';socialWindow(pageLink, 570, 570);}
          function red_click(){pageLink = 'https://www.reddit.com/submit?url=${pageLink}';socialWindow(pageLink, 570, 570);}
          function pin_click(){pageLink = 'https://www.pinterest.com/pin/create/button/?&text=${pageTitle}&url=${pageLink}&description=${pageTitle}';socialWindow(pageLink, 570, 570);}
          function socialWindow(pageLink, width, height){var left = (screen.width - width) / 2;var top = (screen.height - height) / 2;var params = "menubar=no,toolbar=no,status=no,width=" + width + ",height=" + height + ",top=" + top + ",left=" + left;window.open(pageLink,"",params);}
        </script>
      </div>
      
      <div class="col-lg-8 post-content-block order-0 order-lg-2">
        <div class="content">
          {{-- <p>Light is fast. In fact, it is the fastest thing that exists, and a law of the universe is that nothing can move faster than light. Light travels at 186,000 miles per second (300,000 kilometers per second) and can go from the Earth to the Moon in just over a second. Light can streak from Los Angeles to New York in less than the blink of an eye.</p>
          <p>While 1% of anything doesn’t sound like much, with light, that’s still really fast – close to 7 million miles per hour! At 1% the speed of light, it would take a little over a second to get from Los Angeles to New York. This is more than 10,000 times faster than a commercial jet.</p>
          <h3 id="why-even-1-of-light-speed-is-hard">Why even 1% of light speed is hard</h3>
          <p>What’s holding humanity back from reaching 1% of the speed of light? In a word, energy. Any object that’s moving has energy due to its motion. Physicists call this kinetic energy. To go faster, you need to increase kinetic energy. The problem is that it takes a lot of kinetic energy to increase speed. To make something go twice as fast takes four times the energy. Making something go three times as fast requires nine times the energy, and so on.</p>
          <p><img src="https://images.theconversation.com/files/429627/original/file-20211101-25-c3f9c9.jpg?ixlib=rb-1.1.0&amp;q=30&amp;auto=format&amp;w=754&amp;h=522&amp;fit=crop&amp;dpr=2" alt="The Parker Solar Probe" title="The Parker Solar Probe"></p>
          <p>For example, to get a teenager who weighs 110 pounds (50 kilograms) to 1% of the speed of light would cost 200 trillion Joules (a measurement of energy). That’s roughly the same amount of energy that 2 million people in the U.S. use in a day.</p>
          <h3 id="how-fast-can-we-go">How fast can we go?</h3>
          <p>It’s possible to get something to 1% the speed of light, but it would just take an enormous amount of energy. Could humans make something go even faster?</p>
          <p>Yes! But engineers need to figure out new ways to make things move in space. All rockets, even the sleek new rockets used by SpaceX and Blue Origins, burn rocket fuel that isn’t very different from gasoline in a car. The problem is that burning fuel is very inefficient.</p>
          <p>Other methods for pushing a spacecraft involve using electric or magnetic forces. Nuclear fusion, the process that powers the Sun, is also much more efficient than chemical fuel.</p> --}}
            {!!removeFirstImage($blogs->description)!!}
        </div>

        <ul class="post-meta-tag list-unstyled list-inline mt-5">
          <li class="list-inline-item">Tag: </li>
         
          <li class="list-inline-item"><a class='bg-white' href='{{url("/tag/{$blogs->tager->id}")}}'>{{$blogs->tager->tag_name}}</a></li>
        </ul>
      </div>
    </div>

    
    <div class="single-post-author">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="d-block d-md-flex">
            <a href='{{url("/author/{$blogs->author->authorid}")}}'>
              <img class="rounded mr-4" src="assets/images/author/thomas-macaulay.jpg" alt="{{$blogs->user->firstname}} {{$blogs->user->lastname}}" width="155" height="155">
            </a>
            <div class="ms-0 ms-md-4 ps-0 ps-md-3 mt-4 mt-md-0">
              <h3 style="text-transform: capitalize" class="h4 mb-3"><a class='text-dark' href='/qurno/author-single'>{{$blogs->user->firstname}} {{$blogs->user->lastname}}  </a></h3>
              <p>{{$blogs->author->description}}</p>
              <div class="content"><a href='{{url("/author/{$blogs->authorId}")}}'>See all posts by this author <i class="ti ti-arrow-up-right"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  
    {{-- this is footer blog maybe i can add more logic  --}}
    <div class="single-post-similer">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="text-center">
            <h2 class="section-title">
              <span>Related Posts</span>
            </h2>
          </div>
          <div class="row gy-5 gx-4 g-xl-5">
            
            @foreach ($footerBlogs as $footer)
            <div class="col-lg-6">
              <article class="card post-card h-100 border-0 bg-transparent">
                <div class="card-body">
                  <a class='d-block' href='{{url("specific-blog/{$footer->id}")}}' title='{{$footer->title}}'>
                    <div class="post-image position-relative">
                      <img class="w-100 h-100 rounded" src="{{extractImage("{$footer->description}")}}" alt="{{$footer->title}}" width="970" height="500">
                    </div>
                  </a>
                  <ul class="card-meta list-inline mb-3">
                    <li class="list-inline-item mt-2">
                      <i class="ti ti-calendar-event"></i>
                      <span>{{optional($footer->created_at)->format('M j , Y')}}</span>
                    </li>
                    <li class="list-inline-item mt-2">—</li>
                    <li class="list-inline-item mt-2">
                      <i class="ti ti-clock"></i>
                      <span>01 min read</span>
                    </li>
                  </ul>
                  <a class='d-block' href='{{url("specific-blog/{$footer->id}")}}' title='{{$footer->title}}'>
                    <h3 class="mb-3 post-title">
                      {{$footer->title}}
                    </h3>
                  </a>
                  <p>{{limitChar("{$footer->description}")}}</p>
                </div>
                <div class="card-footer border-top-0 bg-transparent p-0">
                  <ul class="card-meta list-inline">
                    <li class="list-inline-item mt-2">
                      <a class='card-meta-author' href='{{url("/author/{$footer->authorId}")}}' title='Read all posts by - {{$footer->user->firstname}}'>
                        <img class="w-auto" src="assets/images/author/emma-hazel.jpg" alt="{{$footer->user->firstname}} {{$footer->user->lastname}}" width="26" height="26"> by <span style="text-transform: capitalize">{{$footer->user->firstname}}</span>
                      </a>
                    </li>
                    <li class="list-inline-item mt-2">•</li>
                    <li class="list-inline-item mt-2">
                      <ul class="card-meta-tag list-inline">
                        <li class="list-inline-item small"><a href='{{$footer->tager->id}}'>{{$footer->tager->tag_name}}</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </article>
            </div>
            @endforeach  
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection