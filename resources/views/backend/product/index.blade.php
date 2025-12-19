@extends('backend.layout')

@push('backend_css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        .select2-container--default .select2-selection--single {
            height: 55px;
            border: 1px solid #d9dee3;
            border-radius: 6px;
            display: flex;
            align-items: center;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #c4cbd2;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: 14px;
            right: 10px;
        }
    </style>

    {{-- FILEPOND --}}
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />

    <style>
        .filepond--root .filepond--drop-label {
            background: white;
            outline: 1px solid #d9dee3;
            border-radius: 6px;
            color: #b3bbc5;
        }
    </style>
@endpush



@section('backend_content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <p class="mb-0">New Product Add</p>
            <a href="{{ route('dashboard.product.show') }}" class="btn btn-primary p-2" style="display:inline-flex; align-items:center; line-height: 0;">View
                All Products
                <span class="ms-2 pt-2"><iconify-icon icon="lets-icons:view-alt" width="22"
                        height="22"></iconify-icon></span>
            </a>
        </div>


        <div class="card-body">
            <form action="{{ route('dashboard.product.store') }}" method="post" enctype="multipart/form-data"
                class="p-3">
                @csrf

                <div class="row">
                    <div class="col-lg-6">
                        <label for="product_title">Product Title : </label>
                        <input id="product_title" name="product_title" type="text" placeholder="Product Title"
                            class="form-control p-3 mb-3">
                        @error('product_title')
                            <p class="text-danger mb-0 pb-0">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-lg-6">
                        <label for="product_title">Select Category : </label>
                        <select name="category_id" id="" class="js-example-basic-single form-control p-3 mb-3">
                            {{-- name="state" --}}
                            <option value="AL" selected disabled>--- Select Category ---</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-lg-6">
                        <label for="product_price">Product Price : </label>
                        <input id="product_price" name="product_price" type="number" placeholder="Product Price"
                            class="form-control p-3 mb-3">
                            @error('product_price')
                            <p class="text-danger mb-0 pb-0">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-lg-6">
                        <label for="discount_product_price">Product Discount Price : </label>
                        <input id="discount_product_price" name="discount_product_price" type="number"
                            placeholder="Product Discount Price" class="form-control p-3 mb-3">
                    </div>

                    <div class="col-lg-6">
                        <label for="stock_id">Select Stock : </label>
                        <select name="stock_id" id="" class="js-example-basic-single form-control p-3 mb-3">
                            {{-- name="state" --}}
                            <option value="1">In Stock</option>
                            <option value="0">Stock Out</option>
                        </select>
                    </div>

                    <div class="col-lg-6">
                        <label for="status_id">Select Status : </label>
                        <select name="status_id" id="" class="js-example-basic-single form-control p-3 mb-3">
                            {{-- name="state" --}}
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <div class="col-lg-6 mt-3">
                        <label for="product_details">Product Details : </label>
                        <textarea name="product_details" id="product_details" placeholder="Product Details....." class="form-control"></textarea>
                        @error('product_details')
                            <p class="text-danger mb-0 pb-0">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-lg-6 mt-3">
                        <label for="images">Upload Images : </label>
                        <input name="images[]" multiple type="file" class="images form-control">
                        @error('images')
                            <p class="text-danger mb-0 pb-0">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="btn btn-primary mb-0 d-flex justify-content-center align-items-center gap-2 w-100">Upload
                        <iconify-icon icon="ep:upload-filled" width="22" height="22"></iconify-icon>
                    </button>
                </div>

            </form>
        </div>

    </div>
@endsection





@push('backed_js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>

    {{-- FILEPOND --}}
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
    <script>
        // Turn input element into a pond with configuration options
        $('.images').filepond({
            allowMultiple: true,
            storeAsFile: true,
        });
    </script>
@endpush
