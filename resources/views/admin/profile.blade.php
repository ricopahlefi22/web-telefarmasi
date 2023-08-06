@extends('admin.template.base')

@push('style')
    <!-- Dropify -->
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/dropify/css/dropify.min.css') }}">
@endpush

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <form id="form" action="{{ url('contact/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h2>Profil Saya</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('dashboard') }}">
                                        <i class="fa fa-dashboard"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Profil Saya</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="d-flex flex-row-reverse">
                                <div class="page_action">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-dark" data-toggle="modal"
                                            data-target="#editProfileModal">
                                            <i class="fa fa-edit"></i> Edit Profil
                                        </button>
                                        <button type="button" class="btn btn-warning" data-toggle="modal"
                                            data-target="#changePasswordModal">
                                            <i class="fa fa-key"></i> Ganti Password
                                        </button>
                                    </div>
                                </div>
                                <div class="p-2 d-flex">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <div class="row">
                                    <div class="col-4 text-right">
                                        <img class="img-fluid"
                                            src="{{ asset(empty(Auth::guard('admin')->user()->photo) ? 'assets-admin/images/user.png' : Auth::guard('admin')->user()->photo) }}">
                                    </div>
                                    <div class="col-8 text-left">
                                        <p>Nama : <strong>{{ Auth::guard('admin')->user()->name }}</strong></p>
                                        <p>Email : <strong>{{ Auth::guard('admin')->user()->email }}</strong></p>
                                        <p>No. Handphone : <strong>{{ Auth::guard('admin')->user()->phone_number }}</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="editProfileModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div id="modalHeader" class="modal-header">
                    <h4 class="modal-title fs-5">Edit Profil</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editProfileForm" action="edit-profile" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('admin')->user()->id }}">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="mb-2">
                                    <label for="title" class="form-label">Foto</label>
                                    <input id="hiddenPhoto" type="hidden" name="hidden_photo">
                                    <input id="photo" type="file" class="dropify" name="photo"
                                        data-default-file="{{ empty(Auth::user()->photo) ? null : asset(Auth::user()->photo) }}"
                                        data-allowed-file-extensions="jpeg jpg png" data-max-file-size="1000K">
                                </div>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="mb-2">
                                    <label for="name" class="form-label">Nama<strong class="text-danger">*</strong>
                                    </label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Nama Lengkap" value="{{ Auth::guard('admin')->user()->name }}">
                                    <span id="nameError" class="invalid-feedback"></span>
                                </div>
                                <div class="mb-2">
                                    <label for="email" class="form-label">Email<strong class="text-danger">*</strong>
                                    </label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Email" value="{{ Auth::guard('admin')->user()->email }}">
                                    <span id="emailError" class="invalid-feedback"></span>
                                </div>
                                <div class="mb-2">
                                    <label for="phoneNumber" class="form-label">No. Handphone<strong
                                            class="text-danger">*</strong>
                                    </label>
                                    <input type="text" class="form-control" id="phoneNumber" name="phone_number"
                                        placeholder="Nomor Handphone"
                                        value="{{ Auth::guard('admin')->user()->phone_number }}">
                                    <span id="phoneNumberError" class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button id="button" type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="changePasswordModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div id="modalHeader" class="modal-header">
                    <h4 class="modal-title fs-5">Ganti Password</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="changePasswordForm" action="change-password" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="id" name="id" value="{{ Auth::guard('admin')->user()->id }}">
                    <div class="modal-body">
                        <div class="mb-2">
                            <label for="oldPassword" class="form-label">
                                Kata Sandi Lama<strong class="text-danger">*</strong>
                            </label>
                            <input type="password" class="form-control" id="oldPassword" name="old_password"
                                placeholder="Kata Sandi Lama">
                            <span id="oldPasswordError" class="invalid-feedback"></span>
                        </div>
                        <div class="mb-2">
                            <label for="newPassword" class="form-label">
                                Kata Sandi Baru<strong class="text-danger">*</strong>
                            </label>
                            <input type="password" class="form-control" id="newPassword" name="new_password"
                                placeholder="Kata Sandi Baru">
                            <span id="newPasswordError" class="invalid-feedback"></span>
                        </div>
                        <div class="mb-2">
                            <label for="confirmPassword" class="form-label">
                                Konfirmasi Kata Sandi<strong class="text-danger">*</strong>
                            </label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirm_password"
                                placeholder="Konfirmasi Kata Sandi">
                            <span id="confirmPasswordError" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button id="button" type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('assets-admin/vendor/dropify/js/dropify.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/profile.js') }}"></script>
@endpush
