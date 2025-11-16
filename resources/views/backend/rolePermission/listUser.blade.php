@extends('backend.layout')
@section('backend_content')
@forelse ($users as $key => $user)

    <div class="card p-4 mb-4 shadow-sm">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-2">
                <span
                    style="background: #8789ff; width: 35px; height: 35px; display: inline-block; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff;">{{ ++$key }}</span>
            </div>
            <div class="col-lg-2">
                <span>{{ Str::upper($user->name) }}</span>
            </div>
            <div class="col-lg-2">
                <span>{{ Str::lower($user->email) }}</span>
            </div>
            <div class="col-lg-2">
                <img style="width: 100px; border-radius: 10px" src="{{ $user->profile_image ? asset('storage/profileImages/' .$user->profile_image) : asset('assets/img/user.png') }}" alt="">
            </div>
            <div class="col-lg-2">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('dashboard.rolePermission.edit.user', $user->id) }}"><iconify-icon icon="fa-regular:edit" width="24" height="24"></iconify-icon></a>
                    <a class="text-danger" href="{{ route('dashboard.rolePermission.delete.user', $user->id) }}"><iconify-icon icon="fluent:delete-32-regular" width="26" height="26"></iconify-icon></a>
                    <a href="{{ route('dashboard.rolePermission.role.list', $user->id) }}"><iconify-icon icon="eos-icons:admin-outlined" width="24" height="24"></iconify-icon></a>
                </div>
            </div>
        </div>
    </div>

@empty
<div class="card p-4 mb-4 shadow-sm text-danger text-center">
    <b>No data found!</b>
</div>
@endforelse
@endsection
