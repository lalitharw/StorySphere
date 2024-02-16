@extends('layouts.main')

@section('title')
    Publish
@endsection

@section('links')
    {{-- this is tinymce script --}}
    <script src="https://cdn.tiny.cloud/1/nl9xq8zfipfshxda1kl8xv0ghiwk5691dor81nd45ss0u7t6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
            <div class="col-12 ">
                <h2>Publish Blog</h2>

                <form action="{{ route('storeBlog') }}" method="POST">
                    @csrf
                    <div class="container-fluid">
                    <div class="row">
                      <div class="  col-md-6  mb-3">
                          <div class="form-group">
                            <label for="tag">Select Tags:</label>
                            <select name="tag" id="tag" class="form-select">
                              <option value="">Select a tag</option>
                              @foreach ($tags as $tag)
                                  <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>
                              @endforeach
                          </select>
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="Description">Description:</label>
                                <textarea name="desc">
                                    Welcome to TinyMCE!
                                  </textarea>
                        </div>
                        </div>
                    </div>

                    </div>
                    <button type="submit" class="btn btn-primary w-25 mb-2 btn-sm-sm">Submit Blog</button>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });
  </script>


@endsection
