@extends('backend.layout')
@section('backend_content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <p class="mb-0">Add Category</p>
                <a href="{{ route('dashboard.category.store') }}" class="btn btn-primary btn-sm p-2"
                    style="display:inline-flex; align-items:center; line-height: 0;">Go Back
                    <span class="ms-2"><iconify-icon icon="meteor-icons:turn-up-right" width="20"
                            height="18"></iconify-icon></span>
                </a>
            </div>
        </div>

        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped">
                <tr class="text-center">
                    <th>#</th>
                    <th>Title</th>
                    <th>Parent</th>
                    <th>Meta Title</th>
                    <th>Meta Description</th>
                    <th>Meta Keywords</th>
                    <th>Actions</th>
                </tr>

                @forelse ($categories as $key=>$category)
                    <tr class="text-center">
                        <td>{{ ++$key }}</td>
                        <td>{{ $category->title }}</td>

                        {{-- <td>{{ $category->category_id ? $category->parent->title : 'not found' }}</td> --}}
                        <td><span class="badge bg-{{ $category->parent ? 'success' : 'danger' }}">{{ $category->parent ? $category->parent->title : 'not found' }}</span></td>

                        <td>{{ $category->meta_title ? $category->meta_title: '-------' }}</td>
                        <td>{{ $category->meta_description ? $category->meta_description: '--------' }}</td>
                        <td>{{ $category->meta_keywords ? $category->meta_keywords: '---------' }}</td>
                        <td>
                           <div class="d-flex justify-content-evenly">
                             <a href="{{ route('dashboard.category.edit', $category->slug) }}"><iconify-icon icon="fa-regular:edit" width="20" height="20"></iconify-icon></a>
                             <a class="text-danger" href="{{ route('dashboard.category.delete', $category->id) }}"><iconify-icon icon="fluent:delete-32-regular" width="22" height="22"></iconify-icon></a>
                           </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">
                            <div><p class="alert alert-danger">No Category Found!</p></div>
                        </td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
@endsection
