@extends('layouts.main')

@section('title')
    Publish
@endsection

@section('links')
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">

   <style>
      .item-container{
        color:#fff !important;
        background: #f08e80!important;
        border:2px solid #f08e80!important;
        border-radius: 5px !important
      }

      .item-label{
        color: #fff !important
      }
   </style>
@endsection


@section('main-section')
    <div class="container mt-4" style="min-height:70vh">
        <div class="row d-flex justify-content-center">
            <div class="col-10 ">
                <h2>Publish Blog</h2>

                <form action="{{ route('storeBlog') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Blog Title"
                                    id="title">
                            </div>
                        </div>

                        <div class="  col-md-6  mb-3">
                          <div class="form-group">
                            <label for="Description">Select Tags:</label>
                          <select name="countries" id="countries" multiple>
                            <option value="1">Afghanistan</option>
                            <option value="2">Australia</option>
                            <option value="3">Germany</option>
                            <option value="4">Canada</option>
                            <option value="5">Russia</option>
                        </select>
                          </div>
                        </div>

                        <div></div>
                        <div class="col-md-12  mb-3">
                            <div class="form-group">
                                <label for="Description">Description:</label>
                                <textarea rows="10" name="desc" class="form-control" placeholder="Enter Blog Description" id="desc"></textarea>
                            </div>


                        </div>

                        {{-- select field --}}
                      

                    </div>
                    <button type="submit" class="btn btn-primary w-25 mb-2">Submit Blog</button>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>

<script>
  new MultiSelectTag('countries', {
    rounded: true,    // default true
    shadow: true,      // default false
    placeholder: 'Search',  // default Search...
    tagColor: {
        textColor: '#327b2c',
        borderColor: '#92e681',
        bgColor: '#eaffe6',
    },
    onChange: function(values) {
        console.log(values)
    }
})
</script>

@endsection
