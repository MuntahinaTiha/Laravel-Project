@extends('backend.layout')
@section('backend_content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex gap-3">
                <img class="rounded-3" style="height: 100px" src="{{ asset('assets/img/avatars/1.png') }}" alt="">

                <div>
                    <h4 class="mb-0">User Name</h4>
                    <small>Full stack web Developer</small>

                    <button class="btn btn-primary d-flex align-items-center gap-2 mt-2">Update Image <iconify-icon icon="clarity:upload-cloud-line" width="20" height="20"></iconify-icon></button>

                </div>
            </div>
        </div>

        <div class="card-body">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit vero ex a eos at quibusdam recusandae
            consequatur nisi harum, eius deleniti quaerat! Rem debitis ipsa ratione ipsam laborum eum modi? Ut, hic in
            accusamus accusantium eum dolores, tenetur dignissimos molestiae ex sit voluptate ipsum obcaecati laborum ipsa
            eius dolor reiciendis.
        </div>
    </div>


    <div class="card mt-3">
        <div class="card-header">
            <h4>User Info</h4>
        </div>

        <div class="card-body">
            <div class="row">
                {{-- USER INFO --}}
                <div class="col-lg-6">
                    <form action="{{ route('dashboard.my.profile.info') }}" method="post">
                        @csrf

                        <label for="name">Name :</label>
                        <input class="form-control p-3 mb-2" type="text" name="name" placeholder="name"
                            value="{{ $user->name }}">

                        <label for="name">Designation :</label>
                        <input class="form-control p-3 mb-2" type="text" name="designation" placeholder="designation">

                        @error('designation')
                             <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <label for="name">Email :</label>
                        <input class="form-control p-3 mb-2" type="email" name="email" placeholder="email"
                            value="{{ $user->email }}">

                        <button class="btn btn-primary w-100 p-2">Info Update</button>

                    </form>
                </div>

                {{-- USER PASSWORD --}}
                <div class="col-lg-6">
                    <form action="" method="">
                        @csrf

                        <label for="current-password">Current Password :</label>
                        <input id="current-password" class="form-control p-3 mb-2" type="password" name="password"
                            placeholder="current password">

                        <label for="new-password">New Password :</label>
                        <input id="new-password" class="form-control p-3 mb-2" type="password" name="new_password"
                            placeholder="new password">

                        <label for="confirm-password">Confirm Password :</label>
                        <input id="confirm-password" class="form-control p-3 mb-2" type="password" name="confirm_password"
                            placeholder="confirm password">


                        <button class="btn btn-primary w-100 p-2">Password Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('backed_js')
    <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>
@endpush
