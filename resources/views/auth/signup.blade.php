@extends("layouts.main")

@section("title")
    SignUp
@endsection

@section("main-section")
<div class="container mt-4" style="min-height:70vh">
    <div class="row d-flex justify-content-center">
        <div class="col-10 ">
            <h2>Sign Up</h2>
            @if(Session::has("message"))
                <p>
                    {{Session::get("message")}}
                </p>
                
            @endif
<form action="{{route("register")}}" method="POST">
    @csrf
    <div class="row mb-3">
        <div class="col-md-6">
    <div class="form-group ">
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" class="form-control" placeholder="Enter First Name" id="firstname">
      </div>
        </div>

        <div class="col-md-6 ">
      <div class="form-group">
        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" class="form-control" placeholder="Enter Last Name" id="lastname">
      </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
      <div class="form-group">
        <label for="avatar">Select Avatar:</label>
        <input type="file" name="avatar" class="form-control" placeholder="Enter First Name" id="avatar">
      </div>
    </div>

    <div class="col-md-6 ">
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
    </div>
</div>
</div>

<div class="row mb-4">
    <div class="col-md-6 " >
    
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" id="pwd">
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="cpwd">Confirm Password:</label>
        <input type="password" class="form-control" placeholder="Enter password again" id="cpwd">
      </div>
    </div>
</div>
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
    
    <p>Already a Author? <a class="text-primary" href="{{url("login")}}">Log in</a></p>
  </form>
</div>
</div>
</div>
@endsection