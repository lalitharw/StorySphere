@extends("layouts.main")

@section("title")
    Login
@endsection

@section("main-section")
<div class="container mt-4" style="height:70vh">
    <div class="row d-flex justify-content-center">
        <div class="col-4 col-sm-10">
            <h2>Login</h2>
            @if(Session::has("message"))
                <p>
                    {{Session::get("message")}}
                </p>
                
            @endif
<form action="{{route("loginuser")}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
    </div>
    <br>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
    </div>
    <br>
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
    
    <p>New Here? <a class="text-primary" href="{{url("signup")}}">Create an account</a></p>
  </form>
</div>
</div>
</div>
@endsection