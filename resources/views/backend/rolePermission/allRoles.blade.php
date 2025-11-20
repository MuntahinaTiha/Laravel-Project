@extends('backend.layout')
@section('backend_content')
    <div class="card p-4">
        <div class="d-flex justify-content-between align-items-center">
            <p class="mb-0">Roles</p>
            <a href="" class="btn btn-primary btn-sm">Create New Role</a>
        </div>

        <div class="card-body table-responsive">
            <table class="table table-striped table-bordered">
                <tr class="text-center">
                    <th>#</th>
                    <th>Role Name</th>
                    <th>Actions</th>
                </tr>
                @forelse ($roles as $key => $role)
                <tr class="text-center">
                    <td>{{ ++$key }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                        <a href="{{ route('dashboard.rolePermission.permissions', $role->id) }}"><iconify-icon icon="fluent:key-24-regular" width="24" height="32"></iconify-icon></a>
                    </td>
                </tr>

                @empty
                <td colspan="2" class="alert alert-danger text-center">No Role Found</td>
                @endforelse
            </table>
        </div>
    </div>
@endsection
