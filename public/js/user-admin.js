var Toast = Swal.mixin({
    toast: true,
    position: "bottom-end",
    showConfirmButton: false,
    timer: 3000,
});

var table = $("#table").DataTable({
    stateSave: true,
    processing: true,
    serverSide: true,
    autoWidth: false,
    responsive: true,
    ajax: "users",
    columns: [{
            data: "DT_RowIndex",
            name: "DT_RowIndex",
            searchable: false,
        },
        {
            data: "name",
            name: "name",
        },
        {
            data: "email",
            name: "email",
        },
        {
            data: "action",
            name: "action",
            orderable: false,
            searchable: false,
            class: "actions",
        },
    ],
    oLanguage: {
        sSearch: "Pencarian",
        sInfoEmpty: "Data Belum Tersedia",
        sInfo: "Menampilkan _PAGE_ dari _PAGES_ halaman",
        sEmptyTable: "Data Belum Tersedia",
        sLengthMenu: "Tampilkan _MENU_ Baris",
        sZeroRecords: "Data Tidak Ditemukan",
        sProcessing: "Sedang Memproses...",
        oPaginate: {
            sFirst: "Pertama",
            sPrevious: "Sebelumnya",
            sNext: "Selanjutnya",
            sLast: "Terakhir",
        },
    },
});

$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

$("#create").click(function() {
    $("#formModal").modal("show");
    $("#modalTitle").html("Tambah Data");
    $("#button").html("Tambah").removeClass("btn-warning");
    $("#id").val("");
    $("#name").val("");
    $("#email").val("");
    $("#nameError").html("");
    $("#emailError").html("");
});

$("#form").on("submit", function(e) {
    e.preventDefault();

    $.ajax({
        url: $(this).attr("action"),
        method: $(this).attr("method"),
        data: new FormData(this),
        processData: false,
        dataType: "json",
        contentType: false,
        beforeSend: function() {
            $("#nameError").html("");
            $("#emailError").html("");
            $("#button").html(
                '<div class="text-center"><div class="spinner-border spinner-border-sm text-white"></div> Memproses...</div>'
            );
        },
        success: function(response) {
            table.draw();
            $("#formModal").modal("hide");

            Toast.fire({
                icon: "success",
                title: response.status + "\n" + response.message,
            });
        },
        error: function(error) {
            $("#button").html("Simpan");

            if (error.status == 422) {
                var responseError = error["responseJSON"]["errors"];
                $("#nameError").html(responseError["name"]);
                $("#emailError").html(responseError["email"]);

                if (responseError["name"] && responseError["email"]) {
                    $("#name").focus();
                } else if (responseError["name"]) {
                    $("#name").focus();
                } else {
                    $("#email").focus();
                }
            }
        },
    });
});

$("body").on("click", ".edit", function() {
    $.ajax({
        type: "POST",
        url: "users/check",
        data: {
            id: $(this).data("id"),
        },
        success: function(response) {
            $("#formModal").modal("show");
            $("#modalTitle").html("Sunting Data");
            $("#button").html("Simpan").addClass("btn-warning");
            $("#nameError").html("");
            $("#emailError").html("");

            $("#id").val(response.id);
            $("#name").val(response.name);
            $("#email").val(response.email);
        },
        error: function(error) {},
    });
});

$("body").on("click", ".delete", function() {
    if (confirm("Yakin ingin melanjutkan menghapus data ini?") === true) {
        $.ajax({
            type: "DELETE",
            url: "users/destroy",
            data: {
                id: $(this).data("id"),
            },
            success: function(response) {
                table.draw();
                Toast.fire({
                    icon: "success",
                    title: response.status + "\n" + response.message,
                });
            },
            error: function(error) {
                if (error.status == 500) {
                    Toast.fire({
                        icon: "error",
                        title: "Gagal! \nPeriksa koneksi databasemu.",
                    });
                } else if (error.status == 404) {
                    Toast.fire({
                        icon: "error",
                        title: "Data Tidak Ditemukan! \nData mungkin telah terhapus sebelumnya.",
                    });
                    table.draw();
                } else if (error.status == 419) {
                    Toast.fire({
                        icon: "error",
                        title: "Sesi Telah Berakhir! \nMemuat ulang sistem untuk anda.",
                    });

                    setTimeout(() => {
                        window.location.reload();
                    }, 3000);
                } else {
                    Toast.fire({
                        icon: "error",
                        title: "Masalah Tidak Dikenali! \nMencoba memuat kembali untuk anda.",
                    });

                    setTimeout(() => {
                        window.location.reload();
                    }, 3000);
                }
            },
        });
    }
});
