@extends("layouts.main")

@section("title")
  About
@endsection

@section("main-section")
  

<section class="page-header section-sm">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="section-title h2 mb-3">
          <span>About</span>
        </h1>
        <ul class="list-inline breadcrumb-menu mb-3">
          <li class="list-inline-item"><a href='{{url("/")}}'><i class="ti ti-home"></i>  <span>Home</span></a></li>
          <li class="list-inline-item">• &nbsp; <a href='/qurno/about'><span>About</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center">
        <h2 class="text-dark mb-0">Languages & Tools Used</h2>
      </div>
    </div>
    <div class="section-sm pb-0">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
        
  
          <div class="row gx-4 gy-5 gx-md-5 justify-content-center text-center">
            
            <div class="col-md-4 col-sm-6">
              <a class='d-inline-block is-hoverable' href='/qurno/author-single'>
                <img class="img-fluid rounded" src="assets/images/author/chris-impey.jpg" alt="Chris Impey" width="150" height="150">
                <h4 class="text-dark mt-4 mb-1">Chris Impey</h4>
                <p class="mb-0"><span class="fw-bold text-black">04</span> Published posts</p>
              </a>
            </div>
            
            <div class="col-md-4 col-sm-6">
              <a class='d-inline-block is-hoverable' href='/qurno/author-single'>
                <img class="img-fluid rounded" src="assets/images/author/emma-hazel.jpg" alt="Emma Hazel" width="150" height="150">
                <h4 class="text-dark mt-4 mb-1">Emma Hazel</h4>
                <p class="mb-0"><span class="fw-bold text-black">02</span> Published posts</p>
              </a>
            </div>
            
            <div class="col-md-4 col-sm-6">
              <a class='d-inline-block is-hoverable' href='/qurno/author-single'>
                <img class="img-fluid rounded" src="assets/images/author/thomas-macaulay.jpg" alt="Thomas Macaulay" width="150" height="150">
                <h4 class="text-dark mt-4 mb-1">Thomas Macaulay</h4>
                <p class="mb-0"><span class="fw-bold text-black">03</span> Published posts</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center mt-4">
      <div class="col-lg-10 text-center">
        <div class="content">
          <p>If ever a place existed where you could just go crazy creatively, it is definitely your about page. It’s your chance to show your readers who you really are. Pictures, quotes, inspirational graphics, whatever it is that drives you.. Display it here in a way that only you can.</p>
          <p>I’ve included a plugin in the setup of this theme that will make adding columns to your pages and posts a piece of cake. Let creativity take control, and forget about the technical end of things, I’ve got your six.</p>
        </div>
      </div>
    </div>
    
   
  </div>
</section>

@endsection