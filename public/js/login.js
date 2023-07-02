$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
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
                $("#email").removeClass("is-invalid");
                $("#password").removeClass("is-invalid");
                $("#submit").html(
                    '<div class="text-center"><div class="spinner-border spinner-border-sm text-white"></div></div>'
                );
            },
            success: function(response) {
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
                            window.location.href = response.route;
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

                $("#submit").html("Masuk");
            },
            error: function(error) {
                if (error.status == 422) {
                    var rspError = error["responseJSON"]["errors"];
                    $("#emailError").html(rspError["email"]);
                    $("#passwordError").html(rspError["password"]);

                    if (rspError["email"] && rspError["password"]) {
                        $("#email").focus();
                        $("#email").addClass("is-invalid");
                        $("#password").addClass("is-invalid");
                    } else if (rspError["email"]) {
                        $("#email").focus();
                        $("#email").addClass("is-invalid");
                    } else {
                        $("#password").focus();
                        $("#password").addClass("is-invalid");
                    }
                }

                $("#submit").html("Masuk");
            },
        });

    });
});
