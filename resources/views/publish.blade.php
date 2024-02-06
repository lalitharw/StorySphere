@extends("layouts.main")

@section("title")
    Publish
@endsection


@section("main-section")
<div class="container mt-4" style="min-height:70vh">
    <div class="row d-flex justify-content-center">
        <div class="col-10 ">
            <h2>Publish Blog</h2>
           
<form action="{{route("storeBlog")}}" method="POST">
    @csrf
        <div class="row">
        <div class="col-md-12 mb-3">
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" class="form-control" placeholder="Enter Blog Title" id="title">
      </div>
        </div>

        <div class="col-md-12  mb-3">
      <div class="form-group">
        <label for="Description">Description:</label>
        <textarea rows="10"  name="desc" class="form-control" placeholder="Enter Blog Description" id="desc"></textarea>
      </div>
        </div>
        </div>

    

   

    <button type="submit" class="btn btn-primary w-25 mb-2">Submit Blog</button>
    
  </form>
</div>
</div>
</div>
@endsection