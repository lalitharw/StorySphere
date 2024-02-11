<form action="{{url("/upload")}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" id="">
    <button type="submit">Submit</button>
</form> 