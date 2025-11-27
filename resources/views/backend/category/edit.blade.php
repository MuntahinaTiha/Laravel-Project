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
@endpush

@section('backend_content')
    <div class="card p-3">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <p class="mb-0">Add Category</p>
                <a href="{{ route('dashboard.category.view') }}" class="btn btn-primary btn-sm p-2"
                    style="display:inline-flex; align-items:center; line-height: 0;">View All Category
                    <span class="ms-2 pt-2"><iconify-icon icon="lets-icons:view-alt" width="22"
                            height="22"></iconify-icon></span>
                </a>
            </div>
        </div>

        <div class="card-body">
            <form action="{{ route('dashboard.category.update', $edit_category->slug) }}" method="post">
                @csrf
                @method('put')

                <div class="row">
                    <div class="col-lg-6">
                        <input value="{{ $edit_category->title }}" type="text" name="title" placeholder="Title" class="form-control p-3">
                        @error('title')
                            <p class="text-danger mb-0 pb-0">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-lg-6">
                        <select class="js-example-basic-single form-control" name="state">
                            <option value="AL" selected disabled>---Select Category---</option>
                            @foreach ($categories as $category)
                                <option {{ $category->id == $edit_category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                                {{-- <option {{ $category->id == $edit_category->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option> --}}
                            @endforeach
                        </select>
                    </div>

                    <div class="col-lg-6 mt-3">
                        <input value="{{ $edit_category->meta_title }}" type="text" name="meta_title" placeholder="Meta Title" class="form-control p-3">
                    </div>

                    <div class="col-lg-6 mt-3">
                        <input value="{{ $edit_category->keywords }}" type="text" name="meta_keywords" placeholder="Meta Keywords" class="form-control p-3">
                    </div>

                    <div class="col-lg-12 mt-3">
                        <textarea name="meta_description" id="" class="form-control" placeholder="Meta Description"></textarea>
                    </div>

                    {{-- <div class="col-lg-6" mt-3>
                        <img style="width: 100px; border-radius: 10px" src="{{ $category->image ? asset('storage/categoryImages/' .$category->image) : asset('assets/img/user.png') }}" alt="">
                    </div> --}}

                    <div class="col-lg-12">
                        <button class="btn btn-primary mt-3 w-100">Submit</button>
                    </div>
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
@endpush
