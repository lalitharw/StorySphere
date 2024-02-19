@extends("layouts.main")



@section("title")
 404
@endsection


@section("main-section")
<section class="section-sm pb-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text-center">
          <h1 class="page-not-found-title">404</h1>
          <p class="mb-4">Oops. The page you're looking for doesn't exist.</p>
          <a class='btn btn-primary' href='{{url("/")}}'>Back to home</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
