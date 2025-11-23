@extends('backend.layout')
@section('backend_content')


    <div class="card p-4">
        <div class="d-flex justify-content-between align-items-center">
            <p class="mb-0">Roles</p>
            <a href="{{ route('dashboard.rolePermission.create.role') }}" class="btn btn-primary btn-sm">Create New Role</a>
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
                        <div  class="d-flex justify-content-evenly">
                            <a href="{{ route('dashboard.rolePermission.edit.role', $role->id) }}"><iconify-icon icon="material-symbols-light:person-edit-outline" width="30" height="30"></iconify-icon></a>
                            <a class="text-danger" href="{{ route('dashboard.rolePermission.delete.role', $role->id) }}"><iconify-icon icon="fluent:delete-12-regular" width="24" height="24"></iconify-icon></a>
                            <a href="{{ route('dashboard.rolePermission.permissions', $role->id) }}"><iconify-icon icon="fluent:key-24-regular" width="24" height="32"></iconify-icon></a>
                        </div>
                    </td>
                </tr>

                @empty
                <td colspan="2" class="alert alert-danger text-center">No Role Found</td>
                @endforelse
            </table>
        </div>
    </div>
@endsection
