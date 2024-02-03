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
    <div class="col-lg-6">
      <article class="card post-card h-100 border-0 bg-transparent">
        <div class="card-body">
          <a class='d-block' href='/qurno/blog-single' title='I work 5 hours a day, and I’ve never been more productive'>
            <div class="post-image position-relative">
              <img class="w-100 h-auto rounded" src="assets/images/blog/08.jpg" alt="I work 5 hours a day, and I’ve never been more productive" width="970" height="500">
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
          <a class='d-block' href='/qurno/blog-single' title='I work 5 hours a day, and I’ve never been more productive'><h3 class="mb-3 post-title">
          I work 5 hours a day, and I’ve never been more productive
          </h3></a>
          <p>Something’s very wrong with the traditional 9 to 5: it doesn’t work.
          Scandinavian countries dominate the World Happiness Report — Norway being the …</p>
        </div>
        <div class="card-footer border-top-0 bg-transparent p-0">
          <ul class="card-meta list-inline">
            <li class="list-inline-item mt-2">
              <a class='card-meta-author' href='/qurno/author-single' title='Read all posts by - Chris Impey'>
                <img class="w-auto" src="assets/images/author/chris-impey.jpg" alt="Chris Impey" width="26" height="26"> by <span>Chris</span>
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
    <div class="col-lg-6">
      <article class="card post-card h-100 border-0 bg-transparent">
        <div class="card-body">
          <a class='d-block' href='/qurno/blog-single' title='Gig startups want you to believe they can replace your job — don’t fall for it'>
            <div class="post-image position-relative">
              <img class="w-100 h-auto rounded" src="assets/images/blog/05.jpg" alt="Gig startups want you to believe they can replace your job — don’t fall for it" width="970" height="500">
            </div>
          </a>
          <ul class="card-meta list-inline mb-3">
            <li class="list-inline-item mt-2">
              <i class="ti ti-calendar-event"></i>
              <span>09 Feb, 2019</span>
            </li>
            <li class="list-inline-item mt-2">—</li>
            <li class="list-inline-item mt-2">
              <i class="ti ti-clock"></i>
              <span>03 min read</span>
            </li>
          </ul>
          <a class='d-block' href='/qurno/blog-single' title='Gig startups want you to believe they can replace your job — don’t fall for it'>
            <h3 class="mb-3 post-title">
              Gig startups want you to believe they can replace your job — don’t fall for it
            </h3>
          </a>
          <p>Don’t quit your day job just yet. That’s the message that should be implied — if not explicitly stated — to every applicant of every gig and creator …</p>
        </div>
        <div class="card-footer border-top-0 bg-transparent p-0">
          <ul class="card-meta list-inline">
            <li class="list-inline-item mt-2">
              <a class='card-meta-author' href='/qurno/author-single' title='Read all posts by - Chris Impey'>
                <img class="w-auto" src="assets/images/author/chris-impey.jpg" alt="Chris Impey" width="26" height="26">
                by <span>Chris</span>
              </a>
            </li>
            <li class="list-inline-item mt-2">•</li>
            <li class="list-inline-item mt-2">
              <ul class="card-meta-tag list-inline">
                <li class="list-inline-item small"><a href='/qurno/tag-single'>Lifestyle</a></li>
                <li class="list-inline-item small"><a href='/qurno/tag-single'>Startups</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </article>
    </div>
    <div class="col-lg-6">
      <article class="card post-card h-100 border-0 bg-transparent">
        <div class="card-body">
          <a class='d-block' href='/qurno/blog-single' title='3 reasons why sodium-ion batteries may dethrone lithium'>
            <div class="post-image position-relative">
              <img class="w-100 h-auto rounded" src="assets/images/blog/01.jpg" alt="3 reasons why sodium-ion batteries may dethrone lithium" width="970" height="500">
            </div>
          </a>
          <ul class="card-meta list-inline mb-3">
            <li class="list-inline-item mt-2">
              <i class="ti ti-calendar-event"></i>
              <span>10 Jan, 2019</span>
            </li>
            <li class="list-inline-item mt-2">—</li>
            <li class="list-inline-item mt-2">
              <i class="ti ti-clock"></i>
              <span>03 min read</span>
            </li>
          </ul>
          <a class='d-block' href='/qurno/blog-single' title='3 reasons why sodium-ion batteries may dethrone lithium'>
            <h3 class="mb-3 post-title">
              3 reasons why sodium-ion batteries may dethrone lithium
            </h3>
          </a>
          <p>Lithium-ion batteries have played a vital role in the development of electric vehicles and we love them for that. But at the same time, lithium is …</p>
        </div>
        <div class="card-footer border-top-0 bg-transparent p-0">
          <ul class="card-meta list-inline">
            <li class="list-inline-item mt-2">
              <a class='card-meta-author' href='/qurno/author-single' title='Read all posts by - Emma Hazel'>
                <img class="w-auto" src="assets/images/author/emma-hazel.jpg" alt="Emma Hazel" width="26" height="26">
                by <span>Emma</span>
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
    <div class="col-lg-6">
      <article class="card post-card h-100 border-0 bg-transparent">
        <div class="card-body">
          <a class='d-block' href='/qurno/blog-single' title='How to hire a developer straight out of bootcamp — without getting burned'>
            <div class="post-image position-relative">
              <img class="w-100 h-auto rounded" src="assets/images/blog/07.jpg" alt="How to hire a developer straight out of bootcamp — without getting burned" width="970" height="500">
            </div>
          </a>
          <ul class="card-meta list-inline mb-3">
            <li class="list-inline-item mt-2">
              <i class="ti ti-calendar-event"></i>
              <span>15 Nov, 2021</span>
            </li>
            <li class="list-inline-item mt-2">—</li>
            <li class="list-inline-item mt-2">
              <i class="ti ti-clock"></i>
              <span>03 min read</span>
            </li>
          </ul>
          <a class='d-block' href='/qurno/blog-single' title='How to hire a developer straight out of bootcamp — without getting burned'>
            <h3 class="mb-3 post-title">
              How to hire a developer straight out of bootcamp — without getting burned
            </h3>
          </a>
          <p>There’s a worldwide talent shortage in software development, and nearly one-third of hiring managers have
            hired someone from a coding bootcamp to help …
          </p>
        </div>
        <div class="card-footer border-top-0 bg-transparent p-0">
          <ul class="card-meta list-inline">
            <li class="list-inline-item mt-2">
              <a class='card-meta-author' href='/qurno/author-single' title='Read all posts by - Chris Impey'>
                <img class="w-auto" src="assets/images/author/chris-impey.jpg" alt="Chris Impey" width="26" height="26"> by <span>Chris</span>
              </a>
            </li>
            <li class="list-inline-item mt-2">•</li>
            <li class="list-inline-item mt-2">
              <ul class="card-meta-tag list-inline">
                <li class="list-inline-item small"><a href='/qurno/tag-single'>Lifestyle</a></li>
                <li class="list-inline-item small"><a href='/qurno/tag-single'>Startups</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </article>
    </div>
    <div class="col-lg-6">
      <article class="card post-card h-100 border-0 bg-transparent">
        <div class="card-body">
          <a class='d-block' href='/qurno/blog-single' title='Why developers are so divided over WordPress'>
            <div class="post-image position-relative">
              <img class="w-100 h-auto rounded" src="assets/images/blog/09.jpg" alt="Why developers are so divided over WordPress" width="970" height="500">
            </div>
          </a>
          <ul class="card-meta list-inline mb-3">
            <li class="list-inline-item mt-2">
              <i class="ti ti-calendar-event"></i>
              <span>12 Oct, 2020</span>
            </li>
            <li class="list-inline-item mt-2">—</li>
            <li class="list-inline-item mt-2">
              <i class="ti ti-clock"></i>
              <span>03 min read</span>
            </li>
          </ul>
          <a class='d-block' href='/qurno/blog-single' title='Why developers are so divided over WordPress'>
            <h3 class="mb-3 post-title">
              Why developers are so divided over WordPress
            </h3>
          </a>
          <p>After seeing WordPress top the most dreaded platform on Stack Overflow’s Developer Survey for two years
            in a row (2019 and 2020), a few weeks ago we …</p>
        </div>
        <div class="card-footer border-top-0 bg-transparent p-0">
          <ul class="card-meta list-inline">
            <li class="list-inline-item mt-2">
              <a class='card-meta-author' href='/qurno/author-single' title='Read all posts by - Thomas Macaulay'>
                <img class="w-auto" src="assets/images/author/thomas-macaulay.jpg" alt="Thomas Macaulay" width="26" height="26"> by <span>Thomas</span>
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
    <div class="col-lg-6">
      <article class="card post-card h-100 border-0 bg-transparent">
        <div class="card-body">
          <a class='d-block' href='/qurno/blog-single' title='Why everyone is talking about ‘green steel’ at COP26'>
            <div class="post-image position-relative">
              <img class="w-100 h-auto rounded" src="assets/images/blog/06.jpg" alt="Why everyone is talking about ‘green steel’ at COP26" width="970" height="500">
            </div>
          </a>
          <ul class="card-meta list-inline mb-3">
            <li class="list-inline-item mt-2">
              <i class="ti ti-calendar-event"></i>
              <span>14 Sep, 2020</span>
            </li>
            <li class="list-inline-item mt-2">—</li>
            <li class="list-inline-item mt-2">
              <i class="ti ti-clock"></i>
              <span>03 min read</span>
            </li>
          </ul>
          <a class='d-block' href='/qurno/blog-single' title='Why everyone is talking about ‘green steel’ at COP26'>
            <h3 class="mb-3 post-title">
              Why everyone is talking about ‘green steel’ at COP26
            </h3>
          </a>
          <p>Among the rhetoric of climate change bingo and platitudes, there’s a term I’ve been hearing a lot at COP26 this week — green steel. But what is it, …</p>
        </div>
        <div class="card-footer border-top-0 bg-transparent p-0">
          <ul class="card-meta list-inline">
            <li class="list-inline-item mt-2">
              <a class='card-meta-author' href='/qurno/author-single' title='Read all posts by - Thomas Macaulay'>
                <img class="w-auto" src="assets/images/author/thomas-macaulay.jpg" alt="Thomas Macaulay" width="26" height="26"> by <span>Thomas</span>
              </a>
            </li>
            <li class="list-inline-item mt-2">•</li>
            <li class="list-inline-item mt-2">
              <ul class="card-meta-tag list-inline">
                <li class="list-inline-item small"><a href='/qurno/tag-single'>Lifestyle</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </article>
    </div>
    
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