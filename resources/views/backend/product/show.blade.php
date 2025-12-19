@extends('backend.layout')
@push('backend_css')
    <style>
        .table-container {
            overflow-x: auto;
            scrollbar-width: thin;
            scrollbar-color: #6366f1 #f1f3f5;
        }

        .table-container::-webkit-scrollbar {
            height: 6px;
            width: 6px;
        }

        .table-container::-webkit-scrollbar-track {
            background: linear-gradient(180deg, #f8f9fa, #e9ecef);
            border-radius: 10px;
        }

        .table-container::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #6366f1, #4f46e5);
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        /* Hover effect — fixed */
        .table-container::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #4f46e5, #4338ca);
        }
    </style>
@endpush


@section('backend_content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <p class="mb-0">Show All Products</p>
            <a href="{{ route('dashboard.product.index') }}" class="btn btn-primary p-2"
                style="display:inline-flex; align-items:center; line-height: 0;">Go
                back
                <span class="ms-2"><iconify-icon icon="meteor-icons:turn-up-right" width="18"
                        height="18"></iconify-icon></span>
            </a>
        </div>

        <div class="card-body table-responsive table-container">
            <table class="table table-border table-hover table-striped">
                <tr>
                    <td>#</td>
                    <td>title</td>
                    <td>category</td>
                    <td>Images</td>
                    <td>Price</td>
                    <td>Discount Price</td>
                    <td>is Stock</td>
                    <td>Status</td>
                    <td>Descriptions</td>
                    <td>Actions</td>
                </tr>

                @forelse ($products as $key => $product)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->category->title }}</td>
                        <td style="min-width: 300px">
                            <div class="row">
                                @foreach ($product->productImages as $img)
                                    <div class="col-4">
                                        <div style="display: flex; align-items:center; line-height: 0;">
                                            {{-- border: 1px solid #4f46e5; display: flex; --}}
                                            <img class="img-fluid" style="margin-top:5px;"
                                                src="{{ asset('storage/product_images/' . $img->image_name) }}"
                                                alt="">
                                            <a href="{{ route('dashboard.product.delete', $img->id) }}"><iconify-icon icon="fluent:delete-12-regular" width="24"
                                                    height="24"></iconify-icon></a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->discount_price }}</td>
                        <td><span
                                class="badge bg-{{ $product->is_stock == 1 ? 'success' : 'danger' }}">{{ $product->is_stock == 1 ? 'Stock' : 'Out of Stock' }}</span>
                        </td>
                        <td><span
                                class="badge bg-{{ $product->status == 1 ? 'success' : 'danger' }}">{{ $product->status == 1 ? 'Active' : 'In Active' }}</span>
                        </td>
                        <td style="min-width: 200px;">
                            <p>{{ Str::limit($product->descriptions, 15, '.....') }}</p>
                        </td>
                        <td class=" justify-content-between">
                            <a href="{{ route('dashboard.product.edit', $product->slug) }}" class=""><iconify-icon
                                    icon="material-symbols-light:person-edit-outline" width="30"
                                    height="30"></iconify-icon></a>
                            <a href="{{ route('dashboard.product.deleteProduct', $product->id) }}" class="text-danger"><iconify-icon icon="fluent:delete-12-regular"
                                    width="24" height="24"></iconify-icon></a>
                        </td>
                    </tr>
                @empty
                @endforelse
            </table>
        </div>
    </div>
@endsection
