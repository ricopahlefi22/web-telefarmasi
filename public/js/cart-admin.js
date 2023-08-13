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
            data: "user",
            name: "user",
        },
        {
            data: "product",
            name: "product",
        },
        {
            data: "quantity",
            name: "quantity",
        },
        {
            data: "action",
            name: "action",
            orderable: false,
            searchable: false,
            class: "actions text-center",
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

$("#form").on("submit", function (e) {
    e.preventDefault();

    $.ajax({
        url: document.URL + "/store",
        method: $(this).attr("method"),
        data: new FormData(this),
        processData: false,
        dataType: "json",
        contentType: false,
        beforeSend: function () {
            $("#category").removeClass("is-invalid");
            $("#button").html(
                '<div class="text-center"><div class="spinner-border spinner-border-sm text-white"></div> Memproses...</div>'
            );
        },
        success: function (response) {
            table.ajax.reload(null, false);
            $("#formModal").modal("hide");

            Toast.fire({
                icon: "success",
                title: response.status + "\n" + response.message,
            });
        },
        error: function (error) {
            $("#button").html("Simpan");

            if (error.status == 422) {
                var responseError = error["responseJSON"]["errors"];
                $("#quantityError").html(responseError["quantity"]);

                if (responseError["quantity"]) {
                    $("#quantity").addClass("is-invalid");
                    $("#quantity").focus();
                }
            }
        },
    });
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
            $("#modalTitle").html("Edit Jumlah Barang");
            $("#button").html("Simpan").addClass("btn-warning");
            $("#category").removeClass("is-invalid");

            $("#id").val(response.id);
            $("#quantity").val(response.quantity);
        },
        error: function (error) {
            console.error(error);
            if (error.status == 500) {
                Toast.fire({
                    icon: "error",
                    title: "Gagal! \nTerjadi masalah pada server.",
                });
            } else if (error.status == 404) {
                Toast.fire({
                    icon: "error",
                    title: "Data Tidak Ditemukan! \nData mungkin telah terhapus sebelumnya.",
                });
                table.ajax.reload(null, false);
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
                table.ajax.reload(null, false);
                Toast.fire({
                    icon: "success",
                    title: response.status + "\n" + response.message,
                });
            },
            error: function (error) {
                console.error(error);
                if (error.status == 500) {
                    Toast.fire({
                        icon: "error",
                        title: "Gagal! \nTerjadi masalah pada server.",
                    });
                } else if (error.status == 404) {
                    Toast.fire({
                        icon: "error",
                        title: "Data Tidak Ditemukan! \nData mungkin telah terhapus sebelumnya.",
                    });
                    table.ajax.reload(null, false);
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
