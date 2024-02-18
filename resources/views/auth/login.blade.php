@extends("layouts.main")

@section("title")
    Login
@endsection

@section("main-section")
<div class="container mt-4" style="height:70vh">
    <div class="row d-flex justify-content-center">
        <div class=" col-sm-10">
            <h2>Login</h2>
           
<form action="{{route("loginuser")}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
      @error("email")
        <p class="text-danger">{{$message}}</p>
      @enderror
    </div>
    <br>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
      @error("password")
        <p class="text-danger">{{$message}}</p>
      @enderror
    </div>
    <br>
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
    
    <p>New Here? <a class="text-primary" href="{{url("signup")}}">Create an account</a></p>
  </form>
</div>
</div>
</div>
@endsection

@section("scripts")
<script>
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
</script>
@endif
@endsection