@extends('backend.master')
@section('content')
<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Product List</h4>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    {{-- <div class="search_inner">
                                        <form Active="#">
                                            <div class="search_field">
                                                <input type="text"
                                                    placeholder="Search content here...">
                                            </div>
                                            <button type="submit"> <i class="ti-search"></i> </button>
                                        </form>
                                    </div> --}}
                                </div>
                                <div class="add_button ms-2">
                                    <a href="{{ route('product.add') }}" class="btn_1">Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="QA_table mb_30">

                            <table class="table lms_table_active3 ">
                                <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                {{-- <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <th scope="row"> <a href="#" class="question_content">{{ $category->parent_category_id }}</a></th>
                                        <td>{{ $category->category_name }}</td>
                                        <td>
                                            <span class="badge {{ $category->status == 'active' ? 'bg-success' : 'bg-danger' }} ">{{ $category->status }}</span>
                                        </td>
                                        <td>
                                            <div class="header_more_tool">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle"
                                                        id="dropdownMenuButton"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ti-more-alt"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton"
                                                        x-placement="bottom-end"
                                                        style="position: absolute; transform: translate3d(-148px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <button class="dropdown-item editbtn editcategory" id="edit" data-id="{{ $category->id }}" data-bs-toggle="modal"
                                                        data-bs-target="#editcategory"> <i
                                                                class="ti-eye"></i> View</button>
                                                        <a class="dropdown-item" href="{{ route('category.delete', ['id'=>$category->id]) }}"> <i
                                                                class="ti-trash"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection