@extends("layouts.main")

@section("title")
    SignUp
@endsection

@section("main-section")
<div class="container mt-4" style="min-height:70vh">
    <div class="row d-flex justify-content-center">
        <div class="col-10 ">
            <h2>Sign Up @if (Session::has("redirect_to_author_page"))
              <p>adakd</p>
            @endif</h2>
           
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

    

   


<div class="row mb-4">

  <div class="col-md-6 ">
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
    </div>
  </div>
    <div class="col-md-6" >
    


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
    <button type="submit" class="btn btn-primary w-25 mb-2">Submit</button>
    
    <p>Already a Author? <a class="text-primary" href="{{url("login")}}">Log in</a></p>
  </form>
</div>
</div>
</div>
@endsection

@section("scripts")

@if(Session::has("message"))
Toastify({
  text: "{{Session::get('message')}}",
  duration: 3000,
  close: true,
  gravity: "top", // `top` or `bottom`
  position: "center", // `left`, `center` or `right`
  stopOnFocus: true, // Prevents dismissing of toast on hover
  style: {
    background: "linear-gradient(to right, #f08e80, #f08e80)",
    color:"#fff",
   
  },
  
}).showToast();
    
@endif
@endsection