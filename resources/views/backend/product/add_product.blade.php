@extends('backend.master')
@section('content')
<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="white_box_tittle">
                                <h4>Add Product</h4>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="form-label">Parent Category</label>
                                        <select class="form-control wide mb_20 parentcategory @error('parentcategory') is-invalid @enderror" name="parent_category_id" >
                                            <option value="">Choise One</option>
                                            @foreach ($parent_categories as $parent_category)
                                            <option value="{{ $parent_category->id }}">{{ $parent_category->category_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('parentcategory')
                                        <small id="emailHelp" class="form-text text-muted">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Category</label>
                                        <select class="form-control wide mb_20 category" name="category_id" >
                                            <option value="">Choise One</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-label">Title</label>
                                        <div class="common_input mb_20">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="" name="title">
                                            @error('title')
                                            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Image</label>
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                            <input type="file" class="form-control @error('images') is-invalid @enderror" id="inputGroupFile01" multiple name="images" >
                                            </div>
                                            @error('images')
                                            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Status</label>
                                        <select class="form-control wide mb_20" name="status">
                                            <option value="active">Active</option>
                                            <option value="deactive">Deactive</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-label">Description</label>
                                        <textarea id="summernote" name="description"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="create_report_btn mt_30">
                                        <button type="submit" class="btn_1 w-100">Add Product</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
   $(document).ready(function() {
  $('#summernote').summernote();
});
  </script>

<script>
    $('.parentcategory').change(function() {
        var parent_category_id = $(this).val();
        // alert(parent_category_id)
                    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:'POST',
            url:'{{ url('getcategory') }}',
            data:{'parent_category_id':parent_category_id},
            success:function(data){
                $('.category').html(data);
            }
        });
    });
</script>
@endsection