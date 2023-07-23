@extends('admin.template.base')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets-admin/css/chatapp.css') }}">
@endpush

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Konsultasi</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Beranda</li>
                            <li class="breadcrumb-item active">Konsultasi</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card chat-app">
                        <div id="plist" class="people-list">
                            <ul class="list-unstyled chat-list mb-0">
                                @forelse ($list_chat as $user)
                                    <a href="?id={{ Crypt::encrypt($user->id) }}">
                                        <li class="clearfix">
                                            <img src="{{ asset('assets-admin/images/xs/avatar2.jpg') }}" alt="avatar" />
                                            <div class="about">
                                                <div class="name">{{ $user->name }}</div>
                                                <div class="status"> <i class="fa fa-circle online"></i>Online</div>
                                            </div>
                                        </li>
                                    </a>
                                @empty
                                    Tidak Ada
                                @endforelse
                            </ul>
                        </div>
                        @if (!empty($user_room))
                            <div class="chat">
                                <div class="chat-header clearfix">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                                <img src="assets-admin/images/xs/avatar2.jpg" alt="avatar" />
                                            </a>
                                            <div class="chat-about">
                                                <h5 class="mb-0">{{ $user_room->name }}</h5>
                                                <small> <i class="fa fa-circle online"></i>Online</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="messageBody" class="chat-history"
                                    style="height: 50vh;padding-top: 100px;padding-bottom: 50px;overflow: scroll;">
                                    <ul id="chatWrapper">
                                    </ul>
                                </div>
                                <form id="chatForm" action="chat/store" method="POST">
                                    <div class="chat-message clearfix">
                                        <div class="input-group mb-0">
                                            <input type="hidden" name="status" value="admin">
                                            <input type="hidden" name="user_id" value="{{ $user_room->id }}">
                                            <input id="message" type="text" name="message" class="form-control"
                                                placeholder="Ketikkan Pesanmu">
                                            <div class="input-group-prepend">
                                                <button id="submit" type="submit"
                                                    class="input-group-text bg-secondary text-white" disabled>
                                                    <i class="icon-paper-plane"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @else
                            <div class="chat">
                                <div class="chat-header clearfix">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                                <img src="assets-admin/images/xs/avatar2.jpg" alt="avatar" />
                                            </a>
                                            <div class="chat-about">
                                                <h5 class="mb-0">-</h5>
                                                <small> Pilih Chat Terlebih Dahulu</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-history">
                                    <ul class="mb-0">
                                    </ul>
                                </div>
                                <div class="chat-message clearfix">
                                    <div class="input-group mb-0">
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            read();
            setInterval(() => {
                read();
            }, 1000);

            function read() {
                $.get("chat/read/{{ Crypt::encrypt($user_room->id) }}", {}, function(data) {
                    $("#chatWrapper").html(data);
                });
            }

            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            $("#message").keyup(function() {
                if ($(this).val().length != 0) {
                    $("#submit")
                        .prop("disabled", false)
                        .removeClass("bg-secondary")
                        .addClass("bg-success");
                } else {
                    $("#submit")
                        .prop("disabled", true)
                        .removeClass("bg-success")
                        .addClass("bg-secondary");
                }
            });

            $("#chatForm").on("submit", function(e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr("action"),
                    method: $(this).attr("method"),
                    data: new FormData(this),
                    processData: false,
                    dataType: "json",
                    contentType: false,
                    success: function() {
                        $("#message").val("");
                    },
                    error: function(error) {
                        console.error(error);
                    },
                });
            });
        });
    </script>
@endpush
