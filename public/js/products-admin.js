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
    ajax: document.URL,
    columns: [
        {
            data: "DT_RowIndex",
            name: "DT_RowIndex",
            searchable: false,
        },
        {
            data: "name",
            name: "name",
        },
        {
            data: "action",
            name: "action",
            orderable: false,
            searchable: false,
            class: "text-center",
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

$("#create").click(function () {
    $("#formModal").modal("show");
    $("#modalTitle").html("Tambah Artikel");
    $("#button").html("Tambah").removeClass("btn-warning");
    $("#id").val("");
    $("#title").val("");
    $("#body").val("");
    $("#titleError").html("");
    $("#bodyError").html("");
});

$("body").on("click", ".edit", function () {
    $.ajax({
        type: "POST",
        url: document.URL + "/check",
        data: {
            id: $(this).data("id"),
        },
        success: function (response) {
            $("#formModal").modal("show");
            $("#modalTitle").html("Edit Artikel");
            $("#button").html("Simpan").addClass("btn-warning");
            $("#titleError").html("");
            $("#bodyError").html("");

            $("#id").val(response.id);
            $("#title").val(response.title);
            $("#body").val(response.body);
        },
    });
});

$("body").on("click", ".publish", function () {
    if (confirm("Posting?") === true) {
        $.ajax({
            type: "POST",
            url: document.URL + "/publish",
            data: {
                id: $(this).data("id"),
            },
            success: function (response) {
                table.draw();
                Toast.fire({
                    icon: "success",
                    title: response.status + "\n" + response.message,
                });
            },
            error: function (error) {
                console.log(error);
                if (error.status == 500) {
                    Toast.fire({
                        icon: "error",
                        title: "Gagal! \nMohon ulangi beberapa saat lagi.",
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

$("body").on("click", ".delete", function () {
    if (confirm("Yakin ingin melanjutkan menghapus data ini?") === true) {
        $.ajax({
            type: "DELETE",
            url: document.URL + "/destroy",
            data: {
                id: $(this).data("id"),
            },
            success: function (response) {
                table.draw();
                Toast.fire({
                    icon: "success",
                    title: response.status + "\n" + response.message,
                });
            },
            error: function (error) {
                if (error.status == 500) {
                    Toast.fire({
                        icon: "error",
                        title: "Gagal! \nMohon ulangi beberapa saat lagi.",
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
