$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $("#form").on("submit", function (e) {
        e.preventDefault();

        if (
            confirm(
                "Sebelum mendaftar, pastikan nomor handphone dan alamatmu sudah benar. Lanjutkan?"
            ) === true
        ) {
            $.ajax({
                url: $(this).attr("action"),
                method: $(this).attr("method"),
                data: new FormData(this),
                processData: false,
                dataType: "json",
                contentType: false,
                beforeSend: function () {
                    $("#nameError").html("");
                    $("#emailError").html("");
                    $("#phoneNumberError").html("");
                    $("#addressError").html("");
                    $("#passwordError").html("");
                    $("#confirmPasswordError").html("");

                    $("#submit").html(
                        '<div class="text-center"><div class="spinner-border spinner-border-sm text-white"></div></div>'
                    );
                },
                success: function (response) {
                    console.log(response);
                    if (response.code == 200) {
                        Swal.fire({
                            icon: "success",
                            title: response.status,
                            text: response.message,
                            confirmButtonColor: "#59C4BC",
                            confirmButtonText: "Lanjut",
                            backdrop: true,
                            allowOutsideClick: () => {
                                console.log("Klik Tombol Lanjut");
                            },
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "/login";
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: response.status,
                            text: response.message,
                            confirmButtonText: "Tutup",
                            confirmButtonColor: "#6C757D",
                        });
                    }

                    $("#submit").html("Daftar");
                },
                error: function (error) {
                    console.error(error);
                    if (error.status == 422) {
                        var rspError = error["responseJSON"]["errors"];
                        $("#nameError").html(rspError["name"]);
                        $("#emailError").html(rspError["email"]);
                        $("#phoneNumberError").html(rspError["phone_number"]);
                        $("#addressError").html(rspError["address"]);
                        $("#passwordError").html(rspError["password"]);
                        $("#confirmPasswordError").html(
                            rspError["confirm_password"]
                        );
                    }

                    $("#submit").html("Daftar");
                },
            });
        }
    });
});
